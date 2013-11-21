<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Home</title>
<?php include '../metas.php'; ?>
    </head>
    <body>
<?php include '../header.php'; ?>
        <div id="home" data-role="page">
            <div data-role="header"></div>
            <div data-role="content">
                <ul>
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
            </div>
            <div data-role="footer"></div>
        </div>
        <div id="search" data-role="page" data-add-back-btn="true">
            <div data-role="header"></div>
            <div data-role="content">
                <form method="get" action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>">
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
                    </fieldset>
                </form>
            </div>
            <div data-role="footer" class="ui-bar">
                <div class="row">
                    <a href="#" class="redButton" data-role="button" data-icon="delete">Effacer</a>
                    <a href="#" class="whiteButton" data-role="button" data-icon="search" data-theme>Rechercher</a>
                </div>
<?php include '../footer.php'; ?>
            </div>
        </div>
        <div id="last" data-role="page" data-add-back-btn="true">
            <div data-role="header"></div>
            <div data-role="content">
                <video width="320" height="180" controls="controls">
                    <source src="http://clips.vorwaerts-gmbh.de/VfE_html5.mp4" type="video/mp4" />
                    <source src="http://clips.vorwaerts-gmbh.de/VfE.webm" type="video/webm" />
                    <source src="http://clips.vorwaerts-gmbh.de/VfE.ogv" type="video/ogg" />
                    Ici l'alternative à la vidéo : un lien de téléchargement, un message, etc.
                </video>
            </div>
            <div data-role="footer">
<?php include '../footer.php'; ?>
            </div>
        </div>
        <div id="random" data-role="page" data-add-back-btn="true">
            <div data-role="header"></div>
            <div data-role="content">
                <p id="currentLocation">Page Random: Contenu par défaut</p>
                <div id="geoMap" class="map rounded"></div>
            </div>
            <div data-role="footer">
<?php include '../footer.php'; ?>
            </div>
        </div>
        <div id="legal" data-role="page" data-add-back-btn="true">
            <div data-role="header"></div>
            <div data-role="content">
                <p>contenu de la page legal</p>
            </div>
            <div data-role="footer">
<?php include '../footer.php'; ?>
            </div>
        </div>
    </body>
</html>