<?php
class Session{
	
   public function iniciar($usuario,$pwd){
        $query = mysql_query("SELECT * FROM usuario WHERE usuario = '$usuario'");
          if(mysql_num_rows($query) != 0){    
            $fila = mysql_fetch_array($query);
            $hash = hash('sha256', $fila[2] . hash('sha256', $pwd));
            if($hash == $fila[1]){
                session_start();
                $_SESSION['usuario'] = $fila[0];
                 return true;
            }else{
                return false;
            }
           
        }
        return false;
    }
    
    public function destruir_session(){
        session_destroy();
    }
    
}
?>