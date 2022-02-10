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
            $this->view->showHome($_SESSION['foto_perfil'], $_SESSION['nombre_usuario'],$_SESSION['nickname'], $_SESSION['user_id'], $posteos, $comentarios, $fecha);
        }
        else {
            $this->view->showLoginLocation();
        }
    }

    function publicPost($params=null) {
        $logueado = $this->authHelper->checkLogedIn();
        if ($logueado) {
            $a = 3;
            if(!empty($_POST['user_id']) && !empty($_POST['foto'])) {
                    $user_id = $_POST['user_id'];
                    $pieFoto = $_POST['pieFoto'];
                    $ubicacion = $_POST['ubicacion'];
                    $foto = $_POST['foto'];
                }
            $this->model->createPost($user_id, $pieFoto,  $foto, $ubicacion);
            $this->view->showHomeLocation();
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
                if ($existe) {
                    $cantPublicaciones = $this->model->cantPublicaciones($existe->user_id);
                    $posteos = $this->model->todosLosPosteosDe($existe->user_id);
                    $misSeguidos=$this->apiModel->sigoAUsuario($existe->user_id);
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

   
}