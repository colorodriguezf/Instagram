<?php
class ApiModel  {
    private $db;
    
    function __construct() {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_instagram;charset=utf8', 'root', '');
    }
function getPost($id) {
    $sentencia = $this->db->prepare("SELECT * FROM posts WHERE post_id=?");
    $sentencia->execute(array($id));
    $post = $sentencia->fetch(PDO::FETCH_OBJ);
    return $post;
}

function getComments($id) {
    $sentencia = $this->db->prepare("SELECT * FROM comments WHERE id_post_fk=?");
    $sentencia->execute(array($id));
    $comments = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $comments;
}

function insertarComentario($id_post_fk, $user, $comment, $profilePhoto, $date) {
    $sentencia = $this->db->prepare("INSERT INTO comments(id_post_fk, user, comment, profilePhoto, date) VALUES(?,?,?,?,?)");
    $sentencia->execute(array($id_post_fk, $user, $comment, $profilePhoto ,$date));
    return $this->db->lastInsertId();
}


function checkUser($nombre_usuario) {
    $sentencia = $this->db->prepare('SELECT * FROM users WHERE username=?');
    $sentencia->execute([$nombre_usuario]);
    $user= $sentencia->fetch(PDO::FETCH_OBJ);
    return $user;
}
function sigoAUsuario($id){
$sentencia = $this->db->prepare("SELECT * FROM seguidos WHERE usuario_fk=?");
$sentencia->execute([$id]);
$usuario = $sentencia->fetchAll(PDO::FETCH_OBJ);
return $usuario;
}
function seguir($miUsuario, $sigoA, $fotoPerfil) {
    $sentencia=$this->db->prepare("INSERT INTO seguidos(usaurio_fk, sigo, fotoPerfil) VALUES(?, ?, ))");
    $sentencia->execute(array($miUsuario, $sigoA, $fotoPerfil));
}
function dejarDeSeguir($miUsuario, $dejoDeSeguirA) {
    $sentencia=$this->db->prepare("DELETE FROM seguidos(usaurio_fk, sigo) VALUES(?, ?)");
    $sentencia->execute(array($miUsuario, $dejoDeSeguirA));
}



}
