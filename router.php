<?php

require_once 'libs\smarty-3.1.39\Router.php';
require_once 'Controller/InstagramController.php';

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

$router = new Router();


$router->addRoute('home', 'GET', 'InstagramController', 'showHome');






$router->route($_GET['action'], $_SERVER['REQUEST_METHOD']);