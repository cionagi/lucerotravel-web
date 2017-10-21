<?php
require_once("../clases/conexion.php");
require_once("../clases/Reserva.class.php");
$con = new conexion();
$con->Conectar();

$r = new Reserva();
$mensaje = $r->ver_mensaje($_POST["codigo"]);
$mensaje = mysql_fetch_array($mensaje);
echo $mensaje["comentario"];
$con->Desconectar();
?>