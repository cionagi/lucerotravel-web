<?php include("header.php"); ?> 

	    <div id="content_main" class="clearfix">
		
            <div class="ocultar-tabla">
                <a class="button normal cyan" href="agregarExcursion.php"><span>Agregar Excursion</span></a>
		<div id="tabledata" class="section">
		<h2 class="ico_mug">Excursiones</h2>
		<table id="table">
			<thead>
			<tr>
				<th>Titulo</th>
				<th>Detalle</th>
				<th>Imagen</th>
				<th>Valor</th>
				<th>Region</th>
				<th>Accion</th>
			</tr>
			</thead>
			<tbody>
			<?php
				include("clases/excursion.class.php");
				$ex = new Excursion();
				$query = $ex->verTodos();
				if(mysql_numrows($query)==0){
				?>
					<tr>
						<td class="advertencia-td" colspan="6">No contiene ninguna excursion</td>
					</tr>
				<?php
				}else{
                                    while($r = mysql_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <td><?php echo $r[1]; ?></td>
                                                <td><?php echo $r[2]; ?></td>
                                                <td class="mostrar_foto"><img src="Imagenes/<?php echo $r[3]; ?>"/></td>
                                                <td><?php echo $r[4]; ?></td>
                                                <td><?php echo $r[7]; ?></td>
                                                <td class="accion-t excursiones_e ">
                                                    <a title="<?php echo $r[1]?>" id="<?php echo $r[0]; ?>"class="button small red enlace" href="#"><span id="<?php echo $r[0]; ?>">eliminar</span></a>
                                                    <a class="button small green boton-editar" href="editar-excursion.php?editar=<?php echo $r[0]; ?>"><span>Editar</span></a>
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
	    </div><!-- ocultar tabla -->
                
            </div><!-- end #panels -->    
	    </div><!-- end #content -->
<?php include("footer.php"); ?> 
