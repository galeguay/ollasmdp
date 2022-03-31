<?php
require_once('Router.php');
require_once "controller/PageController.php";
require_once "controller/ProductController.php";
require_once "controller/LineController.php";


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
$r = new Router();


//RUTA POR DEFECTO
$r->setDefaultRoute("PageController", "showHome");

//RUTAS
$r->addRoute("home",  "GET",     "PageController", "showHome");
$r->addRoute("news",  "GET",     "PageController", "showNews");
$r->addRoute("shop",  "GET",     "PageController", "showShop");
$r->addRoute("contact",  "GET",  "PageController", "showContact");
$r->addRoute("addProduct",  "GET",    "ProductController", "showFormAddProduct");
$r->addRoute("addLine",  "GET",    "LineController", "showFormAddLine");

//RUN
$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);