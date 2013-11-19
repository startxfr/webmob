<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Home</title>
<?php include 'metas.php'; ?>
    </head>
    <body>
<?php include 'header.php'; ?>
        <article id="content">
            <p>Page d'accueil</p>
            <video width="400" height="222" controls="controls">
                <source src="http://clips.vorwaerts-gmbh.de/VfE_html5.mp4" type="video/mp4" />
                <source src="http://clips.vorwaerts-gmbh.de/VfE.webm" type="video/webm" />
                <source src="http://clips.vorwaerts-gmbh.de/VfE.ogv" type="video/ogg" />
                Ici l'alternative à la vidéo : un lien de téléchargement, un message, etc.
            </video>
        </article>
<?php include 'footer.php'; ?>
    </body>
</html>