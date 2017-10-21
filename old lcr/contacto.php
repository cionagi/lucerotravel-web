<?php
include_once('librerias/global.php');
$titulo_pagina = "Lucero Travel - Contacto";
$key = "turismo chile,excursiones,viajes,hoteles,hotel,transporte,turismos chile,turismo santiago,turismo viña,travel, alojamiento,transfers,chile turismo, brasil,turismo brasil, chile turismo, brasil,chile,hospedaje santiago,hospedaje";

include("header.php");?>

<div id="contenido">
    
    
    <h2 class="turismo">Contacto</h2>
    
    <?php

function comprobar_email($email){
    $mail_correcto = 0;
    //compruebo unas cosas primeras
    if ((strlen($email) >= 6) && (substr_count($email,"@") == 1) && (substr($email,0,1) != "@") && (substr($email,strlen($email)-1,1) != "@")){
       if ((!strstr($email,"'")) && (!strstr($email,"\"")) && (!strstr($email,"\\")) && (!strstr($email,"\$")) && (!strstr($email," "))) {
          //miro si tiene caracter .
          if (substr_count($email,".")>= 1){
             //obtengo la terminacion del dominio
             $term_dom = substr(strrchr ($email, '.'),1);
             //compruebo que la terminación del dominio sea correcta
             if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")) ){
                //compruebo que lo de antes del dominio sea correcto
                $antes_dom = substr($email,0,strlen($email) - strlen($term_dom) - 1);
                $caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1);
                if ($caracter_ult != "@" && $caracter_ult != "."){
                   $mail_correcto = 1;
                }
             }
          }
       }
    }
    if ($mail_correcto)
       return 1;
    else
       return 0;
} 


	if(isset($_POST["nombre"]) && isset($_POST["email"]) &&  isset($_POST["info"])){
	    if(!empty($_POST["nombre"]) && !empty($_POST["email"]) && !empty($_POST["info"])){
	    
		if(comprobar_email($_POST["email"])){
		    require("librerias/phpmailer/class.phpmailer.php"); //Importamos la función PHP class.phpmailer

			$mail = new PHPMailer(); 
			$mail->IsSMTP(); 
			$mail->SMTPAuth = true; // True para que verifique autentificación de la cuenta o de lo contrario False
			$mail->Username = "info@lucerotravelchile.cl"; // Tu cuenta de e-mail
			$mail->Password = "TrLkI.26Rb=e"; // El Password de tu casilla de correos
			
			
			$mail->Host = "localhost"; 
			$mail->From = "info@lucerotravelchile.cl"; 
			$mail->FromName = "Lucero Travel - Contacto de : ".$_POST["nombre"]; 
			$mail->Subject = $_POST["nombre"]; 
			$mail->AddAddress("reservas@lucerotravelchile.cl","Nuevo Contacto"); 
			
			$mail->WordWrap = 50; 
			
			$body = " Nuevo contacto de lucero. Usuario de contacto es: ".$_POST["nombre"]. " \n email:  ".$_POST["email"]. " \n\n comentario: ".$_POST["info"];
			
			$mail->Body = $body; 
			
			$mail->Send(); 
		      
		      
		      // Notificamos al usuario del estado del mensaje
		      
		      if(!$mail->Send()){ 
			echo "<div class='warning'><p>El mensaje no se pudo enviar, pudo haber sido falla del servidor. Por favor intentelo mas tarde.<p></div>"; 
		      }else{ 
			echo "<div class='exitoso'><p>Su mensaje fue enviado correctamente. Espere a que nos comuniquemos con usted en un periodo de 24 hrs.<p></div>"; 
		      }
		}else{
		    echo "<div class='warning'><p>Ingrese un email valido.<p></div>"; 
		}
	    }else{
		echo "<div class='warning'><p>Porfavor ingrese todo los datos del formulario (*).<p></div>"; 
	    }
              
       }
?>

    
    
    <form  class="form" id="contacto" method="post">
        <div>
            <label for="nombre">Nombre <span> (*) </span>:</label>
            <input type="text" name="nombre" id="nombre" placeholder="ingrese su nombre.."/>
        </div>
        
        <div>
            <label for="email">Email <span> (*)</span>:</label>
            <input type="text" name="email" id="email" placeholder="ingrese su email.."/>
        </div>
        
        <div>
            <label for="telefono">Telefono :</label>
            <input type="text" name="telefono" id="telefono" placeholder="ingrese su telefono.."/>
        </div>
        
        <div>
            <label for="info">Informacion Adicional <span> (*) </span> :</label>
            <textarea name="info" id="info" placeholder="ingrese una informacion adicional"></textarea>
        </div>
        
        <div id="submit">
            
            <input  type="submit" value="Contactar"/>
        </div>
        
           
    </form>
    
    <div class="parrafo"id="fuente_contacto">
        
	
<p>reservas@lucerotravelchile.cl</p>

<p>Fonos: (56) 02 8802574 – (56) 02 7490064</p>

<p>Nextel: 56*136*846</p>

<p>Santiago de Chile</p>
    </div>
</div>

<?php include("tabla.php"); ?>
                        
                        <div class="clear"></div>


<?php include("footer.php"); ?>