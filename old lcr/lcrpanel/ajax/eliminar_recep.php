<?php
require_once("../clases/conexion.php");
require_once("../clases/recepcionistas.class.php");
$con = new conexion();
$con->Conectar();
$re = new Recepcionistas();
$query = $re->eliminar($_POST["codigo"]);
echo $query;
$con->Desconectar();
?>