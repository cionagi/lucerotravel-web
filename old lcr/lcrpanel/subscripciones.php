<?php include("header.php"); ?> 

		<div id="content_main" class="clearfix">
		
                <a class="button normal brown" href="#"><span>Enviar Noticia</span></a>
		<div id="tabledata" class="section">
			<h2 class="ico_mug">Subcriptores</h2>
		<table id="table">
			<thead>
			<tr>
				<th>Email</th>
                                <th>Acciones</th>
			</tr>
			</thead>
			<tbody>
			<?php
				include("clases/subscriptores.class.php");
				$sub = new Subcriptores();
                                $query = $sub->mostrar();
				if(mysql_numrows($query)==0){
				?>
					<tr>
						<td class="advertencia-td" colspan="2">No contiene ninguna reserva</td>
					</tr>
				<?php
				}else{
					while($fila = mysql_fetch_array($query)){
						?>
							<tr>
								<td><?php echo $fila[0]; ?></td>
								<td class="subscript"><a title="<?php echo $fila[0]; ?>" class="button small red enlace" href="#"><span>eliminar</span></a>  </td>
							</tr>
						<?php
					}
				}
			?>
				<!--<tr>
					<td class="table_check"><input type="checkbox" class="noborder" /></td>
					<td class="table_date">Mayo 5, 2012</td>
					<td class="table_title"><a href="#">Cerro santa lucia </a></td>
					<td><a href="#">Luis Zavala</a></td>
					<td><a href="#"><img src="img/accept.jpg" alt="accepted"/></a><a href="#"><img src="img/cancel.jpg" alt="cancel"/></a><a href="#"><img src="img/folder.jpg" alt="folder"/></a><a href="#"><img src="img/edit.jpg" alt="edit"/></a></td>
					<td><span class="approved">Aceptado</span></td>
				</tr>-->
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
