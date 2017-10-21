<?php
require_once("../clases/conexion.php");
require_once("../clases/oferta.class.php");
$con = new conexion();
$con->Conectar();
$ofe = new Oferta();
$valor = $ofe->mostrarMonto($_POST["codigo"]);
while($r = mysql_fetch_array($valor)){
    echo $r[0];
}
$con->Desconectar();
?>