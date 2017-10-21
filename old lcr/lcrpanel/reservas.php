<?php include("header.php"); ?> 

		<div id="content_main" class="clearfix">
		<div id="tabledata" class="section">
			<h2 class="ico_mug">Reservas</h2>
		<table class="recep" id="table">
			<thead>
			<tr>
				<th>Nombre</th>
                                <th>Apellido</th>
				<th>Email</th>
				<th>Hotel</th>
				<th>Habitacion</th>
				<th>Pasajeros</th>
				<th>Excursion</th>
				<th>Fecha</th>
				<th>Monto</th>
				<th>Informacion Adicional</th>
			</tr>
			</thead>
			<tbody>
			<?php
				include("clases/Reserva.class.php");
				$r = new Reserva();
                $query = $r->Mostrar();
				if(mysql_numrows($query)==0){
			?>
					<tr>
						<td class="advertencia-td" colspan="9">No contiene ninguna reserva</td>
					</tr>
			<?php
				}
				else{
                     while($fila = mysql_fetch_array($query)){
             ?>
                                        <tr>
                                            <td><?php echo $fila[1]; ?></td>
                                            <td><?php echo $fila[2]; ?></td>
                                            <td><?php echo $fila[3]; ?></td>
                                            <td><?php echo $fila[5]; ?></td>
                                            <td><?php echo $fila[8]; ?></td>
                                            <td><?php echo $fila[4]; ?></td>
                                            <td><?php echo $fila[9];?></td>
					    <td><?php echo $fila["fecha"]; ?></td>
                                            <td><?php echo $fila[6]; //monto ?></td>
                                            <td class="ver-comentarios"><a id="<?php echo $fila[0]; ?>" class="button small brown enlace" href="#"><span>Ver Comentarios</span></a></td>
                                        </tr>
                                    <?php
                                    }
                                }
			?>
				
			</tbody>
		</table>
		</div> <!-- end #tabledata -->
		</div><!-- end #panels -->
		
	    </div><!-- end #content -->
<?php include("footer.php"); ?> 
