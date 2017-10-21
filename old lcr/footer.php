<footer id="footer">
				<div class="inner">
				
					<div class="one_fourth">
						<!-- <div class="widget_postslist">
							<h3>General Inquiries</h3>
							<p>For all general inquiries about the company, please use the contact form.</p>
						</div> -->
						
						<ul id="menu_pie">
							<h1>Menu</h1>
							<li> <a href="index">Inicio </a></li>
							<li> <a href="nosotros">Nosotros </a></li>
							<li> <a href="servicios">Servicios </a></li>
							<li> <a href="excursiones">Excursiones </a></li>
							<li> <a href="contactos">Contactos</a></li>
								
						</ul>
						
					</div>
					<!-- /- .one_fourth -->
					
					<div class="one_fourth">
						<div class="syswidget">
							
							
							<h3>Sobre Nosotros</h3>
							<p id="pie-p">Ven a Disfrutar de las Maravillas que tiene nuestra ciudad  Santiago de Chile, playa, nieve y los mejores vinos.</p>
						</div>
					</div>
					<!-- /- .one_fourth -->
					
					<div class="one_fourth">
						<div class="syswidget">
							<h3>Galeria</h3>			
							<ul id="galeria-footer">
								<?php
								  include_once("lcrpanel/clases/Galeria.class.php");
								  $g = new Galeria();
								  $query = $g->mostrar_pie();
								  if(mysql_numrows($query)!=0){
								    while($fila = mysql_fetch_array($query)){
								      ?>
												<li><img alt="turismo chile" src="images/galeria/<?php echo $fila[1]; ?>" /></li>	
								      <?php
								    }
								  }else{
												echo "No hay imagenes en la galeria en este momento";
								  }
								?>
							</ul>
						</div>
					</div>
					<!-- /- .one_fourth -->
					
					<div class="one_fourth last">
						<div class="syswidget">
							<h3 class="widget-title">Contacto</h3>
							<p>(56) 02 8802574 <br>
							(56) 02 7490064</p>
							Nota: Pueden contactarnos Nuestro Email: reservas@lucerotravelchile.cl</p>						
						</div>
					</div>
					<!-- /- .one_fourth last -->

				</div>
				<!-- /- .inner(footer) -->
				<img id="tarjeta" class="centrar" height="48px" width="400px" src="images/tarjetas-credito.png"/>
			</footer>
			<!-- /- <footer> -->
			
			<div class="copyright">

				<div class="inner">
					<p>© 2012 Todos los derechos reservados lucerotravel. Diseño de nepix</p>
				</div>
				<!-- /- .inner(copyright) -->
			</div>
			<!-- /- .copyright -->

		</div>
		<!-- /- #wrapper -->

	</div>
	<!-- /- #layout(boxed/stretched) -->

</body>

</html>


<?php
   	$con->Desconectar();
?>