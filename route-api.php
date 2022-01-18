<?php

require_once 'libs\smarty-3.1.39\Router.php';
require_once 'Controller/ApiCommentController.php';

$router = new Router();

$router->addRoute('comments/post/:ID', 'GET', 'ApiCommentController', 'getCommentPost');
$router->addRoute('comments/post/:ID', 'POST', 'ApiCommentController', 'insertComment');
$router->addRoute('seguir/:NOMBRE_USUARIO','POST', 'ApiCommentController', 'seguir');
$router->addRoute('dejardeseguir/:NOMBRE_USUARIO','DELETE', 'ApiCommentController', 'dejarDeSeguir');




$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);