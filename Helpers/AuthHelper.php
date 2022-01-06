<?php

class AuthHelper{

    function __construct(){
    }

    function checkLogedIn(){
        session_start();
        if(isset($_SESSION['nombre_usuario'])){
            return true;
        }
        else{
            return false;
        }   
        
        }
    }
