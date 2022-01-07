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


}