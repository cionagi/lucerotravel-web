<?php
class Subcriptores{
    function agregar($email){
        $query = mysql_query("INSERT INTO subcripcion VALUES('".$email."')") or die(mysql_error());
        return $query;
    }
    
    function mostrar(){
        $query = mysql_query("SELECT * FROM subcripcion");
        return $query;
    }
    
    function Eliminar($email){
        $query = mysql_query("DELETE FROM subcripcion WHERE email = '$email'") or die(mysql_error());
        return $query;
    }
}
?>