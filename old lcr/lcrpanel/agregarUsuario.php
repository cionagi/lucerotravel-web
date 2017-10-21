<?php include("header.php"); ?> 

<div id="content_main" class="clearfix">
	
          
       <?php
		  
		if(isset($_POST['boton']))
		{
			require_once('clases/usuario.class.php');
			$exx = new Usuario();
			
			$aa = $exx->crearUsuario($_POST['usuario'],$_POST['pwd']);
			  	if($aa)
				{
					header("Location: index.php");
				}else{
		?>
			<div class="error">Hubo un error al ingresar una excursion, verifique que todo los datos esten ingresados, si el error persiste contactese con algun desarrollador</div>
		<?php }  
		}  ?>
                    
        <div class="nota">
		Porfavor no olvidar los campos ingresados
	    </div>
		
	
	
	<form  class="form" method="post" enctype="multipart/form-data">
        <fieldset>
		
		<div>
			<label for="usuario">Usuario </label>
			<input type="text" name="usuario" id="usuario" placeholder="ingrese su usuario.." required/>
		</div>
        <div>
			<label for="psw">Contraseña </label>
			<input type="password" name="pwd" id="pwd" placeholder="ingrese su contraseña.." required/>
		</div>
		
		       
        <input type="submit" name="boton" id="boton" value="enviar"/>
		
	</fieldset>
	</form>
		</div>
		
		
		<div id="panels" class="clearfix">
		</div><!-- end #panels -->
	 
   
    		
    </div><!-- end #content -->
		   
  <?php include("footer.php"); ?> 
