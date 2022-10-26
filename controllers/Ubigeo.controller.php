<?php 

// Incorporar al modelo
require_once '../models/Ubigeo.php';

if(isset($_GET['operation'])){

    $operation = $_GET['operation'];
    $ubigeo = new Ubigeo();

    if($operation == 'getUbigeo'){
        echo json_encode($ubigeo->getUbigeo(["search" => $_GET['search']]));
    }
}

?>