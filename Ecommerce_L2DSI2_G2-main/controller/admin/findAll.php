<?php
//commencer à remplir une variable tompon
ob_start();

//créer un objet de la classe Connexion pour
//appeler la méthode getConnexion() qui va nous
//retourner l'objet responsable de la gestion de la bd
//qui est pdo
/*$connexion = new Connexion();
$pdo = $connexion->getConnexion();
//formuler ma requete
$sql = "select * from produit";
//reçevoir mon résultat($res est un PDOstatement car on a query et on a uilisé select)
//$res est un tab numérique
$res = $pdo->query($sql);*/
//convertir en un tab numérique et j'ai plusieurs lignes à retourner
//$lesProduits = $res->fetchAll(PDO::FETCH_NUM);
//echo "<pre>";
//elle retourne un tab dans un tab numériques
//chaque case correspond à un tab numérique de produit
/*var_dump($lesProduits);
    echo "</pre>";*/
//si je remplace FETCH_NUM par FETCH_ASSOC j'aurai un tab associatif dans un tab numérique
//si je remplace FETCH_ASSOC par FETCH_OBJ j'aurai des objets de produit dans un tab numérique
//si on ne met pas des param dans fetchAll() on aura FETCH_BOTH qui affiche le produit en tab numérique et en tab associatif
//on ne peut pas afficher avec echo un tab ou un objet

//remplacer tout le code précédant par ça
require_once "../../model/crud.php";
//construire l'objet pour appeler la méthode pour retourner un résultat
$crud = new crud();
//transmettre le résultat du controller au template en incluant le fichier
$lesProduits = $crud->findAll();
include "../../view/admin/findAll.php";
