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



}
