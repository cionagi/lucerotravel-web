<?php include("header.php");
if(isset($_GET["editar"])){
    require_once('clases/oferta.class.php');
    $oferta = new Oferta();
    $query = $oferta->BuscarOferta($_GET["editar"]);
    if(mysql_numrows($query)!=0){
        while($rows = mysql_fetch_array($query)){
            $codigo = $rows[0];
            $descuento = $rows[1];
            $valor = $rows[7];
	    $nombre = $rows[5];
        }
    }else{
        header("Location: ofertas.php");
    }
    
    if(isset($_POST["boton"])){
	$query = $oferta->modificar_oferta($_POST["descuento"],$codigo);
	
	if($query){
	    header("Location: ofertas.php");
	}else{
	    echo $query;
	}
    }
    
?> 
	<div id="content_main" class="clearfix">
                <p id="info-editar">Editando la oferta de la excursion: <?php echo $nombre; ?></p>
	    <form  class="form" method="post" enctype="multipart/form-data">
	    <fieldset>		    
		    <div>
		      <label>Monto Inicio</label>
		      <input type="number" id="monto_exc" value="<?php echo $valor; ?>" disabled="disabled"/>
		      <input type="hidden" value="<?php echo $codigo ?>" name="codigo_oferta"/>
		    </div>
		    
		    <div>
		      <label>Descuento</label>
		      <input type="number" name="descuento" id="descuento" value="<?php echo $descuento; ?>" placeholder="Ingrese un descuento"/>
		    </div>
		    
		    <div>
		      <label>Total</label>
		      <input type="number" name="total" id="total" value="<?php echo $valor - (($valor*$descuento)/100) ?>" disabled="disabled"/>
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
    header("Location: ofertas.php");
}
include("footer.php");
?> 