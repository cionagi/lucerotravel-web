<?php
class Oferta{
    public $descuento;
    
    function insertar_oferta($descuento,$codigo_excursion){
        $query = mysql_query("INSERT INTO oferta VALUES(null , '".$descuento."', $codigo_excursion)") ;
        return $query;
    }
    
    function eliminar_oferta($codigo_oferta){
        $query = mysql_query("DELETE FROM oferta WHERE codigo_oferta = $codigo_oferta") or die(mysql_error());
        return $query;
    }
    
    function modificar_oferta($descuento,$codigo){
        $query = mysql_query("UPDATE oferta SET descuento = $descuento") or die(mysql_error());
        return $query;
    }
    
    function mostrarMonto($id){
        $query = mysql_query("SELECT valor FROM excursion WHERE codigo_excursion = ".$id);
        return $query;
    }
    
    function Mostrar(){
        $query = mysql_query("SELECT * FROM oferta INNER JOIN excursion ON oferta.codigo_excursion  = excursion.codigo_excursion");
        return $query;
    }
    
    function BuscarOferta($codigo){
        $query = mysql_query("SELECT * FROM oferta INNER JOIN excursion ON oferta.codigo_excursion  = excursion.codigo_excursion WHERE codigo_oferta = $codigo");
        return $query;
    }
    
}
?>