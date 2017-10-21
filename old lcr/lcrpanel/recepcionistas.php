<?php include("header.php"); ?> 

		<div id="content_main" class="clearfix">
		
                <a class="button normal cyan" href="agregar-recepcionista.php"><span>Agregar Recepcionista</span></a>
		<div id="tabledata" class="section">
			<h2 class="ico_mug">Recepcionista</h2>
		<table class="recep" id="table">
			<thead>
			<tr>
				<th>Hotel</th>
				<th>Nombre</th>
				<th>RUT</th>
				<th>Numero Cuenta</th>
				<th>Banco</th>
				<th>Email</th>
				<th>Celular</th>
				<th>Opciones</th>
			</tr>
			</thead>
			<tbody>
			<?php
				include("clases/recepcionistas.class.php");
				$re = new Recepcionistas();
                                $query = $re->mostrar();
				if(mysql_numrows($query)==0){
				?>
					<tr>
						<td class="advertencia-td" colspan="8">No contiene ningun recepcionistas</td>
					</tr>
				<?php
				}else{
					while($fila = mysql_fetch_array($query)){
						?>
							<tr>
								<td class="n_excursion"><?php echo $fila[1]; ?></td>
								<td><?php echo $fila[2]; ?></td>
								<td><?php echo $fila[3]; ?></td>
								<td><?php echo $fila[4]?></td>
								<td><?php echo $fila[5]?></td>
								<td><?php echo $fila[6]?></td>
								<td><?php echo $fila[7]?></td>
								<td class="accion-t recepcion">
									<a class="button small red enlace" id="<?php echo $fila[0]; ?>" title="<?php echo $fila[2]; ?>" href="#"><span>eliminar</span></a>
								</td>
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
