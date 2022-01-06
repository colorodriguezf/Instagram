<?php
require_once "./Model/HomeModel.php";
require_once "./View/HomeView.php";
require_once "./Helpers/AuthHelper.php";

class InstagramController {
    private $model;
    private $view;
    private $authHelper;
    
    function __construct(){
        $this->model = new HomeModel();
        $this->view = new HomeView();
        $this->authHelper = new AuthHelper();
    }

    function showLoginORRegister() {
        $this->view->showLoginORRegister();
    }
    
    function showHome(){
        $logueado = $this->authHelper->checkLogedIn();
        if ($logueado) {
            $this->view->showHome($_SESSION['foto_perfil']);
        }
    }
}