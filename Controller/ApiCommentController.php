<?php
require_once "./Model/ApiModel.php";
require_once "./View/ApiView.php";
require_once "./Helpers/AuthHelper.php";

class ApiCommentController {
    private $model;
    private $view;
    private $authHelper;

    function __construct() {
        $this->model = new ApiModel();
        $this->view = new ApiView();
        $this->authHelper = new AuthHelper();
    }

    function getCommentPost($params = null) {
        $id = $params[':ID'];
        $existe = $this->model->getPost($id);
        if($existe) {
            $comentarios = $this->model->getComments($id);
            return $this->view->response($comentarios, 200);
        }
        else {
            return $this->view->response("no existe el posteo con el id $id",404);
            }
        }

    function insertComment($params = null) {
        $logueado = $this->authHelper->checkLogedIn();
        if ($logueado) {
            $body = $this->getBody();
            $fecha = date("Y-m-d H:i:s");
            if (!empty($body->comentario)) {
                $ultimoId = $this->model->insertarComentario($body->id_post_fk, $body->user, $body->comment, $body->profilePhoto,
                 $body->date);
                 if($ultimoId) {
                     $this->view->response("Comentario agregado con exito en el post $body->id_post_fk, la fecha $fecha
                     y tendra el id= $ultimoId", 200);
                 }
                 else {
                     $this->view->response("El comentario en el post $body->id_post_fk no se pudo insertar", 500);
                 }
            }
        }
    }

    // Devuelve el body del request
    private function getBody() {
        //trae lo que le mandaron en el body
        $bodyString = file_get_contents("php://input");
        //te devuelve el string en tipo objeto
        return json_decode($bodyString);
    }


    function seguir($params = null) {
        $username = $params[':NOMBRE_USUARIO'];
        $logueado= $this->authHelper->checkLogedIn();
        if($logueado) {
            $user= $this->model->checkUser($username);
            if($user) {
                $misSeguidos=$this->model->sigoAUsuario($_SESSION['user_id']);
                foreach($misSeguidos as  $usuario) {
                    if ($usuario->sigo==$username) {
                        $this->view->response("Ya estas siguiendo a $username", 200);
                    }
                    else {
                        $this->model->seguir($_SESSION['user_id'], $username, $user->profilePhoto);
                        $this->view->response("Acabas de seguir a $username con exito", 200);
                    }
                }
            }
        }
    }
    function dejarDeSeguir($paramas = null) {
        $username = $paramas[':NOMBRE_USUARIO'];
        $logueado = $this->authHelper->checkLogedIn();
        if($logueado) {
            $user= $this->model->checkUser($username);
            if($user) {
                $misSeguidos=$this->model->sigoAUsuario($_SESSION['user_id']);
                foreach($misSeguidos as  $usuario) {
                    if ($usuario->sigo==$username) {
                        $this->model->dejarDeSeguir($_SESSION['user_id'], $username);
                        $this->view->response("Dejaste de seguir a $username con exito", 200);
                    }
                    else {
                        $this->view->response("Ya estas siguiendo a $username", 200);
                    }
                }
            
        }
    }
}

}