<?php

require_once 'libs\smarty-3.1.39\Router.php';
require_once 'Controller/InstagramController.php';
require_once 'Controller/UserController.php';

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

$router = new Router();

$router->setDefaultRoute("InstagramController","showLoginORRegister");
$router->addRoute('registrate', 'GET', 'UserController', 'register');
$router->addRoute('login', 'POST', 'UserController', 'UserRegister');
$router->addRoute('verify', 'POST', 'UserController', 'verifyLogin');
$router->addRoute('home', 'GET', 'InstagramController', 'showHome');






$router->route($_GET['action'], $_SERVER['REQUEST_METHOD']);