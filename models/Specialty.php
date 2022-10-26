<?php

require_once '../core/model.master.php';

class Specialty extends ModelMaster{

    //Listar
    public function listSpecialty(){
        try{
            return parent::getRows("spu_especialidades_listar");
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    //Registrar
    public function registerSpecialty(array $data){
        try{
            parent::execProcedure($data, "spu_especialidades_registrar");
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    //Modificar
    public function modifySpecialty(array $data){
        try{
            parent::execProcedure($data, "spu_especialidades_modificar");
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    //Eliminar
    public function removeSpecialty(array $data){
        try{
            parent::execProcedure($data, "spu_especialidades_eliminar", false);
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    //Listar un tipo de examen por ID
    public function listOneDataSpecialty(array $idservicio){
        try{
            return parent::execProcedure($idservicio, "spu_especialidades_onedata_listar", true);
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }
}

?>