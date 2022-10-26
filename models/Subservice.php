<?php

require_once '../core/model.master.php';

class Subservice extends ModelMaster{

    //Listar
    public function listSubservice(){
        try{
            return parent::getRows("spu_subservicio_listar");
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    //Listar especialidades para registrar
    public function listSpecialty(){
        try{
            return parent::getRows("spu_especialidades_listar");
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    //Listar fichas medicas
    public function listMedicalRecord(){
        try{
            return parent::getRows("spu_fichasmedicas_listar");
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    //Registrar
    public function registerSubservice(array $data){
        try{
            parent::execProcedure($data, "spu_subservicio_registrar");
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    //Listar por ID
    public function listOneDataSubservice(array $idtipoexamen){
        try{
            return parent::execProcedure($idtipoexamen, "spu_subservicios_onedata_listar", true);
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    //Modificar
    public function modifySubservice(array $data){
        try{
            parent::execProcedure($data, "spu_subservicio_modificar");
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    
}

?>