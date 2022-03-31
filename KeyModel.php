<?php

class KeyModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname='.DB_NAME.';charset=utf8','id17990435_admin','$T62105062tt62105062t$');
    }

    function addKey($pass){
        $sentence = $this->db->prepare("INSERT INTO ".TABLE_KEYS_NAME."(".TABLE_KEYS_FIELD_PASS.") VALUES(?)");
        $sentence->execute(array($pass));
        return $this->db->lastInsertId();
    }

    function getAllKeys(){
        $sentence = $this->db->prepare("SELECT * FROM ".TABLE_KEYS_NAME);
        $sentence->execute();
        $pass = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $pass;
    }

    function getKey($id){
        $sentence = $this->db->prepare("SELECT * FROM ".TABLE_KEYS_NAME." WHERE ".TABLE_KEYS_FIELD_ID." = ?");
        $sentence->execute(array($id));
        $pass = $sentence->fetch(PDO::FETCH_OBJ);
        return $pass;
    }

    function getKeyByPass($encryptedPass){
        $sentence = $this->db->prepare("SELECT * FROM ".TABLE_KEYS_NAME." WHERE ".TABLE_KEYS_FIELD_PASS." = ?");
        $sentence->execute(array($encryptedPass));
        $pass = $sentence->fetch(PDO::FETCH_OBJ);
        return $pass;
    }
}