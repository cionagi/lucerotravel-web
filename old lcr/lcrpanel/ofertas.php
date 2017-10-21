<?php include("header.php"); ?> 

		<div id="content_main" class="clearfix">
		
                <a class="button normal cyan" href="oferta_agregar.php"><span>Agregar Ofertas</span></a>
		<div id="tabledata" class="section">
			<h2 class="ico_mug">Ofertas</h2>
		<table id="table">
			<thead>
			<tr>
				<th>Excursion</th>
				<th>Descuento</th>
				<th>Antes</th>
				<th>Ahora</th>
				<th>Acciones</th>
			</tr>
			</thead>
			<tbody>
			<?php
				include("clases/oferta.class.php");
				$oferta = new Oferta();
                                $query = $oferta->Mostrar();
				if(mysql_numrows($query)==0){
				?>
					<tr>
						<td class="advertencia-td" colspan="5">No contiene ninguna oferta</td>
					</tr>
				<?php
				}else{
					while($fila = mysql_fetch_array($query)){
						?>
							<tr>
								<td class="n_excursion"><?php echo $fila[4]; ?></td>
								<td><?php echo $fila[1]." %"; ?></td>
								<td><?php echo $fila[7]; ?></td>
								<td><?php echo $fila[7]-(($fila[7]*$fila[1])/100); ?></td>
								<td class="accion-t ofertas">
									<a class="button small red enlace" id="<?php echo $fila[0]; ?>" title="<?php echo $fila[4]; ?>" href="#"><span>eliminar</span></a>
									<a class="button small green" href="editar-ofertas.php?editar=<?php echo $fila[0]; ?>"><span>Editar</span></a>
								</td>
							</tr>
						<?php
					}
				}
			?>
			</tbody>
		</table>
			
			<div class="pagination">
				<span class="pages">Pag 1 de 3&#8201;</span>
				<span class="current">1</span>
				<a href="#" title="2">2</a>
				<a href="#" title="3">3</a>
				<a href="#" >&raquo;</a>
			</div>
		</div> <!-- end #tabledata -->
		</div><!-- end #panels -->
		
	    </div><!-- end #content -->
<?php include("footer.php"); ?> 
