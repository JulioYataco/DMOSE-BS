<?php 

// Incorporar al Model Master
require_once '../core/model.master.php';

class Business extends ModelMaster{

    /**
     * Este método necesita dos valores de entrada
     * OFFSET => Indice del primer elemento a mostrar
     * LIMIT  => Cantidad de elementos a mostrar
     */
    public function listBusinessPagination(array $data){
        try{
            return parent::execProcedure($data, "spu_empresas_listar_paginacion", true);
        } catch (Exception $e){
            die($e->getMessage());
        }
    }

    /**
     * Este método necesita los datos a enviar mediante un Array Asociativo (key => value)
     * Devuelve el ID del registro realizado
     * RETURN idempresa 
     */
    public function registerBusinessPagination(array $data){
        try{
            return parent::execProcedure($data, "spu_empresas_registrar", true);
        } catch (Exception $e){
            die($e->getMessage());
        }
    }

}

?>