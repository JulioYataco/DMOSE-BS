<?php

// Iniciar las variables de SESIÓN
session_start();

require_once '../models/LaboratoryArea.php';

$laboratoryarea = new LaboratoryArea();

if(isset($_GET['operacion'])){

    $operacion = $_GET['operacion'];

    //Listar Areas
    if($operacion == 'listLaboratoryArea'){

        $tabla = $laboratoryarea->listLaboratoryArea();

        if(count($tabla) > 0){

            foreach($tabla as $registro){
                echo "
                    <tr>
                        <td>{$registro->idarealaboratorio}</td>
                        <td>{$registro->nombrearea}</td>
                        <td>{$registro->usuariocre}</td>
                        <td>{$registro->fechahoracre}</td>
                        <td>{$registro->idusuariomod}</td>
                        <td>{$registro->fechahoramod}</td>
                        <td>
                            <button data-idarealaboratorio='{$registro->idarealaboratorio}' type='button' class='btn btn-sm btn-info btnEditarAreaLaboratorio'>
                                <i class='fas fa-edit'></i>
                            </button>
                            <button data-idarealaboratorio='{$registro->idarealaboratorio}' type='button' class='btn btn-sm btn-danger btnEliminarAreaLaboratorio'>
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

    //Listar Metodos
    if($operacion == 'listMethodLab'){

        $tabla = $laboratoryarea->listMethodLab();

        if(count($tabla) > 0){

            foreach($tabla as $registro){
                echo "
                    <tr>
                        <td>{$registro->idarealaboratorio}</td>
                        <td>{$registro->nombrearea}</td>
                        <td>{$registro->usuariocre}</td>
                        <td>{$registro->fechahoracre}</td>
                        <td>{$registro->idusuariomod}</td>
                        <td>{$registro->fechahoramod}</td>
                        <td>
                            <button data-idmetodolaboratorio='{$registro->idarealaboratorio}' type='button' class='btn btn-sm btn-info btnEditarMetodoLaboratorio'>
                                <i class='fas fa-edit'></i>
                            </button>
                            <button data-idmetodolaboratorio='{$registro->idarealaboratorio}' type='button' class='btn btn-sm btn-danger btnEliminarMetodoLaboratorio'>
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

    //Listar muestras
    if($operacion == 'listSampleLab'){

        $tabla = $laboratoryarea->listSampleLab();

        if(count($tabla) > 0){

            foreach($tabla as $registro){
                echo "
                    <tr>
                        <td>{$registro->idarealaboratorio}</td>
                        <td>{$registro->nombrearea}</td>
                        <td>{$registro->usuariocre}</td>
                        <td>{$registro->fechahoracre}</td>
                        <td>{$registro->idusuariomod}</td>
                        <td>{$registro->fechahoramod}</td>
                        <td>
                            <button data-idmuestralaboratorio='{$registro->idarealaboratorio}' type='button' class='btn btn-sm btn-info btnEditarMuestraLaboratorio'>
                                <i class='fas fa-edit'></i>
                            </button>
                            <button data-idmuestralaboratorio='{$registro->idarealaboratorio}' type='button' class='btn btn-sm btn-danger btnEliminarMuestraLaboratorio'>
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

    //Registrar
    if($operacion == 'registerLaboratoryArea'){

        $datos = [
            "tipo"          => $_GET['tipo'],
            "nombrearea"    => $_GET['nombrearea'],
            "idusuariocre"  => $_SESSION['idusuario']
        ];

        $laboratoryarea->registerLaboratoryArea($datos);
    }

    //Listar por ID
    if($operacion == 'listOneDataLaboratoryArea'){

        $tabla = $laboratoryarea->listOneDataLaboratoryArea(["idarealaboratorio" => $_GET["idarealaboratorio"]]);

        if(count($tabla) > 0){

            echo json_encode($tabla[0]);
            
        }
        
    }

    //Modificar
    if($operacion == 'modifyLaboratoryArea'){

        $datos = [
            "idarealaboratorio" => $_GET['idarealaboratorio'],
            "nombrearea"        => $_GET['nombrearea'],
            "idusuariomod"      => $_SESSION['idusuario']
        ];

        $laboratoryarea->modifyLaboratoryArea($datos);
    }

    //Eliminar 
    if($operacion == 'removeLaboratoryArea'){

        $data = [
            "idarealaboratorio" => $_GET['idarealaboratorio']
        ];
        
        $laboratoryarea->removeLaboratoryArea($data);
    }
};

?>