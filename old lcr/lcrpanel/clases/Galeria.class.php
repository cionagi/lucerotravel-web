<?php
class Galeria{
    
    function insertar_galeria($nombre){
        $query = mysql_query("INSERT INTO galeria VALUES('null','$nombre'); ");
        return $query;
    }
    
    function delete_galeria($codigo){
        $query = mysql_query("DELETE FROM galeria WHERE codigo_galeria = $codigo") or die(mysql_error());
        return $query;
    }
    
    function actualizar_galeria($codigo,$nombre){
        $query = mysql_query("UPDATE galeria SET nombre = $nombre WHERE codigo = $codigo");
        return $query;
    }
    
    function mostrar(){
        $query = mysql_query("SELECT * FROM galeria");
        return $query;
    }
    
    function mostrar_pie(){
        $query = mysql_query("SELECT * FROM galeria LIMIT 6");
        return $query;
    }
    function BuscarGaleria($codigo){
        $query = mysql_query("SELECT * FROM galeria WHERE codigo_galeria = $codigo");
        return $query;
    }
    
    function mostrar_galeria(){
        $query = mysql_query("SELECT * FROM galeria LIMIT 8");
        return $query;
    }
    
}
?>