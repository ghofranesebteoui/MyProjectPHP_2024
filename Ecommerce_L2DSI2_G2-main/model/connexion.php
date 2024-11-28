<?php
class Connexion
{

    private $pdo;
    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=e_commerce";
        $user = "root";
        $pw = "";
        $this->pdo = new PDO($dsn, $user, $pw);
    }
    public function getConnexion()
    {
        return $this->pdo;
    }
}
