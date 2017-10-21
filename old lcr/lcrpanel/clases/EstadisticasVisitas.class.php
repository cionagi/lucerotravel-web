<?php
class EstadisticasVisitas{
	//Totalvisitas
	private $folder = ''; //carpeta para guardar los txt ej: contador_
	function Totalvisitas(){
		$file = $this->folder.'contador.txt';
		$fs = filesize($file);
		$fData = fopen($file,"r");
		if($fs > 0){
		  $data = unserialize(fread($fData,$fs));
		}else{
		  $data = '';
		}
		fclose($fData);
		$session_id = session_id();
		
		//Add new visit
		if(is_array($data)){
		  //Si existe un array
		  if(!isset($data[$session_id])){
		    $data[$session_id] = array (
		      'time'=> time(),
		      'ip'=>$_SERVER['REMOTE_ADDR']
		    );
		     $data['count_visits'] = $data['count_visits'] + 1;
		     
		    $fp = fopen($file,"w+");
		    fwrite($fp,serialize($data));
		    fclose($fp);
		  }else{
		    if(($data[$session_id]['time'] + 3600) < time()){
		      $data[$session_id] = array (
			'time'=> time(),
			'ip'=>$_SERVER['REMOTE_ADDR']
		      );
		       $data['count_visits'] = $data['count_visits'] + 1;
		      $fp = fopen($file,"w+");
		      fwrite($fp,serialize($data));
		      fclose($fp);
		    }
		     
		  }
		}else{
		
		  $data = array();
		  $data['count_visits'] = 21737;
		  $data[$session_id] = array (
			  'time'=> time(),
			  'ip'=>$_SERVER['REMOTE_ADDR']
			); 
		  $data['count_visits'] = $data['count_visits'] + 1;
		  $fp = fopen($file,"w+");
		  fwrite($fp,serialize($data));
		  fclose($fp);
		}
		
		return $data['count_visits'];

	}
	
	public function QuienEstaOnline(){
		
		//Obtenemos la IP del visitante y la hora actual.
		$ip=$_SERVER['REMOTE_ADDR'];
		$hora=time();
		$existe=0;
		$grabar = "";
		//Tiempo que tardará en actualizarse el contador (60=1 minuto, 1800=media hora)
		$sesion=$hora-1800;
		
		$archivo="contar_usuarios.dat";
		$ar=@file($archivo);
		//Se abre el archivo de texto para eliminar ips expiradas y crear nuevo array con las vigentes.
		//Se crea un buqle para recorrer el archivo y leer su contenido
		foreach($ar as $pet){
			$ele=explode(":",$pet);
			$ai=trim($ele[1]);
			
			if(trim($ele[1]) == $ip && trim($ele[0]) > $sesion){
				$existe=1;
			}
			if(trim($ele[0]) > $sesion){
				$array[]=implode(":",$ele);
			}
		}
		
		//Se abre el archivo para guardar los datos nuevos.
		//Se crea un buqle para recorrer el archivo y leer su contenido
		$p=@fopen($archivo,"w+");
		if($existe == 0){
		$array[]=$hora.":".$ip."\n";
		}
		
		foreach($array as $eoeo){
			$grabar.=trim($eoeo)."\n";
		}
		
		@fwrite($p,$grabar);
		@fclose($p);
		
		$con=@file($archivo);
		
		//Se guarda en una variable el número de usuarios únicos visitando la web
		return $n_usuarios=count($con);
	}
}
?>