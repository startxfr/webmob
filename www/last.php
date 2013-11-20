<?php

class BD {
    
    private $connexion  = null;
    private $db         = 'mysql:host=localhost;dbname=formation';
    private $pass       = 'lolmdr64';
    private $user       = 'k64';
    private $results    = array();
    private $query      = '';
    
    public function getResults()
    {
        return $this->results;
    }
    
    public function getQuery()
    {
        return $this->query;
    }
    
    public function __construct()
    {
        $this->connexion = new PDO($this->db, $this->user, $this->pass);
        $query = "
            SELECT `author`, `nationality`, `title`, `year`, `price`, `availability`
            FROM `BD`
        ";
        if(count($_GET) > 0) {
            $query .= "WHERE ";
        }
        if(isset($_GET['author'])) {
            $query .= "`author` LIKE :author";
        }
        if(isset($_GET['nationality'])) {
            if(isset($_GET['author'])) {
                $query .= " AND ";
            }
            $query .= "`nationality` = :nationality";
        }
        if(isset($_GET['title'])) {
            if(isset($_GET['author']) || isset($_GET['nationality'])) {
                $query .= " AND ";
            }
            $query .= "`title` LIKE :title";
        }
        if(isset($_GET['year'])) {
            if(isset($_GET['author']) || isset($_GET['nationality']) || isset($_GET['title'])) {
                $query .= " AND ";
            }
            $query .= "`year` LIKE :year";
        }
        if(isset($_GET['price'])) {
            if(isset($_GET['author']) || isset($_GET['nationality']) || isset($_GET['title']) || isset($_GET['year'])) {
                $query .= " AND ";
            }
            $query .= "`price` = :price";
        }
        if(isset($_GET['availability'])) {
            if(isset($_GET['author']) || isset($_GET['nationality']) || isset($_GET['title']) || isset($_GET['year']) || isset($_GET['price'])) {
                $query .= " AND ";
            }
            $query .= "`availability` = :availability";
        }
        $this->query = $query;
        $request = $this->connexion->prepare($this->query);
        if(isset($_GET['author'])) {
            $author = '%' . $_GET['author'] . '%';
            $request->bindParam(':author', $author, PDO::PARAM_STR);
        }
        if(isset($_GET['nationality'])) {
            $nationality = $_GET['nationality'];
            $request->bindParam(':nationality', $nationality, PDO::PARAM_STR);
        }
        if(isset($_GET['title'])) {
            $title = '%' . $_GET['title'] . '%';
            $request->bindParam(':title', $title, PDO::PARAM_STR);
        }
        if(isset($_GET['year'])) {
            $year = '%' . $_GET['year'] . '%';
            $request->bindParam(':year', $year, PDO::PARAM_STR);
        }
        if(isset($_GET['price'])) {
            $price = $_GET['price'];
            $request->bindParam(':price', $price, PDO::PARAM_STR);
        }
        if(isset($_GET['availability'])) {
            $availability = $_GET['availability'];
            $request->bindParam(':availability', $availability, PDO::PARAM_STR);
        }
        $request->execute();
        $this->results = $request->fetchAll(PDO::FETCH_ASSOC);
    }
}

$bd = new BD();

?><!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Last</title>
<?php include 'metas.php'; ?>
    </head>
    <body>
<?php include 'header.php'; ?>
        <article id="content">
            <h1>Les dernières BD ajoutées</h1>
            <table cellpadding="0" cellspacing="0" border="0" summary="Dernières BD ajoutées">
                <thead>
                    <tr>
                        <th>Auteur</th>
                        <th>Nationalité</th>
                        <th>Titre</th>
                        <th>Année</th>
                        <th>Prix</th>
                        <th>Disponibilité</th>
                    </tr>
                </thead>
                <tbody>
<?php
$results = $bd->getResults();
if(count($results) == 0) {
    echo '<td colspan="6"><p class="alert">No result found</p><p class="query">Query: ' . $bd->getQuery() . '</p></td>'; 
}
else {
    for($i = 0, $c = count($results); $i < $c; $i++):
?>
                    <tr class="<?=($i % 2 == 0) ? 'odd' : 'even'?>">
                        <td><?=$results[$i]['author']?></td>
                        <td class="center"><?=$results[$i]['nationality']?></td>
                        <td><?=mb_convert_encoding($results[$i]['title'], 'utf-8', 'iso-8859-1');?></td>
                        <td class="center"><?=substr($results[$i]['year'], 0, 4)?></td>
                        <td class="center"><?=$results[$i]['price']?>&euro;</td>
                        <td class="center"><?=$results[$i]['availability'] == 1 ? 'en stock' : 'indisponible'?></td>
                    </tr>
<?php
    endfor;
}
?>
                </tbody>
            </table> 
        </article>
<?php include 'footer.php'; ?>
    </body>
</html>