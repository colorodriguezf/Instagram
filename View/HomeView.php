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

    function showHome($foto_perfil="", $nombre_usuario="",$nickname="", $posteos, $comentarios, $fecha) {
        $this->smarty->assign('foto_perfil', $foto_perfil);
        $this->smarty->assign('nombre_usuario', $nombre_usuario);
        $this->smarty->assign('nickname', $nickname);
        $this->smarty->assign('posteos', $posteos);
        $this->smarty->assign('comentarios', $comentarios);
        $this->smarty->assign('fecha', $fecha);
        $this->smarty->display('templates/home.tpl');
    }

    function viewProfile($foto_perfil="", $nombre_usuario="", $usuario, $cantPublicaciones, $posteos, $misSeguidos,$seguidos,$seguidores,$misSeguidores, $sigo) {
        $this->smarty->assign('foto_perfil', $foto_perfil);
        $this->smarty->assign('nombre_usuario', $nombre_usuario);
        $this->smarty->assign('usuario', $usuario);
        $this->smarty->assign('publicaciones', $cantPublicaciones);
        $this->smarty->assign('posteos', $posteos);
        $this->smarty->assign('misSeguidos', $misSeguidos);
        $this->smarty->assign('seguidos', $seguidos);
        $this->smarty->assign('seguidores', $seguidores);
        $this->smarty->assign('misSeguidores', $misSeguidores);
        $this->smarty->assign('sigo', $sigo);
        $this->smarty->display('templates/profile.tpl');
    }

    function formCreatePost() {
        $this->smarty->display('templates/formCreatePost.tpl');
    }

    function showHomeLocation() {
        header("Location: " . BASE_URL . "home");
    }
    function showLoginLocation() {
        header("Location: " . BASE_URL . "login");
    }
    
}