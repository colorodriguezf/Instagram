<?php
require_once "./Model/HomeModel.php";
require_once "./View/HomeView.php";

class InstagramController {
    private $model;
    private $view;
    
    function __construct(){
        $this->model = new HomeModel();
        $this->view = new HomeView();
    }
    
    function showHome(){
        $this->view->showHome();
    }
}