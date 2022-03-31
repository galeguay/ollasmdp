<?php
require_once 'dbConfig.php';

class ProductModel {


    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASS);
        $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }


    function getProducts(){
        $sentence = $this->db->prepare(
            "SELECT products.*, product_lines.name AS product_line
            FROM products
            JOIN product_lines ON products.line_id = product_lines.id");
        $sentence->execute(array());
        $products = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    function getProduct($id_producto){
        $sentence = $this->db->prepare(
            "SELECT products.*, product_lines.name AS product_line
            FROM products
            JOIN product_lines ON products.line_id = product_lines.id
            WHERE products.id = ?");
        $sentence->execute(array($id_producto));
        $product = $sentence->fetch(PDO::FETCH_OBJ);
        return $product;
    }

    function getProductsByLine($id){
        $sentence = $this->db->prepare(
            "SELECT products.*, product_lines.name AS product_line
            FROM products
            JOIN product_lines ON products.line_id = product_lines.id
            WHERE product_lines.id = ?");
        $sentence->execute(array($id));
        $products = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    function addProduct($id, $name, $lineId, $description, $detail, $image){
        $sentence = $this->db->prepare("INSERT INTO products(id, name, line_id, description, detail, image) VALUES(?,?,?,?,?,?)");
        $res = $sentence->execute(array($id, $name, $lineId, $description, $detail, $image));
        return $res;
    }

}
    /* 
        if(!))
            return $sentence->errorInfo();
        else 
            return $this->db->lastId();
    }*/

