<?php
require_once "./Model/UserModel.php";
require_once "./View/UserView.php";

class UserController {
  private $model;
  private $view;

  function __construct()  {
    $this->model = new UserModel();
    $this->view = new UserView();
  }

  function register() {
    $this->view->showFormRegister();
  }
}