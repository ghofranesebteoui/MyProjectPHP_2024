<?php
require_once "produit.php";
require_once "connexion.php";
class crud
{
    private $pdo;
    function __construct()
    {
        $connexion = new connexion();
        $this->pdo = $connexion->getConnexion();
    }
    function add($produit) {}
    function delete($id)
    {
        $sql = "delete from produit where id=$id";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function update() {}
    function find($id)
    {
        $sql = "select * from produit where id=$id";
        $res = $this->pdo->query($sql);
        //un seul produit sous forme de tab num
        return $res->fetch(PDO::FETCH_NUM);
    }
    function findAll()
    {
        $sql = "select * from produit";
        $res = $this->pdo->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }
}
