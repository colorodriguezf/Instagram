<?php

class HomeModel {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_instagram;charset=utf8', 'root', '');
    }


}