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
        $posteos= $this->model->todosLosPosteos();
        $fecha = date("Y-m-d H:i");
        if ($logueado) {
            $this->view->showHome($_SESSION['foto_perfil'], $_SESSION['nombre_usuario'], $posteos);
        }
        else {
            $this->view->showLoginLocation();
        }
    }

    function profile($params = null) {
        $nombre_usuario = $params[':NOMBRE_USUARIO'];
        $logueado = $this->authHelper->checkLogedIn();
        if($logueado) {
            $existe = $this->model->checkUser($nombre_usuario);
            $cantPublicaciones = $this->model->cantPublicaciones($existe->user_id);
            $posteos = $this->model->todosLosPosteosDe($existe->user_id);
            if ($existe) {
                $this->view->viewProfile($_SESSION['foto_perfil'], $_SESSION['nombre_usuario'], $existe, $cantPublicaciones, $posteos);
            }
            else {
                $this->view->showHomeLocation();
            }
        }
        else {
            $this->view->showLoginLocation();
        }
    }

    function createPost($params = null) {
        $logueado = $this->authHelper->checkLogedIn();
        if($logueado) {
            $this->view->formCreatePost();
        }
        else {
            $this->view->showLoginORRegister();
        }
    }
}