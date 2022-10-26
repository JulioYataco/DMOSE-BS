<?php

require_once '../core/model.master.php';

class Price extends ModelMaster{

    //Listar
    public function listPrice(){
        try{
            return parent::getRows("spu_fichasmedicas_listar");
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    //Registrar
    public function registerPrice(array $data){
        try{
            parent::execProcedure($data, "spu_precios_registrar");
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }
}

?>