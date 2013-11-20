<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Home</title>
<?php include '../metas.php'; ?>
    </head>
    <body>
<?php include '../header.php'; ?>
        <div class="toolbar">
            <h1 id="pageTitle">Titre de page</h1>
            <a id="backButton" class="button" href="#">Back</a>
        </div>
        <ul id="home" title="myBD.fr" selected="true">
            <li<?=preg_match('/search/', $_SERVER['REQUEST_URI'])?' class="current"':''?>>
                <a href="#search">Search</a>
            </li>
            <li<?=preg_match('/last/', $_SERVER['REQUEST_URI'])?' class="current"':''?>>
                <a href="#last">Last</a>
            </li>
            <li<?=preg_match('/random/', $_SERVER['REQUEST_URI'])?' class="current"':''?>>
                <a href="#random">Random</a>
            </li>
            <li<?=preg_match('/legal/', $_SERVER['REQUEST_URI'])?' class="current"':''?>>
                <a href="#legal">Legal</a>
            </li>
        </ul>
        <form method="get" action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" id="search" title="Search" class="panel">
            <fieldset>
                <legend>Recherche</legend>
                <div class="row">
                    <label for="author">Auteur</label>
                    <input type="text" name="author" id="author" placeholder="Nom d'auteur"/>
                </div>
                <div class="row">
                    <label for="nationality">Nationalité</label>
                    <input type="text" name="nationality" id="nationality" placeholder="abréviation de nationalité"/>
                </div>
                <div class="row">
                    <label for="title">Titre</label>
                    <input type="text" name="title" id="title" placeholder="Intitulé de titre"/>
                </div>
                <div class="row">
                    <label for="year">Année <span id="indic"></span></label>
                    <input type="range" name="year" id="year" value="1933" min="1891" max="1994" step="1"/>
                </div>
                <div class="row">
                    <label for="price">Prix</label>
                    <input type="number" name="price" id="price" value="18" min="18" max="36" step="1"/>
                </div>
                <div class="row">
                    <label for="dispo">Disponibilité</label>
                    <input type="text" name="availability" id="availability" placeholder="0 ou 1"/>
                </div>
                <div class="row">
                    <input type="reset" value="Effacer"/>
                    <input type="submit" value="Rechercher"/>
                </div>
            </fieldset>
        </form>
        <div id="last" title="Last" class="panel">
            <video width="320" height="180" controls="controls">
                <source src="http://clips.vorwaerts-gmbh.de/VfE_html5.mp4" type="video/mp4" />
                <source src="http://clips.vorwaerts-gmbh.de/VfE.webm" type="video/webm" />
                <source src="http://clips.vorwaerts-gmbh.de/VfE.ogv" type="video/ogg" />
                Ici l'alternative à la vidéo : un lien de téléchargement, un message, etc.
            </video>
        </div>
        <div id="random" title="Random" class="panel">
            <p id="currentLocation">Page Random: Contenu par défaut</p>
        </div>
        <div id="legal" title="Legal" class="panel">contenu de la page legal</div>
<?php include '../footer.php'; ?>
    </body>
</html>