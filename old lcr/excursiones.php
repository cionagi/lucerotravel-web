<?php
include_once('librerias/global.php');
$titulo_pagina = "Lucero Travel - Excursiones";
$key = "turismo chile,excursiones,viajes,hoteles,hotel,transporte,turismos chile,turismo santiago,turismo viña,travel, alojamiento,transfers,chile turismo, brasil,turismo brasil, chile turismo, brasil,chile,hospedaje santiago,hospedaje";
include("header.php");?>

<div id="contenido">


<h2 class="turismo">Excursiones</h2>
	
	<?php include("mostrarExcursiones.php"); ?>
        
</div><!--fin de contenido-->



<?php include("tabla.php"); ?>
<div class="clear"></div>
<?php include("footer.php"); ?>
