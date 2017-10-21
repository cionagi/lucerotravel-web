<?php

include('clases/conexion.php');
$con = new conexion();
$con->Conectar();

include('clases/session.class.php');
$ss = new Session();

if($ss->iniciar($_POST['usuario'],$_POST['pwd'])){
    $con->Desconectar();
    header("Location: index.php");
}else{
    $con->Desconectar();
	echo"error";
    //header("Location: galeria.php");
    
}
?>