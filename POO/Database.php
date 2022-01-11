<?php


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

    private function getPDO(){
        if ($this->pdo === null){
            $pdo = new PDO('mysql:host=localhost;dbname=dendo', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo =$pdo;
        }

    return $this->pdo;
    }

    public function query($requ){
        $resu =$this->getPDO()->query($requ);
        $donnee = $resu->fetchAll(PDO::FETCH_OBJ);
        return $donnee;
    }




    /**
     * @param mixed $pdo
     * @return Database
     */
    public function setPdo($pdo)
    {
        $this->pdo = $pdo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDbName()
    {
        return $this->db_name;
    }

    /**
     * @param mixed $db_name
     * @return Database
     */
    public function setDbName($db_name)
    {
        $this->db_name = $db_name;
        return $this;
    }

    /**
     * @return mixed|string
     */
    public function getDbUser()
    {
        return $this->db_user;
    }

    /**
     * @param mixed|string $db_user
     * @return Database
     */
    public function setDbUser($db_user)
    {
        $this->db_user = $db_user;
        return $this;
    }

    /**
     * @return mixed|string
     */
    public function getDbPass()
    {
        return $this->db_pass;
    }

    /**
     * @param mixed|string $db_pass
     * @return Database
     */
    public function setDbPass($db_pass)
    {
        $this->db_pass = $db_pass;
        return $this;
    }

    /**
     * @return mixed|string
     */
    public function getDbHost()
    {
        return $this->db_host;
    }

    /**
     * @param mixed|string $db_host
     * @return Database
     */
    public function setDbHost($db_host)
    {
        $this->db_host = $db_host;
        return $this;
    }
}