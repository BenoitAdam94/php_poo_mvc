<?php

namespace App;

use \PDO;

class Database
{

    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;

    private $pdo;

    public function __construct($db_name, $db_user = 'root', $db_pass = '', $db_host = 'localhost')
    {

        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }

    public function getPDO()
    { // Se connecter à la DB

        if ($this->pdo == null) { // Accesseur pour 1 seule fois la connection à la BDD

            $pdo = new \PDO('mysql:dbname=courspoo;host=localhost', 'root', '');
            $this->pdo = $pdo;
            return $pdo;
        }
        return $this->pdo;
    }

    public function query($statement, $class_name)
    { // Faire la requête

        $req = $this->getPDO()->query($statement);

        $datas = $req->fetchAll(PDO::FETCH_CLASS, $class_name);

        return $datas;
    }
/*
    public function prepare($statement, $attributes, $class_name){
        $req = $this->getPDO()->prepare($statement);
        $req->execute($attributes);
        $datas = $req->fetchAll(PDO::FETCH_CLASS, $class_name);
        return $datas;
    }*/
}
