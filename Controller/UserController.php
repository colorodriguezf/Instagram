<?php
require_once "./Model/UserModel.php";
require_once "./View/UserView.php";
require_once "./View/HomeView.php";

class UserController {
  private $model;
  private $view;
  private $homeView;

  function __construct()  {
    $this->model = new UserModel();
    $this->view = new UserView();
    $this->homeView = new HomeView();
  }

  function register() {
    $this->view->showFormRegister();
  }
  
  function userRegister(){
    if (!empty($_POST['correo']) && !empty($_POST['nombre_usuario']) && !empty($_POST['nombre']) && 
    !empty($_POST['apellido']) && !empty($_POST['password']) && !empty($_FILES['input_name']['type'])) {
                if ($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" || 
                $_FILES['input_name']['type'] == "image/png") {
                    $nombre = $_POST['nombre'];
                    $apellido = $_POST['apellido'];
                    $nombre_usuario = $_POST['nombre_usuario'];
                    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                    $correo = $_POST['correo'];
                    $foto_perfil = $_FILES['input_name']['tmp_name'];
              }
              $this->model->createUser($nombre, $apellido, $nombre_usuario, $password, $correo, $foto_perfil);
    }
    $this->view->showLoginLocation();
  }

  function verifyLogin()  {
    if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
      $usuario = $_POST['usuario'];
      $password = $_POST['password'];
      $user = $this->model->checkUserFromDB($usuario);

      if ($user && password_verify($password, $user->pasword)) {
        session_start();
        $_SESSION['logueado']=true;
        $_SESSION['correo']= $user->correo;
        $_SESSION['nombre_usuario']=$user->username;
        $_SESSION['foto_perfil']=$user->profilePhoto;
      }
      if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == true) {
        $this->view->showHomeLocation();
      }
      else {
        $this->homeView->showLoginORRegister("usuario o contraseña incorrectos");
      }
    } 
    else {
      $this->homeView->showLoginORRegister("complete todos los campos");
    }
  }
  
}