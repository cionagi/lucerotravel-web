<?php
class Informes{
    
    function Grafico(){
        $query = mysql_query("SELECT nombre_excursion, COUNT(*) AS 'contador'
                             FROM historial
                             GROUP BY nombre_excursion;");
        return $query;
    }
}
?>