<?php
class conexion{
    
    var $servidor = "localhost";
    var $usuario = "lucerotr_usuario";
    var $password = "G1!h5Ear1b,b";
    var $db = "lucerotr_db";
    
    /*function __construct(){
        $this->servidor = "localhost";
        $this->usuario = "lucerotr_usuario";
        $this->pwd = "G1!h5Ear1b,b";
        $this->db = "lucerotr_db";
    }*/
    
    function Conectar(){
		$conectar = mysql_connect($this->servidor,$this->usuario,$this->password) or die(mysql_error());
		$mydb = mysql_selectdb($this->db) or die(mysql_error());
		
    }
    function Desconectar(){
        mysql_close();
    }
}
?>