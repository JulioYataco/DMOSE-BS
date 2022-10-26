<?php

// Iniciar las variables de SESIÓN
session_start();

require_once '../models/Subservice.php';
require_once '../models/LaboratoryArea.php';

$laboratoryarea = new LaboratoryArea();
$subservice = new Subservice();

if(isset($_GET['operacion'])){

    $operacion = $_GET['operacion'];

    //Listar
    if($operacion == 'listSubservice'){

        $tabla = $subservice->listSubservice();

        if(count($tabla) > 0){

            foreach($tabla as $registro){
                echo "
                    <tr>
                        <td>{$registro->idsubservicio}</td>
                        <td>{$registro->nomsubservicio}</td>
                        <td>{$registro->idarealaboratorio}</td>
                        <td>{$registro->idespecialidad}</td>
                        <td>{$registro->idarealaboratorio}</td>
                        <td>{$registro->idusuariocre}</td>
                        <td>{$registro->fechahoracre}</td>
                        <td>{$registro->idusuariomod}</td>
                        <td>{$registro->fechahoramod}</td>
                        <td>
                            <button data-idsubservicio='{$registro->idsubservicio}' type='button' class='btn btn-sm btn-info btnEditarSubservicio'>
                                <i class='fas fa-edit'></i>
                            </button>
                            <button data-idsubservicio='{$registro->idsubservicio}' type='button' class='btn btn-sm btn-danger btnEliminarSubservicio'>
                                <i class='fas fa-trash-alt'></i>
                            </button>
                        </td>
                    </tr>
                ";
            }
        }else{
            echo "
                <td class='col'> No se encontraron datos de subservicio </td>
            ";
        }
    }

    //listar especialidades
    if ($operacion == 'listSpecialty'){

        // Alamcenar en un objeto
        $tabla = $subservice->listSpecialty();

        if (count($tabla) > 0){
            //Contiene datos que podemos mostrar
            echo "<option value=''>Especialidad</option>";
            foreach($tabla as $registro){
                echo "<option value='{$registro->idespecialidad}'>{$registro->especialidad}</option>";
            }
        }else{
            echo "<option value=''>No se encontraron datos</option>";
        }
    }

    //listar areas
    if ($operacion == 'listLaboratoryArea'){

        // Alamcenar en un objeto
        $tabla = $laboratoryarea->listLaboratoryArea();

        if (count($tabla) > 0){
            //Contiene datos que podemos mostrar
            echo "<option value=''>Área</option>";
            foreach($tabla as $registro){
                echo "<option value='{$registro->idarealaboratorio}'>{$registro->nombrearea}</option>";
            }
        }else{
            echo "<option value=''>No se encontraron datos</option>";
        }
    }

    //Listar Metodos
    if ($operacion == 'listMethodLab'){

        // Alamcenar en un objeto
        $tabla = $laboratoryarea->listMethodLab();

        if (count($tabla) > 0){
            //Contiene datos que podemos mostrar
            echo "<option value=''>Método</option>";
            foreach($tabla as $registro){
                echo "<option value='{$registro->idarealaboratorio}'>{$registro->nombrearea}</option>";
            }
        }else{
            echo "<option value=''>No se encontraron datos</option>";
        }
    }

    //Listar Muestras
    if ($operacion == 'listSampleLab'){

        // Alamcenar en un objeto
        $tabla = $laboratoryarea->listSampleLab();

        if (count($tabla) > 0){
            //Contiene datos que podemos mostrar
            echo "<option value=''>Muestra</option>";
            foreach($tabla as $registro){
                echo "<option value='{$registro->idarealaboratorio}'>{$registro->nombrearea}</option>";
            }
        }else{
            echo "<option value=''>No se encontraron datos</option>";
        }
    }

    //listar fichas medicas
    if ($operacion == 'listMedicalRecord'){

        // Alamcenar en un objeto
        $tabla = $subservice->listMedicalRecord();

        if (count($tabla) > 0){
            //Contiene datos que podemos mostrar
            echo "<option value=''>Fichas medicas</option>";
            foreach($tabla as $registro){
                echo "<option value='{$registro->idfichamedica}'>{$registro->nomfichamedica}</option>";
            }
        }else{
            echo "<option value=''>No se encontraron datos</option>";
        }
    }

    //Registrar
    if($operacion == 'registerSubservice'){

        $datos = [
            "nomsubservicio"        => $_GET['nomsubservicio'],
            "tipo"                  => $_GET['tipo'],
            "idarealaboratorio"     => $_GET['idarealaboratorio'],
            "idespecialidad"        => $_GET['idespecialidad'],
            "idusuariocre"          => $_SESSION['idusuario'],
            "idfichamedica"         => $_GET['idfichamedica']
        ];

        $subservice->registerSubservice($datos);
    }

    //Listar por id
    if($operacion == 'listOneDataSubservice'){

        $tabla = $subservice->listOneDataSubservice(["idsubservicio" => $_GET["idsubservicio"]]);

        if(count($tabla) > 0){
            echo json_encode($tabla[0]);
        }
        
    }

    //Modificar
    if($operacion == 'modifySubservice'){

        $datos = [
            "idsubservicio"         => $_GET['idsubservicio'],
            "nomsubservicio"        => $_GET['nomsubservicio'],
            "tipo"                  => $_GET['tipo'],
            "idarealaboratorio"     => $_GET['idarealaboratorio'],
            "idespecialidad"        => $_GET['idespecialidad'],
            "idfichamedica"         => $_GET['idfichamedica'],
            "idusuariomod"          => $_SESSION['idusuario']
        ];

        $subservice->modifySubservice($datos);
    }

    //Eliminar 
    if($operacion == 'removeSubservice'){

        $data = [
            "idsubservicio" => $_GET['idsubservicio']
        ];
        
        $subservice->removeSubservice($data);
    }
};

?>