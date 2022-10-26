<?php
// Heredar la sesión
session_start();

// Sesión aperturada, esta en false
if (!isset($_SESSION['access'])){
    header('Location:index.php');
} else {

    // ROL ADMINISTRADOR
    if($_SESSION['rol'] != "AD"){
        echo "<h4 class='text-danger text-bold'>Usted. No Cuenta con el Nivel de Acceso requerido</h4>";
        exit();
    }
}
?>