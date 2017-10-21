<?php include("header.php"); ?> 

		<div id="content_main" class="clearfix">
          <?php
		  
		if(isset($_POST['boton']))
		{
			require_once('clases/slider.class.php');
			$s = new slider();
			
			$imagen = $_FILES['imagen']['tmp_name'];
			$nombreimagen = $_FILES['imagen']['name'];
			
			
			if(move_uploaded_file($imagen ,"../images/slider/" .$nombreimagen))
			{
			       $a = $s->insertar_slider($nombreimagen,$_POST["titulo"],$_POST["descripcion"]);
				if($a)
				{
					header("Location: slider.php");
				}else{
					echo $a;
				}
			}
			else
			{
			      ?>
			      <div class="error">Hubo un error al ingresar una excursion, verifique que todo los datos esten ingresados, si el error persiste contactese con algun desarrollador</div>
			      <?php
			} 
			
		}
		    
		  ?>
        <div class="nota">
	    El formato de las imagenes pueden ser: JPG, PNG , GIF
	</div>
	
	
	
	<form  class="form" method="post" enctype="multipart/form-data">
        <fieldset>
		
		<div>
		    <label for="titulo">Titulo </label>
		    <input type="text" name="titulo" id="titulo" placeholder="Ingrese un titulo"/>
		</div>
		
		<div>
		    <label for="descripcion">Descripcion </label>
		    <input type="text" name="descripcion" id="descripcion" placeholder="ingrese una descripcion"/>
		</div>
		
		<div>
		    <label for="imagen">Imagen </label>
		    <input type="file" name="imagen" id="imagen"/>
		</div>
		
        
        
        <input type="submit" name="boton" id="boton" value="enviar"/>
		
	</fieldset>
	</form>
		</div>
		
		
		<div id="panels" class="clearfix"><!-- end #photo --><!-- end #todo --><!-- end #calendar -->
		</div><!-- end #panels -->
	 
   
    		
    </div><!-- end #content -->
		   
  <?php include("footer.php"); ?> 