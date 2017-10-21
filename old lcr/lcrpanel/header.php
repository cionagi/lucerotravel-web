<?php session_start(); ?>
<?php
	if(!isset($_SESSION["usuario"])){
		header("Location: login.php");
	}
	require_once('clases/conexion.php');
	$con = new conexion();
   	$con->Conectar();
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AdminPanel :::Lucero Travel:::</title>
<meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="index,follow" />
	
	<link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
	<link rel="Stylesheet" type="text/css" href="css/smoothness/jquery-ui-1.7.1.custom.css"  />	
	<!--[if IE 7]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection" /><![endif]-->
	<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="screen, projection" /><![endif]-->
	<link rel="stylesheet" type="text/css" href="markitup/skins/markitup/style.css" />
	<link rel="stylesheet" type="text/css" href="markitup/sets/default/style.css" />
	<link rel="stylesheet" type="text/css" href="css/superfish.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/button.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/table_jui.css" media="screen">
	
	<!--[if IE]>
		<style type="text/css">
		  .clearfix {
		    zoom: 1;     /* triggers hasLayout */
		    display: block;     /* resets display for IE/Win */
		    }  /* Only IE can see inside the conditional comment
		    and read this CSS rule. Don't ever use a normal HTML
		    comment inside the CC or it will close prematurely. */
		</style>
	<![endif]-->
	<!-- JavaScript -->
	<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="js/validacion.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.8.20.custom.min.js"></script>
	<script type="text/javascript" src="js/hoverIntent.js"></script>
	<script type="text/javascript" src="js/superfish.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript">
		// initialise plugins
		jQuery(function(){
			jQuery('ul.sf-menu').superfish();
		});

	</script>
	<script type="text/javascript" src="js/excanvas.pack.js"></script>
	<script type="text/javascript" src="js/jquery.flot.pack.js"></script>
	<script type="text/javascript" src="markitup/jquery.markitup.pack.js"></script>
	<script type="text/javascript" src="markitup/sets/default/set.js"></script>
  	<script type="text/javascript" src="js/custom.js"></script>
	<script type="text/javascript" src="js/jquery.dataTables.js"></script>
	<!--[if IE]><script language="javascript" type="text/javascript" src="excanvas.pack.js"></script><![endif]-->
	
	<script type="text/javascript" src="js/tiny_mce/tiny_mce.js"></script>
	<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "exact",
		elements : "contenido-pag",
		theme : "advanced",
		height : "80",
		plugins : "ibrowser,autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
		theme_advanced_buttons3_add : "ibrowser",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
	
	
	
	
</head>

<body>
<div class="container" id="container">



    <div  id="header">
    	<div id="profile_info">
			<img src="img/avatar.jpg" id="avatar" alt="avatar" />
			<p>Bienvenido <strong><?php echo $_SESSION["usuario"]; ?></strong>. <a href="salir.php">Salir?</a></p>
		</div>
		<div id="logo"><h1><a href="/lcrpanel/">Panel Lucero</a></h1></div>
		
    </div><!-- end header -->
	    <div id="content" >
	    <div id="top_menu" class="clearfix">
	    	<ul class="sf-menu"> <!-- DROPDOWN MENU -->
            
		<li class="current"><a href="/lcrpanel/">Inicio Panel</a></li>
			<li class="current">
				
				<a href="excursiones.php">Excurciones</a>
				<ul>
					<li>
						<a href="agregarExcursion.php">Agregar</a>
					</li>
				</ul>
			</li><!--Fin excursiones-->
            
            <li class="current">
				<a href="reservas.php">Reservas</a>
				<ul>
					
				</ul>
			</li><!--Fin reservas-->
            
               <li class="current">
				<a href="ofertas.php">Ofertas</a>
				<ul>
					<li class="current">
						<a href="oferta_agregar.php">Agregar</a>
					</li>
  
				</ul>
			</li><!--Ofertas-->
            
                  <li class="current">
				<a href="galeria.php">Galeria</a>
				<ul>
					<li class="current">
						<a href="galeria_agregar.php">Agregar</a> 
					</li>
				</ul>
			</li><!--Galeria-->
            
              <li class="current">
				<a href="slider.php">Sliderbar</a>
				<ul>
					<li class="current">
						<a href="slider_agregar.php">Agregar</a>
					</li>     
				</ul>
			</li><!--Sliderbar-->
            
              <li class="current">
				<a href="https://app.tinyletter.com/#!/signup" target="_blank" >Subcripciones</a>
			</li><!--Subcripciones-->
            
		<li class="current">
				<a href="agregarUsuario.php">Agregar Administrador</a>
				
		</li>
		
		<li class="current">
			<a href="recepcionistas.php">Recepcionista</a>
		</li>
			
		</ul><!--Fin Del UL-->
			<a href="../" id="visit" class="right">Ir al sitio</a>
	    </div>