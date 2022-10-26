<?php

// Iniciar las variables de SESIÓN
session_start();

require_once '../models/Specialty.php';

$specialty = new Specialty();

if(isset($_GET['operacion'])){

    $operacion = $_GET['operacion'];

    //Listar
    if($operacion == 'listSpecialty'){

        $tabla = $specialty->listSpecialty();

        if(count($tabla) > 0){

            foreach($tabla as $registro){
                echo "
                    <tr>
                        <td>{$registro->idespecialidad}</td>
                        <td>{$registro->especialidad}</td>
                        <td>{$registro->idusuariocre}</td>
                        <td>{$registro->fechahoracre}</td>
                        <td>{$registro->idusuariomod}</td>
                        <td>{$registro->fechahoramod}</td>
                        <td>
                            <button data-idespecialidad='{$registro->idespecialidad}' type='button' class='btn btn-sm btn-info btnEditarEspecialidad'>
                                <i class='fas fa-edit'></i>
                            </button>
                            <button data-idespecialidad='{$registro->idespecialidad}' type='button' class='btn btn-sm btn-danger btnEliminarEspecialidad'>
                                <i class='fas fa-trash-alt'></i>
                            </button>
                        </td>
                    </tr>
                ";
            }
        }else{
            echo "
                <td class='col'> No se encontraron datos de especialidades </td>
            ";
        }
    }

    //Registrar
    if($operacion == 'registerSpecialty'){

        $datos = [
            "especialidad"  => $_GET['especialidad'],
            "idusuariocre"  => $_SESSION['idusuario']
        ];

        $specialty->registerSpecialty($datos);
    }

    //Listar un por id
    if($operacion == 'listOneDataSpecialty'){

        $tabla = $specialty->listOneDataSpecialty(["idespecialidad" => $_GET["idespecialidad"]]);

        if(count($tabla) > 0){
            echo json_encode($tabla[0]);
        } 
    }

    //Modificar
    if($operacion == 'modifySpecialty'){

        $datos = [
            "idespecialidad"    => $_GET['idespecialidad'],
            "especialidad"      => $_GET['especialidad'],
            "idusuariomod"      => $_SESSION['idusuario']
        ];

        $specialty->modifySpecialty($datos);
    }

    //Eliminar 
    if($operacion == 'removeSpecialty'){

        $data = [
            "idespecialidad" => $_GET['idespecialidad']
        ];
        
        $specialty->removeSpecialty($data);
    }
};

?>