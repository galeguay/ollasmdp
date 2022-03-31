<?php
require_once "model/ProductModel.php";
require_once "api/ApiController.php";
require_once "model/LineModel.php";
require_once "api/HelperCheck.php";

class ProductApiController extends ApiController{
    private $checker;


    public function __construct(){
        parent::__construct();
        $this->model = new ProductModel();
        $this->checker = new HelperCheck();
    }


    public function getProducts($params = null){
        if(isset($_GET["linea"]) && !empty($_GET["linea"])){
            $filterLine = $_GET["linea"];
            //para prevenir inyeccion sql 
            $lineModel = new LineModel();
            $lines = $lineModel->getLines();
            foreach($lines as $line)
                if($filterLine == $line->get("name")){
                    $products = $this->model->getProductsByLine($line->get("lineId"));
                    $this->view->response($products, 200);
                }else{
                    $this->view->response("No se encontro la linea de productos", 404);
                }
        }else{
            $products = $this->model->getProducts();
            $this->view->response($products, 200);
        }
    }

    public function getProduct($params = null){
        $idProduct = $params[':ID'];
        $product = $this->model->getProduct($idProduct);
        $this->view->response($product, 200);
    }

    public function deleteProduct($params = null){
        $idProduct = $params[':ID'];
        if($this->model->getProduct($idProduct)){
            $result = $this->model->deleteProduct($idProduct);
            if($result > 0){
                return $this->view->response("El producto se elimino correctamente" , 200);
            }else{
                return $this->view->response("El producto no se elimino", 404);
            }
        }else return $this->view->response("El producto que intenta eliminar no existe", 404);
    }

    public function addProduct(){
        $requiredInputs = ["idInput", "nameInput", "productLineSelect"];
        if ($this->checker->checkInputs($requiredInputs)){
            if (!$this->model->getProduct($_POST['idInput'])){ //check unique id
                $filePath = null;
                if ($this->checker->isAnImageType('imageInput')){
                    $filePath = "upImages/" . uniqid("", true) . "." . strtolower(pathinfo($_FILES['imageInput']['name'], PATHINFO_EXTENSION));
                    move_uploaded_file($_FILES['imageInput']["tmp_name"], $filePath);
                }
                    $res = $this->model->addProduct($_POST['idInput'], $_POST['nameInput'], $_POST['productLineSelect'], $_POST['descriptionInput'], $_POST['detailInput'], $filePath);
                if($res == $_POST['idInput'])
                    $this->view->response("El producto se agrego correctamente a la base de datos", 200);
                else
                    $this->view->response("ERROR, el producto no se pudo cargar en la base de datos", 500);
            }else
                $this->view->response("Ya existe un producto con el mismo id en la base de datos", 422);
        }else
            $this->view->response("Alguno de los campos requeridos es erroneo", 400);
    }

}