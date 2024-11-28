<?php
ob_start();
?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="form-control">
    <label for="">Libellé</label><input type="text" name="lib" id="" class="form-control"><br>
    <label for="">Prix</label><input type="text" name="pu" id="" class="form-control"><br>
    <label for="">Quantité</label><input type="text" name="qte" id="" class="form-control"><br>
    <label for="">Description</label><input type="text" name="desc" id="" class="form-control"><br>
    <label for="">Image</label><input type="text" name="img" id="" class="form-control"><br>
    <label for="">En Promo</label><input type="text" name="pro" value="0" id="" class="form-control"><br>
    <input type="submit" value="Entrer" name="ok" class="btn btn-success btn-xl">
</form>
<?php
if (isset($_POST['ok'])) {
    /*require_once "../connexion.php";
    $sql = "INSERT INTO `produit` (`id`, `libelle`, `prix`, `qte`, `desc`, `image`, `promo`) 
    VALUES (NULL, 'cable vga', 200, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing 
    elit. Deleniti tempore itaque obcaecati aut repellendus iste. Laudantium rerum error distinctio
    dolores vero, reiciendis quae amet impedit aspernatur aliquam suscipit. Architecto, maiores.\r\n',
    'https://picsum.photos/images/200/200', '0')";
    $connexion = new Connexion(); //afin de pouvoir utiliser l'objet pdo
    $pdo = $connexion->getConnexion();
    //envoie de la requete sql
    $res = $pdo->exec($sql);*/
    require_once "../classes/crud.php";
    $id = $_GET['id'];
    $crud = new crud();
    $res = $crud->add($produit);
    if ($res) {
        header("Location: All.php");
        exit;
    } else {
        echo "Insertion échouée";
    }
}
$titre = "Ajout d'un produit";
$contenu = ob_get_clean();
include "layout.php";
?>