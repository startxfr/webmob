<!doctype html>
<html lang="fr">
    <head>
        <title>Bienvenue sur mybd.fr</title>
        <meta charset="utf-8"/>
        <meta name="description" content="Base de donn&eacute;e sur les Bandes dessin&eacute;es"/>
        <meta name="author" content="Christophe"/>
        <meta name="HandheldFriendly" content="True"/>
        <meta name="MobileOptimized" content="320"/>
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        <link rel="shortcut icon" href="../img/favicon.ico"/>
        <link rel="apple-touch-icon" href="../img/logo-57.png"/>
        <link rel="apple-touch-icon" sizes="72x72" href="../img/logo-72.png"/>
        <link rel="apple-touch-icon" sizes="114x114" href="../img/logo-114.png"/>
        <link rel="apple-touch-startup-image" href="../img/splash-touch.png"/>

        <link rel="stylesheet" href="iui/iui.css" type="text/css" />
        <link rel="stylesheet" href="iui/t/default/default-theme.css" type="text/css"/>
        <script type="application/x-javascript" src="iui/iui.js"></script>

        <link rel="stylesheet" href="../jss/style-iui.css"/>
        <script lang="javascript" type="text/javascript" src="../jss/lib.js"> </script>

        <script lang="javascript" type="text/javascript">
            myGps.init()
            function displayGeo() {
                document.getElementById("geolocBox").innerHTML = myGps.get();
            }
            function memoriser() {
                var form = document.forms[0];
                myStore.set('auteur',form.auteur.value);
                myStore.set('nationalite',form.nationalite.value);
                myStore.set('titre',form.titre.value);
                myStore.set('annee',form.annee.value);
                myStore.set('prix',form.prix.value);
                myStore.set('dispo',form.dispo.value);
            }
            function charger() {
                var form = document.forms[0];
                form.auteur.value = myStore.get('auteur')
                form.nationalite.value = myStore.get('nationalite')
                form.titre.value = myStore.get('titre')
                form.annee.value = myStore.get('annee')
                form.prix.value = myStore.get('prix')
                form.dispo.value = myStore.get('dispo')
            }
            function reInit() {
                myStore.clear()
                var form = document.forms[0];
                form.auteur.value =
                    form.nationalite.value =
                    form.titre.value =
                    form.annee.value =
                    form.prix.value =
                    form.dispo.value = ""
            }
        </script>

    </head>

    <body onload="displayGeo();charger()">
        <div class="toolbar">
            <h1 id="pageTitle">Bienvenue</h1>
            <a id="backButton" class="button" href="#"></a>
        </div>

        <ul id="home" title="myBD.fr" selected="true">
            <li><a href="#search">Recherche de BD</a></li>
            <li><a href="#last">Les derni&egrave;res BD</a></li>
            <li><a href="#random">Au hasard</a></li>
            <li><a href="#legal">Info l&eacute;gales</a></li>
        </ul>

        <form id="search" title="Recherche" class="panel" name="recherche" action="index.php" method="get">
            <fieldset>
                <div class="row">
                    <label for="auteur">Auteur</label>
                    <input id="auteur" name="auteur" type="text" placeholder="Nom d'auteur" onchange="memoriser()"/>
                </div>
                <div class="row">
                    <label for="nationalite">Nationalit&eacute;</label>
                    <input id="nationalite" name="nationalite" placeholder="Initiales pays ou nom" onchange="memoriser()"/>
                </div>
                <div class="row">
                    <label for="titre">Titre</label>
                    <input id="titre" name="titre" placeholder="Titre de la BD" onchange="memoriser()"/>
                </div>
                <div class="row">
                    <label for="annee">Ann&eacute;e</label>
                    <input id="annee" type="range" name="annee" min="1900" max="2013"  onchange="memoriser()"/>
                </div>
                <div class="row">
                    <label for="prix">Prix</label>
                    <input id="prix" type="range" name="prix" min="0" max="200"  onchange="memoriser()"/> &euro;
                </div>
                <div class="row">
                    <label for="dispo">Disponibilit&eacute;</label>
                    <input id="dispo" name="dispo" placeholder="disponibilit&eacute;" onchange="memoriser()"/>
                </div>
            </fieldset>
            <a class="whiteButton" href="javascript:recherche.submit()">Rechercher</a>
            <a class="redButton" href="javascript:reInit()">Re-initialiser</a>
        </form>

        <div id="last" title="Dernièrement" class="panel">
            Ici mettre la liste des dernières BD
            <p>
                <video width="320" height="180" controls="">
                    <source src="http://clips.vorwaerts-gmbh.de/VfE_html5.mp4" type="video/mp4">
                    <source src="http://clips.vorwaerts-gmbh.de/VfE.webm" type="video/webm">
                    <source src="http://clips.vorwaerts-gmbh.de/VfE.ogv" type="video/ogg">
                    <object width="320" height="180" type="application/x-shockwave-flash" data="img/player.swf">
                        <param name="movie" value="img/player.swf">
                        <param name="flashvars" value="autostart=true&amp;controlbar=over&amp;image=poster.jpg&amp;file=http://clips.vorwaerts-gmbh.de/VfE_flash.mp4">
                        <img src="img/video.jpg" width="320" height="180" alt="Big Buck Bunny" title="No video playback capabilities, please download the video below">
                    </object>
                </video>
            </p>
        </div>

        <div id="random" title="Hasard" class="panel">
            <p>plus tard, remplir cette section avec du contenu dynamique</p>
            <p>Vos informations de géolocalisation sont les suivantes :
                <br/>
                <span id="geolocBox"><i>aucune</i></span>
            </p>
        </div>

        <div id="legal" title="Info Légales" class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis congue viverra condimentum. Vivamus cursus ante et nunc pretium sollicitudin sit amet a dui. Vivamus dui mi, volutpat ac scelerisque in, imperdiet at ipsum. Curabitur vitae turpis at tellus imperdiet semper vitae a metus. Ut faucibus, odio ut cursus pretium, libero sapien viverra augue, et laoreet leo dolor aliquam orci. Nunc eu mattis turpis. Sed sit amet nisl ac dui rutrum viverra at et lectus. Donec eu aliquet lorem. Sed dignissim, diam nec dignissim ullamcorper, metus lectus varius mi, id consequat turpis erat eu sapien. Nam vehicula volutpat urna, sed fringilla tortor tristique non. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus accumsan semper quam, sit amet cursus purus semper sit amet. Mauris sed feugiat mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            <p>Donec lobortis purus non purus porttitor ornare. Duis quis quam ligula, quis ullamcorper leo. Sed vestibulum consequat mattis. Phasellus ut nulla sit amet lacus ullamcorper rutrum sed ut tortor. Nam id felis sit amet tellus imperdiet tincidunt non ac dui. Donec sit amet nisl a mauris facilisis condimentum nec consequat nulla. Nulla auctor varius nisl, non facilisis odio fringilla eget. Aenean sollicitudin pulvinar nisi at dignissim. Nam dapibus vehicula dui non sagittis. Vivamus viverra, diam suscipit molestie aliquet, sem turpis sollicitudin turpis, aliquam elementum neque mi eu arcu. Donec dolor eros, cursus porttitor sollicitudin vel, iaculis et est. Integer eu orci sit amet sapien tempor luctus. Nunc consectetur odio non ante faucibus venenatis. Sed scelerisque pretium nisl, eget luctus felis auctor vel. Pellentesque tortor felis, dictum vel congue et, ornare ut purus. Mauris mollis ultrices lorem, in aliquam magna sodales eu.</p>
            <p>Nullam nec quam velit, non gravida arcu. Integer et sem quis turpis consequat tristique a ac diam. Duis non nisi tortor, porta ultricies sem. Nulla at nibh quam. In ac tortor et urna semper dictum id sit amet enim. Donec quis nibh non purus bibendum egestas. Aenean tincidunt quam et nisl sollicitudin et pharetra eros tincidunt. Aliquam suscipit tempus arcu et varius. Maecenas consectetur, turpis eu sodales tincidunt, elit lorem condimentum nisi, volutpat tincidunt neque sapien et augue. In molestie porta eros, eget egestas tellus ultricies in. Vivamus fermentum dignissim velit, quis accumsan ligula elementum eget.</p>
        </div>


    </body>
</html>