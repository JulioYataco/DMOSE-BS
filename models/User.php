<?php

// Importar ModelMaster
require_once '../core/model.master.php';

class User extends ModelMaster {

  // Login
  public function login(array $data)
  {
    try {
      return parent::execProcedure($data, "spu_login_user", true);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }
}


?>