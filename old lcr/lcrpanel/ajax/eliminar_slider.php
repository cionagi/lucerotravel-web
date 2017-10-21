<?php
require_once("../clases/conexion.php");
require_once("../clases/slider.class.php");
$con = new conexion();
$con->Conectar();
$slider = new slider();
$query = $slider->BuscarSlider($_POST["codigo"]);
if(mysql_numrows($query)!=0){
    while($fila = mysql_fetch_array($query)){
        $imagen = $fila['imagen'];
    }
     if(unlink("../../images/slider/".$imagen)){
        $slider->eliminar_slider($_POST["codigo"]);
    }
}else{
    echo "Error: 340. Comuniquese urgente con algun desarrollador";
}
$con->Desconectar();
?>