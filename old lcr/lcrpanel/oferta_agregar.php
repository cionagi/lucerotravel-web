<?php include("header.php");
require_once('clases/excursion.class.php');
$exer = new Excursion();

require_once('clases/oferta.class.php');
$oferta = new Oferta();
?> 

      <div id="content_main" class="clearfix">
	    <?php
		  
		if(isset($_POST['boton1']))
		{
			$query = $oferta->insertar_oferta($_POST["descuento"],$_POST["oferta"]);
			if($query)
				{
					header("Location: ofertas.php");
				}else{
					echo $query;
				}
			
			echo $_POST["descuento"] . $_POST["oferta"];
		}
		    
	    ?>
        <div class="nota">
	    El formato de las imagenes pueden ser: JPG, PNG , GIF
	</div>
	
	
	
	<form  class="form" method="post" enctype="multipart/form-data">
        <fieldset>
		
		<div>
		  <label>Selecione Excursion</label>
		  <select id="oferta" name="oferta">
			<?php
			$query = $exer->selectOferta();
			if(mysql_numrows($query)!=0){
			      while($fila = mysql_fetch_array($query)){
			?>
				    <option value="<?php echo $fila[0]; ?>" id="<?php echo $fila[0]; ?>"><?php echo $fila[1]; ?></option>
			<?php
			      }
			}
			else{
			?>
			      <option>Sin excursiones</option>
			<?php
			}
			?>
		  </select>
		  <a class="button small green" id="select_excursion" href="#"><span>Ok</span></a>
		</div>
		
		<div>
		  <label>Monto Inicio</label>
		  <input type="number" id="monto_exc" value="00000" disabled="disabled"/>
		</div>
		
		<div>
		  <label>Descuento</label>
		  <input type="number" name="descuento" id="descuento"  min="1" max="100" placeholder="Ingrese un descuento" required/>
		</div>
		
		<div>
		  <label>Total</label>
		  <input type="number" name="total" id="total" value="0" disabled="disabled"/>
		</div>
		
		 <input type="submit" name="boton1" id="boton1" value="enviar"/>
	</fieldset>
	</form>
		</div>
		
		
		<div id="panels" class="clearfix"><!-- end #photo --><!-- end #todo --><!-- end #calendar -->
		</div><!-- end #panels -->
	 
   
    		
    </div><!-- end #content -->
		   
  <?php include("footer.php"); ?> 