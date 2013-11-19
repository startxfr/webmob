<!DOCTYPE html>
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
for($i = 0, $c = 2; $i < $c; $i++):
?>
                    <tr class="<?=($i % 2 == 0) ? 'odd' : 'even'?>">
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
<?php
endfor;
?>
                </tbody>
            </table> 
        </article>
<?php include 'footer.php'; ?>
    </body>
</html>