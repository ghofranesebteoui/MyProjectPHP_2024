<?php
ob_start();
?>
<div class="container mt-3">
    <table class="table">
        <thead class="table-secondary">
            <tr>
                <th>Identifiant</th>
                <th>Libellé</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //$Produit tab numérique
            foreach ($lesProduits as $Produit) {
            ?> <tr>
                    <!--affichage de chaque ligne du $Produit qui est un tab num-->
                    <td><?= $Produit[0] ?></td>
                    <td><?= $Produit[1] ?></td>
                    <td><?= $Produit[2] ?></td>
                    <td><?= $Produit[3] ?></td>
                    <!--les 3 colonnes de Action-->
                    <td>
                        <!--envoyer l'id comme param pour lui faire les actions-->
                        <a href="detail.php?id=<?= $Produit[0] ?>" class="btn btn-info btn-sm">Voir détail</a>
                    </td>
                    <td>
                        <a href="delete.php?id=<?= $Produit[0] ?>" class="btn btn-danger btn-sm">Supprimer</a>
                    </td>
                    <td>
                        <a href="detail.php?id=<?= $Produit[0] ?>" class="btn btn-success btn-sm">Ajouter</a>
                    </td>
                </tr>
            <?php  }
            ?>
        </tbody>
    </table>
</div>
<?php
//vider le tompon
$contenu = ob_get_clean();
$titre = "Liste des Produits";
include "layout.php";
?>