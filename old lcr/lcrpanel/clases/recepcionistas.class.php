<?php
class Recepcionistas{
    
    function mostrar(){
        $query = mysql_query("SELECT * FROM recepcionista") or die(mysql_error());
        return $query;
    }
    
    function insertar($hotel,$nombre,$rut,$n_cuenta,$banco,$email,$celular){
        $query = mysql_query("INSERT INTO recepcionista VALUES('null','$hotel','$nombre','$rut','$n_cuenta','$banco','$email','$celular')") or die(mysql_error());
        return $query;
    }
    
    function eliminar($rut){
        $query = mysql_query("DELETE FROM recepcionista WHERE codigo = '$rut'") or die(mysql_error());
        return $query;
    }
    
}
?>