<?php
class slider{  
    function insertar_slider($imagen,$titulo,$detalle){
        $query = mysql_query("INSERT INTO slider VALUES('null','".$imagen."', '".$titulo."', '".$detalle."')");
        return $query;
    }
    
    function eliminar_slider($codigo_slider){
        $query = mysql_query("delete FROM slider where codigo_slider = $codigo_slider") OR die(mysql_error());
        return $query;
    }
    
    function Editar($codigo,$imagen,$titulo,$detalle){
        $query = mysql_query("UPDATE slider SET imagen = '$imagen', titulo = '$titulo', detalle = '$detalle' WHERE codigo_slider = '$codigo' ") or die(mysql_error());
        return $query;
    }
    
    function mostrar(){
        $query = mysql_query("SELECT * FROM slider");
        return $query;
    }
    function BuscarSlider($codigo){
        $query = mysql_query("SELECT * FROM slider WHERE codigo_slider = $codigo");
        return $query;
    }
}
?>