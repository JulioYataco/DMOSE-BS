<?php

// Iniciar las variables de SESIÓN
session_start();

require_once '../models/Service.php';

$service = new Service();

if(isset($_GET['operacion'])){

    $operacion = $_GET['operacion'];

    //Listar
    if($operacion == 'listService'){

        $tabla = $service->listService();

        if(count($tabla) > 0){

            foreach($tabla as $registro){
                echo "
                    <tr>
                        <td>{$registro->idservicio}</td>
                        <td>{$registro->servicio}</td>
                        <td>{$registro->precio}</td>
                        <td>{$registro->idusuariocre}</td>
                        <td>{$registro->fechahoracre}</td>
                        <td>{$registro->idusuariomod}</td>
                        <td>{$registro->fechahoramod}</td>
                        <td>
                            <button data-idservicio='{$registro->idservicio}' type='button' class='btn btn-sm btn-info btnEditarServicio'>
                                <i class='fas fa-edit'></i>
                            </button>
                            <button data-idservicio='{$registro->idservicio}' type='button' class='btn btn-sm btn-danger btnEliminarServicio'>
                                <i class='fas fa-trash-alt'></i>
                            </button>
                        </td>
                    </tr>
                ";
            }
        }else{
            echo "
                <td class='col'> No se encontraron datos de tipo de examen </td>
            ";
        }
    }

    //Para registrar un servicio necesitamos de un ID sede
    if ($operacion == 'listHeadquarters'){

        // Alamcenar en un objeto
        $tabla = $service->listHeadquarters();

        if (count($tabla) > 0){
            //Contiene datos que podemos mostrar
            echo "<option value=''>Sede</option>";
            foreach($tabla as $registro){
                echo "<option value='{$registro->idsede}'>{$registro->sede}</option>";
            }
        }else{
            echo "<option value=''>No se encontraron datos</option>";
        }
    }

    //Registrar
    if($operacion == 'registerService'){

        $datos = [
            "idsede"        => $_GET['idsede'],
            "servicio"      => $_GET['servicio'],
            "idusuariocre"  => $_SESSION['idusuario']
        ];

        $service->registerService($datos);
    }

    //Listar un por id
    if($operacion == 'listOneDataService'){

        $tabla = $service->listOneDataService(["idservicio" => $_GET["idservicio"]]);

        if(count($tabla) > 0){

            echo json_encode($tabla[0]);
            
        } 
    }

    //Modificar
    if($operacion == 'modifyService'){

        $datos = [
            "idservicio"    => $_GET['idservicio'],
            "servicio"      => $_GET['servicio'],
            "idusuariomod"  => $_SESSION['idusuario']
        ];

        $service->modifyService($datos);
    }

    //Eliminar 
    if($operacion == 'removeService'){

        $data = [
            "idservicio" => $_GET['idservicio']
        ];
        
        $service->removeService($data);
    }
};

?>