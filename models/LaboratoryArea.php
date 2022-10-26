<?php

require_once '../core/model.master.php';

class LaboratoryArea extends ModelMaster{

    //Listar Areas
    public function listLaboratoryArea(){
        try{
            return parent::getRows("spu_areaslaboratorio_area_listar");
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    //Listar Metodos
    public function listMethodLab(){
        try{
            return parent::getRows("spu_areaslaboratorio_metodo_listar");
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

     //Listar Muestras
     public function listSampleLab(){
        try{
            return parent::getRows("spu_areaslaboratorio_muestra_listar");
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    //Registrar
    public function registerLaboratoryArea(array $data){
        try{
            parent::execProcedure($data, "spu_areaslaboratorio_registrar");
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    //Listar por ID
    public function listOneDataLaboratoryArea(array $idtipoexamen){
        try{
            return parent::execProcedure($idtipoexamen, "spu_areaslaboratorio_onedata_listar", true);
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    //Modificar
    public function modifyLaboratoryArea(array $data){
        try{
            parent::execProcedure($data, "spu_areaslaboratorio_modificar");
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    //Eliminar
    public function removeLaboratoryArea(array $data){
        try{
            parent::execProcedure($data, "spu_areaslaboratorio_eliminar", false);
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    
}

?>