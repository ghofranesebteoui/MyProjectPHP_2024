<?php
require_once "../../model/crud.php";
//construire l'objet pour appeler la méthode pour retourner un résultat
$crud = new crud();
$id = $_GET['id'];
//transmettre le résultat du controller au template en incluant le fichier
$produit = $crud->find($id);
include "../../view/admin/detail.php";
