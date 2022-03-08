<?php
class aproduit{

    private $DB;

    public function __construct($DB){
        if(!isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION['aproduit'])){
            $_SESSION['aproduit'] = array();
        }
        $this->DB = $DB;
    }

    public function add($product_id){
        if(isset($_SESSION['aproduit'][$product_id])){
            $_SESSION['aproduit'][$product_id];
            unset($_SESSION['aproduit'][$product_id]);

        }else{
            $_SESSION['aproduit'][$product_id] = 1;
        }
    }

}