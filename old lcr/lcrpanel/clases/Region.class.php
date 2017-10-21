<?php
class Region{
    
    function Listar(){
        $query = mysql_query("SELECT * FROM region");
        return $query;
    }
}
?>