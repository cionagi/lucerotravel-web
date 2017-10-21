<?php
include_once('librerias/global.php');
$titulo_pagina = "Lucero Travel - Galeria";
$key = "turismo chile,excursiones,viajes,hoteles,hotel,transporte,turismos chile,turismo santiago,turismo viña,travel, alojamiento,transfers,chile turismo, brasil,turismo brasil, chile turismo, brasil,chile,hospedaje santiago,hospedaje";
include("header.php");
$query = $galeria->mostrar();
if(mysql_numrows($query)==0){
	      header("Location: index.php");
}else{
	      ?>
	      <div id="thumbs">
	      <?php
	      while($fila = mysql_fetch_array($query)){
			?>
			    <a href="images/galeria/<?php echo $fila[1]; ?>" style="background-image:url(images/galeria/<?php echo $fila[1]; ?>)"></a>
			<?php
	      }
}
?>
        </div>
                
<?php include("footer.php"); ?>