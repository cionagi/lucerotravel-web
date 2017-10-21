<?php
require_once("../clases/conexion.php");
require_once("../clases/oferta.class.php");
$con = new conexion();
$con->Conectar();
$oferta = new Oferta();
$query = $oferta->eliminar_oferta($_POST["codigo"]);
$con->Desconectar();
?>