<?php
require_once 'model/ProductModel.php';
require_once 'view/PageView.php';

class PageController{

    private $view;


    function __construct(){
        $this->view = new PageView();
    }


    function showHome(){
        $this->view->renderHome();
    }

    function showNews(){
        $this->view->renderNews();
    }

    function showShop(){
        $productModel = new ProductModel();
        $this->view->renderShop($productModel->getProducts());
    }

    function showContact(){
        $this->view->renderContact();
    }


}