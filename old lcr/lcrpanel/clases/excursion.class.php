<?php
class Excursion{

    function insertar_excursion ($nombre,$detalle,$imagen,$valor,$region){
        $query = mysql_query("INSERT INTO excursion VALUES(null, '".$nombre."', '".$detalle."', '".$imagen."', '".$valor."', ".$region.") ") or die(mysql_error());
		return $query;
    }

    function eliminar_excursion ($codigo_excursion){
        $query = mysql_query ("DELETE FROM excursion WHERE codigo_excursion = $codigo_excursion") or die(mysql_error());
	return $query;
    }
    
    function verTodos(){
		$query = mysql_query("SELECT * FROM excursion INNER JOIN region ON excursion.codigo_region = region.codigo_region");
		return $query;	
    }
    
    function verExcursionesconOfertas(){
		$query = mysql_query("SELECT * FROM excursion INNER JOIN region ON excursion.codigo_region = region.codigo_region INNER JOIN oferta ON excursion.codigo_excursion = oferta.codigo_excursion");
		return $query;	
    }
    function selectOferta(){
		$query = mysql_query("SELECT * FROM excursion WHERE NOT EXISTS (SELECT * FROM oferta WHERE oferta.codigo_excursion = excursion.codigo_excursion) ");
		return $query;
    }
	
    function MostrarIndex($codigo){
	    //Verificamos si la excursion tiene oferta
	    $query = mysql_query("SELECT * FROM excursion e INNER JOIN oferta h ON h.codigo_excursion = e.codigo_excursion WHERE e.codigo_excursion = ". $codigo);
	    if(mysql_num_rows($query)==0){
		return false;
	    }else{
		return true;
	    }
    }
    
    function imprimir_index($codigo){
	$query = mysql_query("SELECT * FROM excursion WHERE codigo_excursion = '$codigo'");
	return $query;
    }
    
    function imprimir_oferta($codigo){
	$query = mysql_query("SELECT * FROM excursion e INNER JOIN oferta h ON h.codigo_excursion = e.codigo_excursion WHERE e.codigo_excursion = ". $codigo);
	return $query;
    }
    
    function MostrarExcursion(){
	    $query = mysql_query("SELECT codigo_excursion, nombre FROM excursion");
	    return $query;
    }
    
    public function BuscarExcursion($codigo){
	$query = mysql_query("SELECT * FROM excursion WHERE codigo_excursion = '$codigo'");
	return $query;
    }
    
    public function Agregar_infoExcursion($titulo,$codigo_excursion,$descripcion){
	$descripcion = stripcslashes($descripcion); 
	$query = mysql_query("INSERT INTO infoexcursion VALUES('$titulo','$codigo_excursion','$descripcion')");
	return $query;
    }
    
    public function UltimaExcursion(){
	$query = mysql_query('SELECT MAX(codigo_excursion) FROM excursion');
	$ultimo = mysql_fetch_array($query);
	return $ultimo[0];
    }
    public function mostrarPagina($codigo_excursion){
	$query = mysql_query("SELECT titulo FROM infoexcursion WHERE codigo_excursion = '$codigo_excursion'");
	$query = mysql_fetch_array($query);
	return $query[0];
    }
    
    public function mostrarTodo($titulo){
	$query = mysql_query("SELECT * FROM infoexcursion WHERE titulo = '$titulo'");
	return $query;
    }
    
    public function buscarInfoExcursion($codigo){
	$query = mysql_query("SELECT * FROM infoexcursion WHERE codigo_excursion = '$codigo'");
	return $query;
    }
    
    function modificar_excursion ($nombre,$detalle,$imagen,$valor,$region,$codigo){
        $query = mysql_query("UPDATE excursion SET nombre = '$nombre', detalle = '$detalle', imagen = '$imagen', valor = '$valor', codigo_region = '$region' WHERE codigo_excursion = $codigo; ") or die(mysql_error());
	return $query;
    }
    
    public function editarinfoExcursion($titulo,$descripcion,$codigo){
	$descripcion = stripcslashes($descripcion);
	$query = mysql_query("UPDATE infoexcursion SET titulo = '$titulo', descripcion = '$descripcion' WHERE codigo_excursion  = '$codigo'") or die(mysql_error());
	return $query;
	
    }
    
}
?>