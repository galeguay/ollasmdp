<?php
require_once 'libs/smarty/Smarty.class.php';

class PageView{
    private $smarty;
    private $model;


    function __construct(){
        $this->smarty = new Smarty();
    }


    private function secureRendering($template){
        if ($this->smarty->templateExists($template))
            $this->smarty->display($template);
        else
            $this->renderHome();
        //make error tpl
    }

    function renderHome(){
        $this->smarty->display('home.tpl');
    }

    function renderNews(){
        $this->secureRendering('news.tpl');
    }

    function renderShop($products){
        $this->smarty->assign('products', $products);
        $this->secureRendering('shop.tpl');
    }

    function renderContact(){
        $this->secureRendering('contact.tpl');
    }

    function renderAddProduct(){
        $this->secureRendering('formProduct.tpl');
    }

    function renderAddLinet(){
        $this->secureRendering('formLine.tpl');
    }

}