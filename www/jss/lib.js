(function() {
    
    
    // Namespace
    
    k64 = window.k64 || {};
    
    
    // Storage
    
    k64.storage = {};
    
    if(window.localStorage) {

        k64.storage.set = function(sLabel, sValue)
        {
            window.localStorage.setItem(sLabel, sValue);
        };

        k64.storage.get = function(sLabel)
        {
            return window.localStorage.getItem(sLabel);
        };

        k64.storage.clear = function()
        {
            window.localStorage.clear();
        };

        k64.storage.reset = function(sLabel)
        {
            window.localStorage.removeItem(sLabel);
        };
    }
    else {
        
        k64.storage._onError = function()
        {
            return alert('window.localStorage is unavailable on this browser');
        };
    }
    
    
    // Geolocalisation
    
    k64.geoloc = {};
    
    k64.geoloc.position = {};
    
    k64.geoloc.init = function()
    {
        k64.geoloc.update();
        return this;
    };

    k64.geoloc.update = function(callBack)
    {
        if(typeof callBack !== 'function') {
            callBack = k64.geoloc._set;
        }
        navigator.geolocation.getCurrentPosition(callBack, k64.geoloc._onError);
        return this;
    };
    
    k64.geoloc._set = function(oPosition)
    {
        var _sInfopos = "";
        _sInfopos += "Latitude : " + oPosition.coords.latitude + "<br/>";
        _sInfopos += "Longitude: " + oPosition.coords.longitude + "<br/>";
        _sInfopos += "Altitude : " + oPosition.coords.altitude + "<br/>";
        k64.storage.set("lastPosition", _sInfopos);
        return this;
    };
    
    k64.geoloc.get = function(sKey)
    {
        return k64.storage.get(sKey);
    };
    
    k64.geoloc.reset = function()
    {
        k64.geoloc.update();
        return this;
    };
    
    k64.geoloc._onError = function(oError)
    {
        var _sInfo = "<b>Erreur lors de la g\u00e9olocalisation : ";
        switch(oError.code) {
            case oError.TIMEOUT:
                _sInfo += "Timeout !<br/>";
            break;
            case oError.PERMISSION_DENIED:
                _sInfo += "Vous n'avez pas donn\u00e9 la permission<br/>";
            break;
            case oError.POSITION_UNAVAILABLE:
                _sInfo += "La position n'a pu \u00eatre d\u00e9termin\u00e9e<br/>";
            break;
            case oError.UNKNOWN_ERROR:
                _sInfo += "Erreur inconnue";
            break;
        }
        _sInfo += "</b>";
        k64.storage.set("lastPosition", _sInfo);
    };
    
    k64.geoloc.displayGeo = function()
    {
        document.getElementById("currentLocation").innerHTML = k64.geoloc.get("lastPosition");
        k64.geoloc.update(function(position)
        {
            geoposString = '' + position.coords.latitude + ',' + position.coords.longitude;
            $('#geoMap').gmap().bind('init', function(ev, map)
            {
                $('#geoMap').gmap(
                    'addMarker',
                    {
                        'position'  : geoposString,
                        'bounds'    : true
                    }
                ).click(function()
                {
                    $('#geoMap').gmap(
                        'openInfoWindow',
                        {
                            'content': 'Votre position !!!<br/>' + document.getElementById("currentLocation").innerHTML
                        },
                        this
                    );
                });
            });
        });
        return this;
    };
    
    window.onload = function()
    {
        if(document.getElementById('indic')) {
            document.getElementById('indic').innerHTML = '(' + document.getElementById('year').value + ')';
            document.getElementById('year').onchange = function(e)
            {
                document.getElementById('indic').innerHTML = '(' + this.value + ')';
            };
        }
        if(k64.storage._onError) {
            k64.storage._onError();
        }
        else {
            if(/(#)?random(.php)?/.test(window.location.href)) {
                k64.geoloc.init();
                if(/jqm/.test(window.location.href)) {
                    k64.geoloc.displayGeo();
                }
                else {
                    document.getElementById('currentLocation').innerHTML = k64.geoloc.get("lastPosition");
                }
            }
        }
    };
    
})();