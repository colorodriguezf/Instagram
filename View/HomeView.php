<?php
require_once 'libs/smarty-3.1.39/libs/Smarty.class.php';

class HomeView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }
    function showLoginORRegister($error = "") {
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/showLoginORRegister.tpl');
    }

    function showHome() {
        $this->smarty->display('templates/home.tpl');
    }
    
}