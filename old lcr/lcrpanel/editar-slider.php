<?php include("header.php");
if(isset($_GET["editar"])){
    require_once('clases/slider.class.php');
    $es = new slider();
    $query = $es->BuscarSlider($_GET["editar"]);
    if(mysql_numrows($query)!=0){
        while($rows = mysql_fetch_array($query)){
            $codigo = $rows[0];
            $nombre = $rows[2];
            $detalle = $rows[3];
            $imagen1 = $rows[1];
        }
    }else{
        header("Location: slider.php");
    }
    
    #Preguntamos si el usuario hizo click en el boton enviar
    if(isset($_POST['boton'])){
                
                #preguntamos si subio alguna imagen
                #empty = verifica si la variable esta null.
                if(!empty($_FILES['imagen']['tmp_name'])){
                            
                            $imagen = $_FILES['imagen']['tmp_name'];
                            $nombreimagen = $_FILES['imagen']['name'];
                            if(move_uploaded_file($imagen ,"../images/slider/" .$nombreimagen))
                            {
				unlink("../images/slider/".$imagen1);
                                $query = $es->Editar($codigo,$nombreimagen,$_POST["titulo"],$_POST["descripcion"]);
                            }
                #Si el usuario no subio ninguna foto, subimos las variables que modifico o las originales
                #$imagen = se capturo del while que se hizo al comienzo y obtener el nombre de la imagen actual.
                }else{
                    $query = $es->Editar($codigo,$imagen1,$_POST["titulo"],$_POST["descripcion"]);
                }
                 
        #Impresion si nuestras modificaciones fueron correctas, si nos devuelve 1 nos redireciona a la pagina excursion.
        #Else: mostrara el error en la pagina:
        if($query){
                header("Location: slider.php");
        }else{
                echo $query;
        }
    }
    
?> 

	<div id="content_main" class="clearfix">
           
                <p id="info-editar">Editando slider: <?php echo $nombre; ?></p>
            
            
	<form  class="form" method="post" enctype="multipart/form-data">
        <fieldset>
		
		<div>
		    <label for="titulo">Titulo </label>
		    <input type="text" value="<?php echo $nombre; ?>" name="titulo" id="titulo" placeholder="Ingrese un titulo"/>
		</div>
		
		<div>
		    <label for="imagen">Imagen </label>
		    <input type="file" name="imagen" id="imagen"/>
		</div>
		
		<div>
		    <label for="descripcion">Descripcion </label>
		    <textarea name="descripcion"><?php echo $detalle; ?></textarea>
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
    header("Location: slider.php");
}
include("footer.php");
?> 