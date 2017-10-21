<?php

include_once('librerias/global.php');
$titulo_pagina = "Lucero Travel - Reserva";
$key = "turismo chile,excursiones,viajes,hoteles,hotel,transporte,turismos chile,turismo santiago,turismo viña,travel, alojamiento,transfers,chile turismo, brasil,turismo brasil, chile turismo, brasil,chile,hospedaje santiago,hospedaje";


include "header.php";
include("lcrpanel/clases/Reserva.class.php");
$r = new Reserva();
$query = $r->Agregar($_POST["nombre"],$_POST["apellido"],$_POST["email"],$_POST["pasajeros"],$_POST["hotel"],($_POST["monto"]*$_POST['pasajeros']),$_POST["monto"],$_POST["habitacion"],$_POST["nombre_excursion"]);
if($query){
    ?>
        <div class="mensaje-exitoso">
            Su reserva fue enviada con exito. Espere que un asistente se contacte con usted
        </div>
    <?php
}else{
    ?>
        <div class="mensaje-error">
                Hubo un error en el envio de la reserva. Este error pudo ser causado por: falta de ingresos de datos. Si el error persiste comuniquese con nosotros en el telefono que sale en nuestra web
                <br>
                Porfavor Intentelo denuevo.
        </div>
    <?php
}


?>

<?php include "footer.php"; ?>