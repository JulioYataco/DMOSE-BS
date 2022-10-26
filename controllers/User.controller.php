<?php

// Iniciar las variables de SESIÓN
session_start();

// Importar al Modelo (vincular)
require_once '../models/User.php';

if (isset($_GET['operation'])) {

  // Operacioón
  $operation = $_GET['operation'];

  // Instancia del Model
  $user = new User();

  // Acceso al sistema
  if ($operation == "login") {

    // Array asociativo con la respueta
    $result = [
      "access"        => false,
      "message"       => "",
      "apellidos"     => "",
      "nombres"       => "",
      "nombreusuario" => ""
    ];
    
    $_SESSION['access'] = false;
    $_SESSION['idusuario'] = '';
    $_SESSION['usuario'] = '';
    $_SESSION['rol'] = '';

    $data = $user->login(["usuario" => $_GET["usuario"]]);

    if ($data) {
      // El nombre de usuario es correcto, Validar Clave
      $claveEncrypt = $data[0]['clave'];
      $access = password_verify($_GET['clave'], $claveEncrypt);

      
      if ($access) {        
        $_SESSION['access'] = true;
        $_SESSION['idusuario'] = $data[0]['idusuario'];
        $_SESSION['rol'] = $data[0]['tipousuario'];
        $_SESSION['usuario'] = $data[0]['usuario'];
        
        $result['access'] = true;
      } else {
        // Clave incorrecto
        $result['message'] = "La contraseña es incorrecta";
      }
    } else {
      // Usuario incorrecto
      $result['message'] = "El usuario no existe";
    }

    echo json_encode($result);
  }

  // Cerrar sesión
  if($operation == "logout"){
    session_destroy();      // Elimninar la sesión
    session_unset();        // Eliminar todas las variables de session
    header('Location:../');
  }
}
?>