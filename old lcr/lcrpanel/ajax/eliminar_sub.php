<?php
require_once("../clases/conexion.php");
require_once("../clases/subscriptores.class.php");
$con = new conexion();
$con->Conectar();
$sub = new Subcriptores();
$query = $sub->Eliminar($_POST["codigo"]);
echo $query;
$con->Desconectar();
?>