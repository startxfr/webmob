
myStore = {
    displayError : true
}
myStore.set = function(key,val)  {
    if (localStorage)
        localStorage.setItem(key,val);
    else if(this.displayError)
        this.displayUnsupported()
    return this;
}
myStore.get = function(key)  {
    if (localStorage)
        return localStorage.getItem(key);
    else if(this.displayError)
        this.displayUnsupported()
    return false;
}
myStore.reset = function(key)  {
    this.set(key,undefined)
    return this;
}
myStore.clear = function()  {
    if (localStorage)
        localStorage.clear();
    else if(this.displayError)
        this.displayUnsupported()
    return this;
}
myStore.displayUnsupported = function()  {
    alert("Votre navigateur ne supporte pas le HTML5 et le stockage serveur. Impossible de mémoriser votre saisie.")
}




myGps = {}
myGps.init = function()  {
    myGps.update();
    return this;
}
myGps.update = function(callback)  {
    if(typeof callback !== 'function')
        callback = myGps._set
    navigator.geolocation.getCurrentPosition(callback, myGps._onError);
    return this;
}
myGps._set = function(position)  {
    var infopos = "";
    infopos += "Latitude : "+position.coords.latitude +"<br/>";
    infopos += "Longitude: "+position.coords.longitude+"<br/>";
    infopos += "Altitude : "+position.coords.altitude +"<br/>";
    myStore.set("lastPosition",infopos);
    return this;
}
myGps.get = function(key)  {
    return myStore.get("lastPosition");
}
myGps.reset = function(key)  {
    this.update()
    return this;
}
myGps._onError = function(error)  {
    var info = "<b>Erreur lors de la géolocalisation : ";
    switch(error.code) {
        case error.TIMEOUT:
            info += "Timeout !<br/>";
            break;
        case error.PERMISSION_DENIED:
            info += "Vous n’avez pas donné la permission<br/>";
            break;
        case error.POSITION_UNAVAILABLE:
            info += "La position n’a pu être déterminée<br/>";
            break;
        case error.UNKNOWN_ERROR:
            info += "Erreur inconnue";
            break;
            info += "</b>";
    }
    myStore.set("lastPosition",info);
}
