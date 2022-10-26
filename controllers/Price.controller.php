<?php

// Iniciar las variables de SESIÓN
session_start();

require_once '../models/Price.php';
require_once '../models/Service.php';

$price = new Price();
$service = new Service();

if(isset($_GET['operacion'])){

    $operacion = $_GET['operacion'];

    if($operacion == 'registerPrice'){

        $idservicio = $service->registerService([
            "idsede"        => $_GET['idsede'],
            "servicio"      => $_GET['servicio'],
            "idusuariocre"  => $_SESSION['idusuario']
        ]);

        $datos = [
            "idservicio"    => $idservicio[0]['idservicio'],
            "precio"        => $_GET['precio'],
            "idusuariocre"  => $_SESSION['idusuario']
        ];

        $price->registerPrice($datos);
    }

}

?>