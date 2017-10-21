<?php
	include ('lcrpanel/clases/conexion.php');
	$con = new conexion();
	$con->Conectar();
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
    <title><?php parametro_cabecera("titulo_pagina");?> </title>
    <meta name="google-site-verification" content="TWR8y-bEvwd8D93RvDvyvMYZXv7AjYWqo3lu2Yt9pxA" />
    <meta name="keywords" content="<?php variable_key('key')?>"/>
    <meta name="description" content="Agencia dedicada al turismo y transporte via terrestre, encargada de ofrecer servicios de viajes por todo chile." />
    <meta name="title" content="Lucero travel lider en excursiones y turismo a lo largo de todo chile" />
    <meta name="google-translate-customization" content="59570822976c5d02-be80a75038931c15-g525c2b86d46fa1cb-14"></meta>
	
	<title> Lucero Travel - Turismo Chile</title>
	
	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/flexslider.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/prettyPhoto.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/s-menu.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/galeria.css" />
	<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.21.custom.css" rel="stylesheet" />
	<link rel="stylesheet" href="touchTouch/touchTouch.css" />
	<!-- / Stylesheets -->

	<!-- Javascripts -->
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.8.21.custom.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/hoverIntent.js"></script>
	<script type="text/javascript" src="js/superfish.js"></script>
	<script type="text/javascript" src="js/jquery.tools.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/sys_custom.js"></script>
	<script type="text/javascript" src="js/lavalamp.js"></script>
	<script type="text/javascript" src="js/jquery.modal.js"></script>
	<script type="text/javascript" src="js/google.min.js"></script>
	<script src="touchTouch/touchTouch.jquery.js"></script>
	<script src="js/script.js"></script>
	<!-- / Javascripts -->		
	
	<!-- LIGHT -->
	<script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />


	<!-- CSS & Script for for Responsive Layouts -->
	<link rel="stylesheet" type="text/css" media="screen" href="css/responsive.css" />
	<script type="text/javascript" src="js/jquery.mobilemenu.js"></script>
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
	<!-- / CSS & Script for for Responsive Layouts -->

	<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<![endif]-->
	
	<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-33797603-1']);
		_gaq.push(['_trackPageview']);
	      
		(function() {
		  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
      
	</script>
	
	
	</head>
<body>

	<div id="boxed" class="fullwidth">
		<div id="wrapper">

			<header id="header">

				<div class="topbar">
					<div class="inner">

						<ul class="nav">
							
						<!-- GTranslate: http://gtranslate.net/ -->
<a href="#" onclick="doGTranslate('es|en');return false;" title="English" class="gflag nturl" style="background-position:-0px -0px;"><img src="http://joomla-gtranslate.googlecode.com/svn/trunk/mod_gtranslate/tmpl/lang/blank.png" height="32" width="32" alt="English" /></a><a href="#" onclick="doGTranslate('es|pt');return false;" title="Portuguese" class="gflag nturl" style="background-position:-300px -200px;"><img id="brazil" src="images/banderas/br.png" height="35" width="35" alt="Spanish" /></a><a href="#" onclick="doGTranslate('es|es');return false;" title="Spanish" class="gflag nturl" style="background-position:-600px -200px;"><img src="http://joomla-gtranslate.googlecode.com/svn/trunk/mod_gtranslate/tmpl/lang/blank.png" height="32" width="32" alt="Spanish" /></a>

<style type="text/css">
<!--
a.gflag {vertical-align:middle;font-size:32px;padding:1px 0;background-repeat:no-repeat;background-image:url('http://joomla-gtranslate.googlecode.com/svn/trunk/mod_gtranslate/tmpl/lang/32.png');}
a.gflag img {border:0;}
a.gflag:hover {background-image:url('http://joomla-gtranslate.googlecode.com/svn/trunk/mod_gtranslate/tmpl/lang/32a.png');}
-->
</style>

<script type="text/javascript">
/* <![CDATA[ */
if(top.location!=self.location)top.location=self.location;
window['_tipoff']=function(){};window['_tipon']=function(a){};
function doGTranslate(lang_pair) {if(lang_pair.value)lang_pair=lang_pair.value;if(location.hostname!='translate.googleusercontent.com' && lang_pair=='es|es')return;else if(location.hostname=='translate.googleusercontent.com' && lang_pair=='es|es')location.href=unescape(gfg('u'));else if(location.hostname!='translate.googleusercontent.com' && lang_pair!='es|es')location.href='http://translate.google.com/translate?client=tmpg&hl=en&langpair='+lang_pair+'&u='+escape(location.href);else location.href='http://translate.google.com/translate?client=tmpg&hl=en&langpair='+lang_pair+'&u='+unescape(gfg('u'));}
function gfg(name) {name=name.replace(/[[]/,"\[").replace(/[]]/,"\]");var regexS="[?&]"+name+"=([^&#]*)";var regex=new RegExp(regexS);var results=regex.exec(location.href);if(results==null)return "";return results[1];}
/* ]]> */
</script>
<script type="text/javascript" src="http://joomla-gtranslate.googlecode.com/svn/trunk/gt_update_notes0.js"></script>

                        
                        
						</ul>
						<!-- /- .nav -->

						
						<!-- /- .atpsocials -->

					</div>
					<!-- /- .inner -->
				</div>
				<!-- /- .topbar -->

				<div id="head">

					<div class="logo">
						<a href="index.php"><img src="images/logo.png"></a>
					</div>
					<!-- /- .logo -->

					<nav>
						
						<div class="lavalamp cyan">
							<ul >
								<li class="active"><a href="/">Inicio</a></li>
								<li><a href="nosotros">Nosotros</a></li>
								<li><a href="servicios">Servicios</a></li>
                                                                <li><a href="excursiones">Excursiones</a></li>
                                                                    
								<?php
									include_once("lcrpanel/clases/Galeria.class.php");
									$galeria = new Galeria();
									$query = $galeria->mostrar();
									if(mysql_numrows($query)!=0){
										?>
										<li><a href="galeria">Galeria</a></li>
										<?php
									}
								?>
								<li><a href="contacto">Contacto</a></li>
							</ul>
							    <div class="floatr"></div>
						</div>
						
						<!-- /- .menu -->
					</nav>

				</div>
				<!-- /- #head -->	
			</header>
			<!-- /- <header> -->			
