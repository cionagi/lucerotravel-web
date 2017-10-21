<?php
include("header.php");
        
        #preguntamos si existe alguna variale en nuestra url con el nombre editar
        #ej: http://url.com?editar=2
        #Si existe mostramos toda la pagina, de lo contrario redireccionaremos a excursion (else final de la hoja)
        if(isset($_GET["editar"])){
            require_once('clases/excursion.class.php');
            $ex = new Excursion();
            #Buscamos la excurion segun el codigo que nos mando el usuario en la variable editar y la almacenamos en $query
            $query = $ex->BuscarExcursion($_GET["editar"]);
            #Si nuestra variable contiene datos, lo almacenamos en variables externas para luego ocuparla en nuestro form -> value       
            if(mysql_numrows($query)!=0){
                    while($rows = mysql_fetch_array($query)){
                             $codigo = $rows[0];
                             $nombre = $rows[1];
                             $detalle = $rows[2];
                             $valor = $rows[4];
                             $imagen1 = $rows[3];
                    }//fin del while
            $rs = $ex->buscarInfoExcursion($codigo);
            $infoex = mysql_fetch_array($rs);
        }else{
	    header("Location: excursiones.php");
        }
        
        #Preguntamos si el usuario hizo click en el boton enviar
        if(isset($_POST['boton'])){
                
                #preguntamos si subio alguna imagen
                #empty = verifica si la variable esta null.
                if(!empty($_FILES['imagen']['tmp_name'])){
                            
                            $imagen = $_FILES['imagen']['tmp_name'];
                            $nombreimagen = $_FILES['imagen']['name'];
                            if(move_uploaded_file($imagen ,"Imagenes/" .$nombreimagen))
                            {
                                    unlink("Imagenes/" .$imagen1);
                                    $query = $ex->modificar_excursion($_POST["nombre"],$_POST["detalle"],$nombreimagen,$_POST["valor"],$_POST["region"],$_POST["codigo"]);
                                    
                                    $titulo = str_replace(" ","-",$_POST["titulo_pag"]);
				    $query = $ex->editarinfoExcursion($titulo,mysql_real_escape_string($_POST["contenido-pag"]),$codigo);
				    
				    if($query){
					header("Location: excursiones.php");
				    }
                                    
                            }
                #Si el usuario no subio ninguna foto, subimos las variables que modifico o las originales
                #$imagen = se capturo del while que se hizo al comienzo y obtener el nombre de la imagen actual.
                }else{
                    $query = $ex->modificar_excursion($_POST["nombre"],$_POST["detalle"],$imagen1,$_POST["valor"],$_POST["region"],$_POST["codigo"]);
                    
                    $titulo = str_replace(" ","-",$_POST["titulo_pag"]);
		    $query = $ex->editarinfoExcursion($titulo,mysql_real_escape_string($_POST["contenido-pag"]),$codigo);
		    
		    ?>
		   
		    <?php
                }
		
		
        #Impresion si nuestras modificaciones fueron correctas, si nos devuelve 1 nos redireciona a la pagina excursion.
        #Else: mostrara el error en la pagina:
        if($query){
                header("Location: excursiones.php");
        }else{
                echo $query;
        }    
       
           
        }
?> 

	<div id="content_main" class="clearfix">
           
                <p id="info-editar">Editando la excursion: <?php echo $nombre; ?></p>
            
            
	<form id="form-excursion"  class="form" method="post" enctype="multipart/form-data">
        <fieldset>
		<input type="hidden" value="<?php echo $codigo ?>" name="codigo"/>
		<div>
			<label for="nombre">Nombre </label>
			<input type="text" name="nombre" value="<?php echo $nombre; ?>" id="nombre" placeholder="ingrese su nombre.." />
		</div>
		
		<div>
		    <label for="imagen">Imagen </label>
		    <input type="file" name="imagen" id="imagen" placeholder="ingrese una imagen.." />
		</div>
		
		<div>
		    <label for="valor">Valor</label>
		    <input type="number" name="valor" value="<?php echo $valor ?>" id="valor" placeholder="ingrese un valor" />
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
		    <textarea name="detalle" id="detalle" class="text1" required><?php echo $detalle; ?></textarea>
		</div>
                
                <!-- DETALLE OTRA PAGINA -->
		
		<div>
			<h1>Informacion de la excursion</h1>
		</div>
		
		<div>
			<label for="titulo_pag">Titulo Pagina</label>
			<input type="text" name="titulo_pag" value="<?php echo $infoex[0]; ?>" id="titulo_pag" placeholder="Titulo de la pagina"/>
		</div>
		
		<div>
			<textarea name="contenido-pag" id="contenido-pag"> <?php echo $infoex[2]; ?> </textarea>
		</div>
	
	
        
        <input type="submit" name="boton" id="boton" value="enviar"/>
		
	</fieldset>
	</form>
		</div>
		
		
    <div id="panels" class="clearfix"><!-- end #photo --><!-- end #todo --><!-- end #calendar -->
    </div><!-- end #panels -->
	 
   
    		
    </div><!-- end #content -->
<?php
}else{
    header("Location: excursiones.php");
}
include("footer.php");
?> 