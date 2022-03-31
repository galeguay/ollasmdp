<?php
require_once "view/LineView.php";
require_once "model/LineModel.php";
//require_once "helpers/AuthHelper.php";

class LineController{

    private $model;
    private $view;
    private $authHelper;


    public function __construct(){
        $this->model = new LineModel();
        $this->view = new LineView();
        //$this->authHelper = new AuthHelper();
    }

    // AUTHHELPER
    function showFormAddLine(){
        $this->view->renderFormAddLine();
    }

}