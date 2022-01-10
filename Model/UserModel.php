<?php
class UserModel  {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_instagram;charset=utf8', 'root', '');
    }

    function createUser($nombre, $apellido, $nombre_usuario, $password, $correo, $foto_perfil = null, $nickname) {
        $pathImg = null;
        if ($foto_perfil) {
            $pathImg = $this->uploadImage($foto_perfil);
            $sentencia = $this->db->prepare("INSERT INTO users(name, surname, username, pasword, correo, profilePhoto, nickname) VALUES(?,?,?,?,?,?,))");
            $sentencia->execute(array($nombre, $apellido, $nombre_usuario, $password, $correo, $pathImg, $nickname));
        }
    }

    private function uploadImage($foto_perfil) {
        $target = 'img/fotoPerfil/' . uniqid() . '.jpg';
        move_uploaded_file($foto_perfil, $target);
        return $target;
    }

    function checkUserFromDB($username) {
        $sentencia = $this->db->prepare("SELECT * FROM users WHERE username=?");
        $sentencia->execute([$username]);
        $user = $sentencia->fetch(PDO::FETCH_OBJ);
        return $user;
    }


}
