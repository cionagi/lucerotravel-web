<?php include("header.php"); ?> 

<div id="content_main" class="clearfix">
	
          
       <?php
		  
		if(isset($_POST['boton']))
		{
			require_once('clases/excursion.class.php');
			$ex = new Excursion();
			
			$imagen = $_FILES['imagen']['tmp_name'];
			$nombreimagen = $_FILES['imagen']['name'];
			if(move_uploaded_file($imagen ,"Imagenes/" .$nombreimagen))
			{
				$a = $ex->insertar_excursion($_POST['nombre'],$_POST['detalle'],$nombreimagen,$_POST['valor'],$_POST['region']);
				$codigo_excursion = $ex->UltimaExcursion();
				if($a)
				{
					$titulo = str_replace(" ","-",$_POST["titulo_pag"]);
					$b = $ex->Agregar_infoExcursion($titulo,$codigo_excursion,mysql_real_escape_string($_POST["contenido-pag"]));
					if($b){
						header("Location: excursiones.php");
					}
					else{
						echo $b;
					}
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
		El sitio podría estar no disponible temporalmente o demasiado ocupado. Vuelva a intentarlo en unos momentos. El sitio podría estar no disponible temporalmente o demasiado ocupado. Vuelva a intentarlo en 
	    </div>
	
	
	
	<form id="form-excursion"  class="form" method="post" enctype="multipart/form-data">
        <fieldset>
		
		<div>
			<label for="nombre">Nombre </label>
			<input type="text" name="nombre" id="nombre" placeholder="ingrese su nombre.." />
		</div>
		
		<div>
		    <label for="imagen">Imagen </label>
		    <input type="file" name="imagen" id="imagen" placeholder="ingrese una imagen.." />
		</div>
		
		<div>
		    <label for="valor">Valor</label>
		    <input type="number" name="valor" id="valor"  placeholder="ingrese un valor" />
		</div>
		
		<div>
		<label for="region">Region</label>
		<select name="region">
		<?php
		include("clases/Region.class.php");
		$r = new Region();
		$query = $r->Listar();
		if(mysql_numrows($query)!=0){
			while($fila = mysql_fetch_array($query)){
			?>
			<option value="<?php echo $fila[0]; ?>"><?php echo $fila[1]; ?></option>
			<?php
			}
		}
		?>
		</select>
		</div>
		
		<div>
		    <label for="detalle">Detalle </label>
		    <textarea name="detalle" id="detalle" class="text1 detalle_ad" required></textarea>
		</div>
		
		<!-- DETALLE OTRA PAGINA -->
		
		<div>
			<h1>Informacion de la excursion</h1>
		</div>
		
		<div>
			<label for="titulo_pag">Titulo Pagina</label>
			<input type="text" name="titulo_pag" id="titulo_pag" placeholder="Titulo de la pagina"/>
		</div>
		
		<div>
			<textarea name="contenido-pag" id="contenido-pag"></textarea>
		</div>
		
	
        
        <input type="submit" name="boton" id="boton" value="enviar"/>
		
	</fieldset>
	</form>
		</div>
		
		
		<div id="panels" class="clearfix"><!-- end #photo --><!-- end #todo --><!-- end #calendar -->
		</div><!-- end #panels -->
	 
   
    		
    </div><!-- end #content -->
		   
  <?php include("footer.php"); ?> 