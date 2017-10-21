<?php include("header.php"); ?> 

		<div id="content_main" class="clearfix">
          <?php
		  
		if(isset($_POST['boton']))
		{
			require_once('clases/Galeria.class.php');
			$g = new Galeria();
			
			$imagen = $_FILES['imagen']['tmp_name'];
			$nombreimagen = $_FILES['imagen']['name'];
			
			
			if(move_uploaded_file($imagen ,"../images/galeria/" .$nombreimagen))
			{
			       $a = $g->insertar_galeria($nombreimagen);
				if($a)
				{
					header("Location: galeria.php");
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
		    <label for="imagen">Imagen </label>
		    <input type="file" name="imagen" id="imagen" required/>
		</div>
		
        
        
        <input type="submit" name="boton" id="boton" value="enviar"/>
		
	</fieldset>
	</form>
		</div>
		
		
		<div id="panels" class="clearfix"><!-- end #photo --><!-- end #todo --><!-- end #calendar -->
		</div><!-- end #panels -->
	 
   
    		
    </div><!-- end #content -->
		   
  <?php include("footer.php"); ?> 