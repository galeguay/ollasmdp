<?php
require_once "view/ProductView.php";
require_once "model/ProductModel.php";
require_once "model/LineModel.php";
//require_once "helpers/AuthHelper.php";

class ProductController{

    private $model;
    private $view;
    private $authHelper;


    public function __construct(){
        $this->model = new ProductModel();
        $this->view = new ProductView();
        //$this->authHelper = new AuthHelper();
    }


    function showProducts($params = null){
        if(isset($_GET['line'])){
            if(!empty($_GET['line'])){
                $line = $_GET['line'];
                $products = $this->model->getProducts();
                $this->view->renderProductsList($line);
            }
        }else{
            $products = $this->model->getProducts();
            $this->view->renderProductsList($products);
        }
    }

    function showProduct($params = null){
        $id_product = $params[':ID'];
        $product = $this->model->getProduct($id_product);
        $this->view->renderProduct($product);
    }

    // AUTHHELPER
    function showFormAddProduct(){
        $lineModel = new LineModel();
        $this->view->renderFormAddProduct($lineModel->getLines());
    }
/*        
        //$this->authHelper->checkAdmin();
        $fields = ['id', 'name', 'lineId', 'description', 'detail', 'image'];
        $dbHelper = new HelperCheck();
        if(!$dbHelper->checkInputs($fields)){
            $this->model->addProductToDB($_POST['id'], $_POST['name'], $_POST['lineId'], $_POST['description'], $_POST['detail'], $_POST['image']);
            //header("Location: ".BASE_URL."products");
        }
            //DEVOLVER ERROR DE INPUT DATA
    }


    /* AUTHHELPER
    function showEditProduct($id_product, $categories){
        $this->authHelper->checkAdmin();
        $product = $this->model->getProduct($id_product);
        $this->view->renderEditProduct($product, $categories);
    }*/


    /* AUTHHELPER
    function deleteProduct($id_producto){
        $this->authHelper->checkAdmin();
        $this->model->deleteProductFromDB($id_producto);
        header("Location: ".BASE_URL."products");
    }*/

    /* AUTHHELPER
    function updateProduct($id_producto){
        $this->authHelper->checkAdmin();
        if(isset($_POST['name']) && isset($_POST['descripcion']) && isset($_POST['contenido']) && isset($_POST['id_categoria'])){
            if(!empty($_POST['name']) && !empty($_POST['descripcion']) && !empty($_POST['contenido']) && !empty($_POST['id_categoria'])){
                $this->model->updateProduct($_POST['name'], $_POST['descripcion'], $_POST['contenido'], $_POST['id_categoria'], $id_producto);
                header("Location: ".BASE_URL."products");
            }
        }
    }*/

}