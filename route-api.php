<?php

require_once 'libs\smarty-3.1.39\Router.php';
require_once 'Controller/ApiCommentController.php';

$router = new Router();

$router->addRoute('comments/post/:ID', 'GET', 'ApiCommentController', 'getCommentPost');




$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);