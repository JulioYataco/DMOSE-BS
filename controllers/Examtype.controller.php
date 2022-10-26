<?php

// Iniciar las variables de SESIÓN
session_start();

require_once '../models/Examtype.php';

$examtype = new Examtype();

if(isset($_GET['operacion'])){

    $operacion = $_GET['operacion'];

    //Listar
    if($operacion == 'listExamType'){

        $tabla = $examtype->listExamType();

        if(count($tabla) > 0){

            foreach($tabla as $registro){
                echo "
                    <tr>
                        <td>{$registro->idtipoexamen}</td>
                        <td>{$registro->nomtipoexamen}</td>
                        <td>{$registro->idusuariocre}</td>
                        <td>{$registro->fechahoracre}</td>
                        <td>{$registro->idusuariomod}</td>
                        <td>{$registro->fechahoramod}</td>
                        <td>
                            <button data-idtipoexamen='{$registro->idtipoexamen}' type='button' class='btn btn-sm btn-info btnEditarTipoExamen'>
                                <i class='fas fa-edit'></i>
                            </button>
                            <button data-idtipoexamen='{$registro->idtipoexamen}' type='button' class='btn btn-sm btn-danger btnEliminarTipoExamen'>
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
    if($operacion == 'registerExamType'){

        $datos = [
            "nomtipoexamen" => $_GET['nomtipoexamen'],
            "idusuariocre" => $_SESSION['idusuario']
        ];

        $examtype->registerExamType($datos);
    }

    //Listar por ID
    if($operacion == 'listOneDataExamType'){

        $tabla = $examtype->listOneDataExamType(["idtipoexamen" => $_GET["idtipoexamen"]]);

        if(count($tabla) > 0){

            echo json_encode($tabla[0]);
            
        } 
    }

    //Modificar
    if($operacion == 'modifyExamType'){

        $datos = [
            "idtipoexamen" => $_GET['idtipoexamen'],
            "nomtipoexamen" => $_GET['nomtipoexamen'],
            "idusuariomod" => $_GET['idusuario']
        ];

        $examtype->modifyExamType($datos);
    }

    //Eliminar 
    if($operacion == 'removeExamType'){

        $data = [
            "idtipoexamen" => $_GET['idtipoexamen']
        ];
        
        $examtype->removeExamType($data);
    }
};

?>