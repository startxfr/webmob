<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Search</title>
<?php include 'metas.php'; ?>
    </head>
    <body>
<?php include 'header.php'; ?>
        <article id="content">
            <form method="get" action="search.php">
                <fieldset>
                    <legend>Recherche</legend>
                    <div>
                        <label for="author">Auteur</label>
                        <input type="text" name="author" id="author"/>
                    </div>
                    <div>
                        <label for="nationality">Nationalité</label>
                        <input type="text" name="nationality" id="nationality"/>
                    </div>
                    <div>
                        <label for="title">Titre</label>
                        <input type="text" name="title" id="title"/>
                    </div>
                    <div>
                        <label for="year">Année</label>
                        <input type="range" name="year" id="year" value="2013" min="1970" max="2013" step="1"/>
                    </div>
                    <div>
                        <label for="price">Prix</label>
                        <input type="number" name="price" id="price" value="20" min="5" max="80" step="5"/>
                    </div>
                    <div>
                        <label for="dispo">Disponibilité</label>
                        <input type="text" name="dispo" id="dispo"/>
                    </div>
                    <div>
                        <input type="reset" value="Effacer"/>
                        <input type="submit" value="Rechercher"/>
                    </div>
                </fieldset>
            </form>
        </article>
<?php include 'footer.php'; ?>
    </body>
</html>