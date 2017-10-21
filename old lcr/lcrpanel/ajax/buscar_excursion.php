<?php
require_once("../clases/conexion.php");
require_once("../clases/excursion.class.php");
$con = new conexion();
$con->Conectar();
$ex = new Excursion();
$query = $ex->Mostrar();
echo $ex;
$con->Desconectar();
?>