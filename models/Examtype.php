<?php

require_once '../core/model.master.php';

class Examtype extends ModelMaster{

    //Listar
    public function listExamType(){
        try{
            return parent::getRows("spu_tipoexamenes_listar");
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    //Registrar
    public function registerExamType(array $data){
        try{
            parent::execProcedure($data, "spu_tipoexamenes_registrar");
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    //Modificar
    public function modifyExamType(array $data){
        try{
            parent::execProcedure($data, "spu_tipoexamenes_modificar");
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    //Eliminar
    public function removeExamType(array $data){
        try{
            parent::execProcedure($data, "spu_tipoexamenes_eliminar", false);
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    //Listar un tipo de examen por ID
    public function listOneDataExamType(array $idtipoexamen){
        try{
            return parent::execProcedure($idtipoexamen, "spu_tipoexamenes_onedata_listar", true);
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }
}

?>