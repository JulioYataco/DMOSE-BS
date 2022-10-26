<?php 
session_start();

// Incorporar al modelo 
require_once '../models/Business.php';

if(isset($_GET['operation'])){

    $operation = $_GET['operation'];
    $business = new Business();

    // Listar datos con paginación
    if($operation == "listBusinessPagination"){
        $data = $business->listBusinessPagination(["offset" => $_GET['offset'], "limit" => $_GET['limit']]);
        
        if(count($data) > 0){
            echo json_encode($data);
        }
    }

    // Registrar una nueva empresa
    if($operation == "registerBusinessPagination"){
        $data = $business->registerBusinessPagination([
            "empresa"       => $_GET['empresa'],
            "ruc"           => $_GET['ruc'],
            "razonsocial"   => $_GET['razonsocial'],
            "direccion"     => $_GET['direccion'],
            "correo"        => $_GET['correo'],
            "ubigeo"        => $_GET['ubigeo'],
            "diascredito"   => $_GET['diascredito'],
            "idusuariocre"  => $_SESSION['idusuario']
        ]);        

        if($data){
            echo json_encode($data);
        }
    }
}

?>