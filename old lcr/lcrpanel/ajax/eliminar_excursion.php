<?php
require_once("../clases/conexion.php");
require_once("../clases/excursion.class.php");
$con = new conexion();
$con->Conectar();
$ex = new Excursion();
$query = $ex->BuscarExcursion($_POST["codigo"]);
if(mysql_numrows($query)!=0){
    while($fila = mysql_fetch_array($query)){
        $imagen = $fila['imagen'];
    }
    if(unlink("../Imagenes/".$imagen)){
        $query = $ex->eliminar_excursion($_POST["codigo"]);
    }
}else{
    echo "Error: 340. Comuniquese urgente con algun desarrollador";
}
$con->Desconectar();
?>