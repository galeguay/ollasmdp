<?php
require_once "api/ApiController.php";
require_once "model/LineModel.php";

class LineApiController extends ApiController{


    public function __construct(){
        parent::__construct();
        $this->model = new LineModel();
    }


    public function getLines(){
        $lines = $this->model->getLines();
        $this->view->response($lines, 200);
    }

    public function getLine($params = null){
        $idLine = $params[':ID'];
        $line = $this->model->getProduct($idLine);
        $this->view->response($line, 200);
    }

    public function deleteLine($params = null){
        $idLine = $params[':ID'];
        if($this->model->getLine($idLine)){
            $result = $this->model->deleteLine($idLine);
            if($result > 0){
                return $this->view->response("La linea de productos se eliminó correctamente" , 200);
            }else{
                return $this->view->response("La linea de productos no se eliminó", 404);
            }
        }else return $this->view->response("La linea de productos que intenta eliminar no existe", 404);
    }

    public function addLine($params = null){
        $data = $this->getData();
        $id = $this->model->addLine($data->name, $data->color);
        if ($id != 0)
            $this->view->response("La linea de productos se agregó correctamente", 200);
        else
            $this->view->response("La linea de productos no se agregó", 500);
    }
}