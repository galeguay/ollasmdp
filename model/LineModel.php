<?php
require_once 'dbConfig.php';

class LineModel{

    private $db;


    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASS);
    }


    function getLines(){
        $sentence = $this->db->prepare("SELECT * FROM product_lines");
        $sentence->execute();
        $lines = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $lines;
    }

    function getLine($id){
        $sentence = $this->db->prepare( "SELECT * FROM product_lines WHERE id=?");
        $sentence->execute(array($id));
        $lines = $sentence->fetch(PDO::FETCH_OBJ);
        return $lines;
    }

    function addLine($name, $color){
        $sentence = $this->db->prepare( "INSERT INTO product_lines(name, color) VALUES (?,?)");
        $sentence->execute(array($name, $color));
        return $this->db->lastInsertId();
    }
}