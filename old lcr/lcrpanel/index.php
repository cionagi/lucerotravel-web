<?php include("header.php"); ?> 

		<div id="content_main" class="clearfix">
			<div id="main_panel_container" class="left">

			<!--<div id="shortcuts" class="clearfix">
				<h2 class="ico_mug">Panel de accesos directos</h2>
				<ul>
					<li class="first_li"><a href=""><img src="img/theme.jpg" alt="themes" /><span>Historial de reserva</span></a></li>
					<li><a href=""><img src="img/statistic.jpg" alt="statistics" /><span>Contador de visitas</span></a></li>
					<li><a href=""><img src="img/ftp.jpg" alt="FTP" /><span>Excursion</span></a></li>
					<li><a href=""><img src="img/users.jpg" alt="Users" /><span>Enviar Email</span></a></li>
					<li><a href=""><img src="img/comments.jpg" alt="Comments" /><span>Ultimos post</span></a></li>
					<li><a href=""><img src="img/gallery.jpg" alt="Gallery" /><span>Crear album</span></a></li>
                    <li><a href=""><img src="img/gallery.jpg" alt="Gallery" /><span>Cerrar sesion</span></a></li>
					<li></li>
					
				</ul>
			</div><!-- end #shortcuts -->
			
			<?php
				include("clases/informes.class.php");
				$info = new Informes();
			?>			
			
			<table id="graficos">
				<caption>Ranking Excursiones</caption>
				<thead>
					<tr>
						<td></td>
						<?php
						$query = $info->Grafico();
						while($rows = mysql_fetch_array($query)){ ?>
							<th scope="col"><?php echo $rows['nombre_excursion']; ?></th>
						<?php }?>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php
						$query = $info->Grafico();
						while($rows = mysql_fetch_array($query)){ ?>
							<td><?php echo $rows['contador']; ?></td>
						<?php }?>
					</tr>		
				</tbody>
			</table>
			
			
			</div>
			<div id="sidebar" class="right">
				<h2 class="ico_mug">Menu</h2>
			<ul id="menu">
				<li>
					<a href="#" class="ico_page">Excursiones</a>
					<ul>
						<li><a href="#">Agregar</a></li>
					</ul>
                    <a href="#" class="ico_page">Reservas</a>
					<ul>
						<li><a href="#">Historial de reserva</a></li>
						
					</ul>
                    <a href="#" class="ico_settings">Ofertas</a>
					<ul>
						<li><a href="#">Agregar</a></li>
						
					</ul>
					<a href="#" class="ico_posts">Galeria</a>
					<ul>
						<li><a href="#">Agregar Foto</a></li>
					</ul>
					<a href="#" class="ico_posts">SliderBar</a>
					<ul>
						<li><a href="#">Agregar </a></li>
					</ul>
					
					<a href="#" class="ico_user">Subcripciones</a>
					<ul>
						<li><a href="#">Ver subcripciones</a></li>
						<li><a href="#">Enviar Noticias</a></li>
					</ul>
                  
				</li>
		
				
			</ul>

			</div><!-- end #sidebar -->
		</div><!-- end #content_main -->
		
		<div id="tabledata" class="section">
			<h2 class="ico_mug">Ultimas 5 reservas</h2>
		<table id="table">
			<thead>
			<tr>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Email</th>
				<th>Hotel</th>
				<th>Habitacion</th>
				<th>N Pasajeros</th>
				<th>Excursion</th>
				<th>Monto</th>
				<th>Comentarios</th>
			</tr>
			</thead>
			<tbody>
			<?php
				include("clases/Reserva.class.php");
				$reserva = new Reserva();
				$query = $reserva->Mostrar();
				if(mysql_numrows($query)==0){
				?>
					<tr>
						<td class="advertencia-td" colspan="9">No contiene ninguna reserva</td>
					</tr>
				<?php
				}else{
					while($fila = mysql_fetch_array($query)){
						?>
							<tr id="reservas-index">
								<td><?php echo $fila[1]; ?></td>
								<td><?php echo $fila[2]; ?></td>
								<td><?php echo $fila[3]; ?></td>
								<td><?php echo $fila[5]; ?></td>
								<td><?php echo $fila[8]; ?></td>
								<td><?php echo $fila[4]; ?></td>
								<td><?php echo $fila[9]; ?></td>
								<td><?php echo "$".$fila[6]; ?></td>
								<td class="ver-comentarios"><a id="<?php echo $fila[0]; ?>" class="button small brown enlace" href="#"><span>Ver Comentarios</span></a></td>
							</tr>
						<?php
					}
				}
			?>
			</tbody>
		</table>
			
		</div> 		
		<div id="panels" class="clearfix">
			<div class="panel photo left">
				<h2 class="ico_mug">Mis Imagenes</h2>
				<ul class="clearfix">
				<?php
				include("clases/Galeria.class.php");
				$g = new Galeria();
				$query = $g->mostrar_galeria();
				if(mysql_numrows($query)==0){
					
				}else{
					while($fila = mysql_fetch_array($query)){
						?>
						<li><img width="80px" height="80px" src="../images/galeria/<?php echo $fila[1]; ?>" alt="photo"/></li>
						<?php
					}
				}
				?>
				</ul>
				
				
	
			</div><!-- end #photo -->
			<div class="panel todo left">
				<h2 class="ico_mug">Ultimos Subcriptores</h2>
			<ul>	
			<?php
			include("clases/subscriptores.class.php");
			$sub = new Subcriptores();
			$query = $sub->mostrar();
			if(mysql_numrows($query)==0){
				
			}else{
				while($fila = mysql_fetch_array($query)){
					?>
					<li class="even">
						<?php echo $fila[0]; ?>
					</li>
					<?php
				}
			}
			?>
			</ul>
			
			</div><!-- end #todo -->
			<div class="panel calendar left">
				<h2 class="ico_mug">Calendario</h2>
				<div id="datepicker"></div>
				
			</div><!-- end #calendar -->
		</div><!-- end #panels -->
		
	    </div><!-- end #content -->
	
	
	<script type="text/javascript" src="http://filamentgroup.github.com/EnhanceJS/enhance.js"></script>		
	<script type="text/javascript">
		// Run capabilities test
		enhance({
			loadScripts: [
				'js/excanvas.js',
				'https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js',
				'js/visualize.jQuery.js',
				'js/example.js'
			],
			loadStyles: [
				'css/visualize.css',
				'css/visualize-light.css'
			]	
		});   
    </script>
		   
<?php include("footer.php"); ?> 

