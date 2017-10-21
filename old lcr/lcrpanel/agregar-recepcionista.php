<?php include("header.php"); ?> 

<div id="content_main" class="clearfix">
	
	<?php
	if(isset($_POST["boton"])){
	      include "clases/recepcionistas.class.php";
	      $re = new Recepcionistas();
	      $re->insertar($_POST["hotel"],$_POST["nombre"],$_POST["rut"],$_POST["cuenta"],$_POST["banco"],$_POST["email"],$_POST["celular"]);
	      if($re){
		     header("Location: recepcionistas.php");
	      }else{
		     echo $re;
	      }
	}
	?>
	
	
	<form id="form-excursion"  class="form" method="post" enctype="multipart/form-data">
        <fieldset>
		
		<div>
			<label for="hotel">Hotel </label>
			<input type="text" name="hotel" id="hotel" placeholder="ingrese el hotel" />
		</div>
		
		<div>
		    <label for="nombre">Nombre </label>
		    <input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre"/>
		</div>
		
		<div>
		    <label for="rut">RUT</label>
		    <input type="text" name="rut" id="rut"  placeholder="ingrese un rut" />
		</div>
		
		
		<div>
		    <label for="cuenta">Numero de Cuenta</label>
		    <input type="text" name="cuenta" id="cuenta"  placeholder="ingrese una cuenta" />
		</div>
		
		<div>
		    <label for="banco">Banco</label>
		    <input type="text" name="banco" id="banco"  placeholder="ingrese un banco" />
		</div>
		
		<div>
		    <label for="email">Email</label>
		    <input type="text" name="email" id="email"  placeholder="ingrese un email" />
		</div>
		
		<div>
		    <label for="celular">Celular</label>
		    <input type="text" name="celular" id="celular"  placeholder="ingrese un celular" />
		</div>
		
	      
        
        <input type="submit" name="boton" id="boton" value="enviar"/>
		
	</fieldset>
	</form>
		</div>
		
		
		<div id="panels" class="clearfix"><!-- end #photo --><!-- end #todo --><!-- end #calendar -->
		</div><!-- end #panels -->
	 
   
    		
    </div><!-- end #content -->
		   
  <?php include("footer.php"); ?> 