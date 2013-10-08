<!doctype html>
<html lang="fr">
    <head>
        <title>Une Bande D&eacute;sin&eacute;e au hasard</title>
        <meta charset="utf-8">
        <meta name="description" content="Base de donn&eacute;e sur les Bandes dessin&eacute;es">
        <meta name="author" content="Christophe">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="jss/style.css">
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="apple-touch-icon" href="img/logo-57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/logo-72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/logo-114.png">
        <link rel="apple-touch-startup-image" href="img/splash-touch.png">
        <script lang="javascript" type="text/javascript" src="jss/lib.js"> </script>
        <script lang="javascript" type="text/javascript">
            myGps.init()

            function displayGeo() {
                document.getElementById("geolocBox").innerHTML = myGps.get();
            }
        </script>
    </head>

    <body onload="displayGeo()">
        <header class="wrapper">
            <a href="index.php">
                <img src="img/logo-72.png" class="logo" alt="logo myBd" title="Moteur de recherche de Bd"/>
                <hgroup>
                    <h1>MyBd.fr</h1>
                    <h2>plein d'infos sur les BD</h2>
                </hgroup>
            </a>
        </header>
        <br class="clear"/>

        <div class="wrapper">
            <nav id="menu">
                <ul>
                    <li><a href="search.php">Recherche de BD</a></li>
                    <li><a href="last.php">Les derni&egrave;res BD</a></li>
                    <li><a href="random.php">Au hasard</a></li>
                    <li><a href="legal.php">Info l&eacute;gales</a></li>
                </ul>
            </nav>
        </div>
        <br class="clear"/>

        <section class="wrapper">
            <article>
                <h1>Trouver une Bande Dessin&eacute;e au hasard</h1>
                <p>plus tard, remplir cette section avec du contenu dynamique</p>
                <p>Vos informations de géolocalisation sont les suivantes :
                    <br/>
                    <span id="geolocBox"><i>aucune</i></span>
                </p>
            </article>
        </section>
        <br class="clear"/>

        <footer>
            <nav>
                <ul>
                    <li><a href="search.php">Recherche de BD</a></li>
                    <li><a href="last.php">Les derni&egrave;res BD</a></li>
                    <li><a href="random.php">Au hasard</a></li>
                    <li><a href="legal.php">Info l&eacute;gales</a></li>
                </ul>
            </nav>
        </footer>
    </body>
</html>