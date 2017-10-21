<?php
require_once("../clases/conexion.php");
require_once("../clases/Galeria.class.php");
$con = new conexion();
$con->Conectar();
$galeria = new Galeria();
$query = $galeria->BuscarGaleria($_POST["codigo"]);
if(mysql_numrows($query)!=0){
    while($fila = mysql_fetch_array($query)){
        $imagen = $fila['imagen'];
    }
    if(unlink("../../images/galeria/".$imagen)){
        $galeria->delete_galeria($_POST["codigo"]);
    }
}else{
    echo "Error: 340. Comuniquese urgente con algun desarrollador";
}
$con->Desconectar();
?>