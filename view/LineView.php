<?php
class LineView{

    private $smarty;

    function __construct(){
        $this->smarty =  new Smarty();
    }

    function renderFormAddLine(){
        $this->smarty->display('formLine.tpl');
    }
}
