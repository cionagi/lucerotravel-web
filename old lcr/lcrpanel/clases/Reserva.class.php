<?php
class Reserva{
    
    function Agregar($nombre,$apellido,$email,$cant_pasajeros,$hotel,$monto_total,$monto_excursion,$habitacion,$nombre_excursion,$info,$fecha){
        $query = mysql_query("INSERT INTO historial VALUES('null','$nombre','$apellido','$email','$cant_pasajeros','$hotel','$monto_total','$monto_excursion','$habitacion','$nombre_excursion','$info','$fecha')");
        return $query;
    }
    
    function Mostrar(){
        $query = mysql_query("SELECT * FROM historial ");
        return $query;
    }
    
    function Ultimas5(){
        $query = mysql_query("SELECT * FROM historial");
        return $query;
    }
    
    function ver_mensaje($id){
        $query = mysql_query("SELECT * FROM historial WHERE codigo_historial = '$id'");
        return $query;
    }
    
}
?>