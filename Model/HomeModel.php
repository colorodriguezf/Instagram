<?php

class HomeModel {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_instagram;charset=utf8', 'root', '');
    }

    function todosLosPosteos() {
        $sentencia= $this->db->prepare('SELECT * FROM posts JOIN users ON posts.user_id = users.user_id ORDER BY post_id DESC ');
        $sentencia->execute();
        $posteos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $posteos;
    }
    function comentarios() {
        $sentencia= $this->db->prepare('SELECT * FROM comments');
        $sentencia->execute();
        $comentarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comentarios;
    }

    function checkUser($nombre_usuario) {
        $sentencia = $this->db->prepare('SELECT * FROM users WHERE username=?');
        $sentencia->execute([$nombre_usuario]);
        $user= $sentencia->fetch(PDO::FETCH_OBJ);
        return $user;
    }

    function cantPublicaciones($nombre_usuario) {
        $sentencia= $this->db->prepare('SELECT user_id FROM posts WHERE user_id=?');
        $sentencia->execute([$nombre_usuario]);
        $posts= $sentencia->fetchAll(PDO::FETCH_OBJ);
        return count($posts);
    }

    function todosLosPosteosDe($nombre_usuario) {
        $sentencia= $this->db->prepare('SELECT * FROM posts WHERE user_id=?');
        $sentencia->execute([$nombre_usuario]);
        $posts= $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $posts;
    }

    function misSeguidores($miUsuario) {
        $sentencia= $this->db->prepare("SELECT * from seguidores WHERE usuario_fk=? ");
        $sentencia->execute(array($miUsuario));
        $seguidores = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $seguidores;
    }
    //  FUNCIONES HACER POSTEO
        function createPost($user_id, $pieFoto, $foto = null, $ubicacion) {
            $pathImg = null;
            if ($foto) {
                $pathImg = $this->uploadImage($foto);
                $sentencia = $this->db->prepare("INSERT INTO posts(user_id, title, media, ubicacion) VALUES(?,?,?,?)");
                $sentencia->execute(array($user_id, $pieFoto, $pathImg, $ubicacion));
            }
        }
            private function uploadImage($foto_perfil) {
                $target = 'img/fotosPost/' . uniqid() . '.jpg';
                move_uploaded_file($foto_perfil, $target);
                return $target;
            }
}

