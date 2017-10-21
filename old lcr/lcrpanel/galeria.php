<?php include("header.php"); ?> 

		<div id="content_main" class="clearfix">
		
                <a class="button normal cyan" href="galeria_agregar.php"><span>Agregar Imagen</span></a>
		<div id="tabledata" class="section">
			<h2 class="ico_mug">Ofertas</h2>
		<table id="table">
			<thead>
			<tr>
				<th>Imagen</th>
				<th>Acciones</th>
			</tr>
			</thead>
			<tbody>
			<?php
				include("clases/Galeria.class.php");
				$galeria = new Galeria();
                                $query = $galeria->mostrar();
				if(mysql_numrows($query)==0){
				?>
					<tr>
						<td class="advertencia-td" colspan="2">No contiene ninguna imagen</td>
					</tr>
				<?php
				}else{
					while($fila = mysql_fetch_array($query)){
						?>
							<tr>
								<td class="mostrar_foto"><img src="../images/galeria/<?php echo $fila[1]; ?>"/></td>
								<td id="galeria" class="accion-t"><a id="<?php echo $fila[0]; ?>" class="button small red enlace" href="#"><span id="<?php echo $fila[0]; ?>">eliminar</span></a></td>
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
