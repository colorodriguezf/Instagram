<?php

class HomeModel {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_instagram;charset=utf8', 'root', '');
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

    function todosLosPosteos($nombre_usuario) {
        $sentencia= $this->db->prepare('SELECT * FROM posts WHERE user_id=?');
        $sentencia->execute([$nombre_usuario]);
        $posts= $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $posts;
    }
}