<?php
require_once 'libs/smarty-3.1.39/libs/Smarty.class.php';

class UserView  {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showFormRegister() {
        $this->smarty->display('templates/formRegister.tpl');
    }
    function showLoginLocation() {
        header("Location: " . BASE_URL . "");
    }
    function showHomeLocation() {
        header("Location: " . BASE_URL . "home");
    }
}