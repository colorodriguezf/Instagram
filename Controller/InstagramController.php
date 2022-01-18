<?php
require_once "./Model/HomeModel.php";
require_once "./Model/ApiModel.php";
require_once "./View/HomeView.php";
require_once "./Helpers/AuthHelper.php";

class InstagramController {
    private $model;
    private $view;
    private $authHelper;
    
    function __construct(){
        $this->model = new HomeModel();
        $this->apiModel = new ApiModel();
        $this->view = new HomeView();
        $this->authHelper = new AuthHelper();
    }

    function showLoginORRegister() {
        $this->view->showLoginORRegister();
    }
    
    function showHome(){
        $logueado = $this->authHelper->checkLogedIn();
        $posteos= $this->model->todosLosPosteos();
        $comentarios= $this->model->comentarios();
        $fecha = date("Y-m-d H:i");
        if ($logueado) {
            $this->view->showHome($_SESSION['foto_perfil'], $_SESSION['nombre_usuario'],$_SESSION['nickname'], $posteos, $comentarios, $fecha);
        }
        else {
            $this->view->showLoginLocation();
        }
    }

    function profile($params = null) {
        $nombre_usuario = $params[':NOMBRE_USUARIO'];
        $logueado = $this->authHelper->checkLogedIn();
        $miUserId=$_SESSION['user_id'];
        $sigo="";
        if ($nombre_usuario!=null) {
            if($logueado) {
                $existe = $this->model->checkUser($nombre_usuario);
                $cantPublicaciones = $this->model->cantPublicaciones($existe->user_id);
                $posteos = $this->model->todosLosPosteosDe($existe->user_id);
                if ($existe) {
                    $misSeguidos=$this->apiModel->sigoAUsuario($_SESSION['user_id']);
                    $seguidos = count($misSeguidos);
                    $id_usuario = $existe->user_id;
                    $misSeguidores =$this->model->misSeguidores($id_usuario);
                    $seguidores = count($misSeguidores);
                    foreach($misSeguidos as  $usuario) {
                        if ($usuario->sigo==$nombre_usuario) {
                            $sigo=true;
                        }
                        else {
                            $sigo=false;
                        }
                    }
                    $this->view->viewProfile($_SESSION['foto_perfil'], $_SESSION['nombre_usuario'], $existe, 
                    $cantPublicaciones, $posteos, $misSeguidos, $seguidos,$seguidores, $misSeguidores, $sigo);
                }
                else {
                    $this->view->showHomeLocation();
                }
            }
            else {
                $this->view->showLoginLocation();
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