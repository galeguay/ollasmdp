<?php
    require_once 'libs/smarty/Smarty.class.php';

class ProductView{
        private $smarty;
    
    
        function __construct(){
            $this->smarty = new Smarty();
        }
    
    
    
    function renderFormAddProduct($lines){
        $this->smarty->assign('lines', $lines);
        $this->smarty->display('formProduct.tpl');
    }

    function renderProductsList($products){
        $this->smarty->assign('products', $products);
        $this->smarty->display('products_list.tpl');
    }

    FUNCTION renderProduct($product){
        $this->smarty->assign('product', $product);
        $this->smarty->display('product.tpl');
    }

}