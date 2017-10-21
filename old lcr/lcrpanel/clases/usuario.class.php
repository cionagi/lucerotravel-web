<?php
class Usuario{
 
     public function crearUsuario($usuario,$pwd){
        //Creamos la password encriptada hash + salt
        $hash = hash('sha256', $pwd);
        $salt = Usuario::CrearSalt();
        $pwd = hash('sha256', $salt . $hash);
        
        $query = mysql_query("INSERT INTO usuario VALUES ('$usuario','$pwd','$salt')") or die(mysql_error());
        return $query;
    }
   
    //Funcion para crear salt
    static public function CrearSalt()
    {
        $string = md5(uniqid(rand(), true));
        return substr($string, 0, 3);
    }
    
	function modificar_clave($contrasena){
        $query = mysql_query("update usuario set clave = '".$clave."' WHERE usuario = '".$usuario."' and contrasena= '".$contrasena."' ");
        return $query;
    }
    
    
    function Mostrar_usuario($usuario){
        $query = mysql_query("SELECT * FROM usuario WHERE usuario= '".$usuario."' ");
        return $query;
    }
    
	function ValidarUsuario($usuario){
   		 $query=  ("SELECT * FROM usuario WHERE usuario = '".$usuario."' ");
		 return $query;
	}
}
?>
