<?php
ob_start()
?>
<div class="row">
    <div class="col-6">
        <!--afficher la partie gauche(image)-->
        <div class="card">
            <img src="<?= $produit[6] ?>" alt="photo">
        </div>
    </div>
    <div class="col-6">

        <h3><?= $produit[1] ?>(<?= $produit[3] ?>DT)</h3>
        <p><?= $produit[5] ?></p>
    </div>
</div>

<?php
//vider le tompon
$contenu = ob_get_clean();
$titre = "Liste des Produits";
include "layout.php";
?>