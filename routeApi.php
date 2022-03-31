<?php
require_once('Router.php');
require_once('api/ApiController.php');
require_once('api/ProductApiController.php');
require_once('api/LineApiController.php');

// CONSTANTES DEL RUTEO
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

$router = new Router();

//RUTAS
$router->addRoute("products",  "GET",     "ProductApiController",  "getProducts");
$router->addRoute("products/:ID",  "GET",     "ProductApiController",  "getProduct");
$router->addRoute("products/:ID",  "DELETE",  "ProductApiController",  "deleteProduct");
$router->addRoute("products",      "POST",    "ProductApiController",  "addProduct");
$router->addRoute("images",      "POST",    "ProductApiController",  "addProduct");
$router->addRoute("lines",  "GET",     "LineApiController",  "getLines");
$router->addRoute("lines/:ID",  "GET",     "LineApiController",  "getLines");
$router->addRoute("lines/:ID",  "DELETE",  "LineApiController",  "deleteLine");
$router->addRoute("lines",      "POST",    "LineApiController",  "addLine");
//$router->addRoute("/pass",      "GET",    "PassApiController",  "getPassword");
//$router->addRoute("/pass/:ID",      "GET",    "PassApiController",  "getPassId");

//RUN
$router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);
