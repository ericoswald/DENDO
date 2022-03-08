<?php
//
//namespace App;
//use \PDO;
//class Database
//{
//    private $db_name;
//    private $db_user;
//    private $db_pass;
//    private $db_host;
//    private $pdo;
//
//    public function __construct($db_name, $db_user = 'root', $db_pass = '', $db_host = 'localhost')
//    {
//        $this->db_name = $db_name;
//        $this->db_user = $db_user;
//        $this->db_pass = $db_pass;
//        $this->db_host = $db_host;
//
//
//    }
//
//    private function getPDO(){
//        if ($this->pdo === null){
//            $pdo = new PDO('mysql:host=localhost;dbname=dendo', 'root', '');
//            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//            $this->pdo =$pdo;
//        }
//
//    return $this->pdo;
//    }
//
//    public function query($statement, $class_name){
//        $resu =$this->getPDO()->query($statement);
//        $donnee = $resu->fetchAll(PDO::FETCH_CLASS, $class_name);
//        return $donnee;
//    }
//
//    public function prepare($statement,$attributes,$class_name,$one = false){
//        $requ = $this->getPDO()->prepare($statement);
//        $requ->execute($attributes);
//        $requ->setFetchMode(PDO::FETCH_CLASS,$class_name);
//
//        if($one){
//            $data = $requ->fetch();
//
//        }else{
//            $data = $requ->fetchAll();
//
//        }
//
//        return $data;
//
//
//    }

class DB
{

    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'dendo';
    private $db;

    public function __construct($host = null, $username = null, $password = null, $database = null)
    {
        if ($host != null) {
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
        }

        try {
            $this->db = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->database, $this->username, $this->password, array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
            ));
        } catch (PDOException $e) {
            die('<h1>Impossible de se connecter a la base de donnee</h1>');
        }


    }

    public function query($sql, $data = array())
    {
        $req = $this->db->prepare($sql);
        $req->execute($data);
        return $req->fetchAll(PDO::FETCH_OBJ);
    }

}