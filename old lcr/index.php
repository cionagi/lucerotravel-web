<?php
include_once('librerias/global.php');
$titulo_pagina = "Lucero Travel Chile";
$key = "Chile, Turismo, Tours, Excursiones, Puerto Varas, Santiago, San Pedro de Atacama, Viña del Mar, Lagos y Volcanes, City tour, Nieve, Valle Nevado, Portillo, Viñedos, Viñas, Wine, Neruda, Concha y Toro, Volcanes, Volcán Osorno, Lago todos los santos, Ecoturismo, Tatio, Valle de la Luna, Ofertas, Buses, Arriendo, Transporte, Pasajeros, Giras, turismo chile,excursiones,viajes,hoteles,hotel,transporte,turismos chile,turismo santiago,turismo viña,travel, alojamiento,transfers,chile turismo, brasil,turismo brasil, chile turismo, brasil,chile,hospedaje santiago,hospedaje";

include("header.php");
?> 
        <div id="featured_slider">
				<div class="slider_wrapper">

				<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
				<script type="text/javascript" charset="utf-8">
					$(window).load(function() {
						$('.flexslider').flexslider();
					});
				</script>
				<!-- /- <script> -->

					<div class="flexslider">
						<ul class="slides">

						<li>
                                                <?php
                                                    include("lcrpanel/clases/slider.class.php");
                                                    $slider = new slider();
                                                    $query = $slider->mostrar();
                                                    if(mysql_numrows($query)!=0){
                                                        while($rows = mysql_fetch_array($query)){
                                                            $imagen = $rows[1];
                                                          ?>
                                                                <li>
                                                                        <img src="images/slider/<?php echo $rows[1]; ?>"  />
                                                                        <div class="flex-caption">
                                                                        <div class="flex-title"><?php echo $rows[2] ?></div>
                                                                                <?php echo $rows[3]; ?>
                                                                        </div>
                                                                </li>
                                                          <?php
                                                        }
                                                    }
                                                ?>							
							
							<!-- / slide item -->
								<?php if(isset($imagen)){ ?><img src="images/slider/<?php echo $imagen. '" />'; }?>
								<!--<div class="flex-caption">
									<div class="flex-title">Santiago</div>
									Exclusiva wea pa santiago.
								</div>-->
								
								
							</li>
							<!-- / slide item -->
						
						</ul>
					</div>
					<!-- /- .flexslider -->

				</div>
				<!-- /- .slider_wrapper -->
			</div>
			<!-- /- #featured_slider -->
			
                    
                        <div id="contenido">
                            <div class="s"> </div>
			    
                            <?php include("mostrarExcursiones.php"); ?>
                           
                           
                           
                           
                           <div class="clear"></div>
                           
			   <div class="publicidad">
						<!--<img src="images/publicidad/f1.jpg"/>
						<img src="images/publicidad/f2.jpg"/>-->
			   </div>
			   
                           <!-- Cierra ofertas -->
                           <!--<div class="parrafo" id="fuente_pagina">
                                 <h2>Arriendo Departamento</h2>
                            Departamentos en pleno centro de Santiago a pasos de palacio de gobierno, plaza de armas, mercado central y metro. Para mayor información contáctenos <a href="http://lucerotravelchile.cl/contacto">Aquí</a>.
			    
			    <div class="depto_galeria">
						<a href="images/depto/1.jpg"><img alt="turismo" width="120" height="120" src="images/depto/1.jpg"/></a>
						<a href="images/depto/2.jpg"><img alt="turismo" width="120" height="120" src="images/depto/2.jpg"/></a>
						<a href="images/depto/3.jpg"><img alt="turismo" width="120" height="120" src="images/depto/3.jpg"/></a>
						<a href="images/depto/4.jpg"><img alt="turismo" width="120" height="120" src="images/depto/4.jpg"/></a>
			    </div>
                           </div>-->
                           
                           
                            
                        </div>
                        
                        <?php include("tabla.php"); ?>
			<div class="clear"></div>
			
<?php include("footer.php"); ?>