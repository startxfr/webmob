<?php

class Search {
    
    public function __construct()
    {
        if(count($_GET) > 0) {
            header(
                'location:last.php' .
                (!empty($_GET['author']) ? '?author=' . urlencode($_GET['author']) : '') .
                (!empty($_GET['nationality']) ?
                    ((!empty($_GET['author']) ? '&' : '?') .
                'nationality=' . urlencode($_GET['nationality'])) : '') .
                (!empty($_GET['title']) ?
                    ((!empty($_GET['author']) || !empty($_GET['nationality']) ? '&' : '?') .
                'title=' . urlencode($_GET['title'])) : '') .
                (!empty($_GET['year']) ?
                    ((!empty($_GET['author']) || !empty($_GET['nationality']) || !empty($_GET['title']) ? '&' : '?') .
                'year=' . urlencode($_GET['year'])) : '') .
                (!empty($_GET['price']) ?
                    ((!empty($_GET['author']) || !empty($_GET['nationality']) || !empty($_GET['title']) || !empty($_GET['year']) ? '&' : '?') .
                'price=' . urlencode($_GET['price'])) : '') .
                (!empty($_GET['availability']) ?
                    ((!empty($_GET['author']) || !empty($_GET['nationality']) || !empty($_GET['title']) || !empty($_GET['year']) || !empty($_GET['price']) ? '&' : '?') .
                'availability=' . urlencode($_GET['availability'])) : '')
            );
        }
    }
    
}

new Search();

?><!DOCTYPE html>
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
                        <label for="year">Année <span id="indic"></span></label>
                        <input type="range" name="year" id="year" value="1933" min="1891" max="1994" step="1"/>
                    </div>
                    <div>
                        <label for="price">Prix</label>
                        <input type="number" name="price" id="price" value="18" min="18" max="36" step="1"/>
                    </div>
                    <div>
                        <label for="dispo">Disponibilité</label>
                        <input type="text" name="availability" id="availability"/>
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