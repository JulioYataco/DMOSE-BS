<?php

require_once '../core/model.master.php';

class Service extends ModelMaster{

    //Listar
    public function listService(){
        try{
            return parent::getRows("spu_precios_listar");
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function listHeadquarters(){
        try{
            return parent::getRows("spu_sedes_listar");
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    //Registrar
    public function registerService(array $data){
        try{
           return parent::execProcedure($data, "spu_servicios_registrar", true);
        
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    //Modificar
    public function modifyService(array $data){
        try{
            parent::execProcedure($data, "spu_servicios_modificar");
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    //Eliminar
    public function removeService(array $data){
        try{
            parent::execProcedure($data, "spu_servicios_eliminar", false);
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    //Listar un tipo de examen por ID
    public function listOneDataService(array $idservicio){
        try{
            return parent::execProcedure($idservicio, "spu_servicio_onedata_listar", true);
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }
}

?>