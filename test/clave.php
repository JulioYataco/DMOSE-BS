
<?php


$origin = "12345";
$clave = password_hash($origin, PASSWORD_BCRYPT);

var_dump($clave);

// Verfificar
$claveInput = "12345";

$login = password_verify($claveInput, $clave);

echo "<pre>";
var_dump($login);
echo "</pre>";



?>