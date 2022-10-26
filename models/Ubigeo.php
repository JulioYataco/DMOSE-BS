<?php 

// Incorporar al Model Master
require_once '../core/model.master.php';

class Ubigeo extends ModelMaster{

	public function getUbigeo($data){
		try{
			return parent::execProcedure($data, "spu_ubigeos_buscar", true);

		} catch(Exception $e){
				die($e->getMessage());
		}
	}
}

?>