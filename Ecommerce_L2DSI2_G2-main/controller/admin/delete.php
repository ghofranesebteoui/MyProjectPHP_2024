<?php
//il faut récuperer l'id pour supprimer le produit
$id = $_GET['id'];
//les méthodes sont encapsulées dans l'objet crud
require_once "../classes/crud.php";
$crud = new crud();
$res = $crud->delete($id);
if ($res = $pdo->exec($sql)) {


    header("Location:All.php");
    exit;
} else echo "pb de suppression";
