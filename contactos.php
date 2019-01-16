<!DOCTYPE html>
<!-- CONTACTOS -->
<html lang="es">
	<head>
	<title>Services</title>
	<meta charset ="UTF-8">
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="images/hsc.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/camera.css">	
	<link rel="stylesheet" href="css/contact-form.css">

	<script src="js/jquery.js"></script>
	<!-- <script src="js/jquery-migrate-1.2.1.js"></script> -->
	<!-- <script src='js/camera.js'></script>	-->
	<!-- <script src="js/script.js"></script> -->
    
	 <script src='//maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false'></script> 
	
	<!--[if (gt IE 9)|!(IE)]><!-->
	<script src="js/wow.js"></script>
	<script>
		$(document).ready(function () {
			if ($('html').hasClass('desktop')) {
				new WOW().init();
			}
		});
	</script>


<body class="index-4">

<!--==============================header=================================-->
<header id="header">
	<div id="stuck_container">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<h1><a href="index.html">HSC S.A.</a><span>Health System Consulting</span></h1>
					<nav>
						<ul class="sf-menu">
							<li class="current"><a href="index.html">Inicio</a></li>
							<li><a href="acerca.html">Acerca de</a></li>
							
							<li><a href="#">Productos</a>
							 	<ul>
							      <li><a href="productos.html">Prestadores</li>
							      <li><a href="productos-nemesis.html">Financiadores</li>
							    </ul>
							</li>    

							<li><a href="servicios.html">Servicios</a></li>
							<li><a href="contactos.php">Contactos</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>

<!--=======content================================-->


<section id="content">

		<div class="container">
			<div class="row">
				<div class="grid_5">
					
					<form id="contact-form" method="POST" name="Formulario" action="forms/wcaFm.php" style="display:inline;" class="formulario1">
                    <h2><span>Formulario</span></h2>
                    
                    <INPUT TYPE = "hidden" NAME = "subject" VALUE="Formulario de la web">
					<INPUT TYPE = "hidden" NAME = "redirect" VALUE="http://hsc.com.ar/contactos.php">
					<INPUT name="recipient" type="hidden" id="recipient" value="pgodoy@hsc.com.ar">
					<INPUT name="subject" type="hidden" id="subject" value="Formulario desde hsc.com.ar"> 
                    
                    <fieldset>
						<label>
							<span class="text">Nombre:</span>
							<input type="text" name="Nombre" placeholder="" value="" data-constraints="@Required @JustLetters" />
                            <span class="empty-message">*Este es un campo requerido.</span>	
                            <span class="error-message">*Este es un campo requerido.</span>					
						</label>

						<label>
							<span class="text">Apellido:</span>
							<input type="text" name="Apellido" placeholder="" value="" data-constraints="@Required @Email" />
							<span class="empty-message">*Este es un campo requerido.</span>
							<span class="error-message">*Este es un campo requerido.</span>
						</label>
						
						<label>
							<span class="text">Tel&eacute;fono:</span>
							<input type="text" name="Tel&eacute;fono" placeholder="" value="" data-constraints="@Required" />
							<span class="empty-message">*Este es un campo requerido.</span>
							<span class="error-message">*Este es un campo requerido.</span>
						</label>

						<label>
							<span class="text">Direcci&oacute;n:</span>
							<input type="text" name="Direcci&oacute;n" placeholder="" value="" data-constraints="@Required" />
							<span class="empty-message">*Este es un campo requerido.</span>
							<span class="error-message">*Este es un campo requerido.</span>
						</label>

						<label>
							<span class="text">E-mail:</span>
							<input type="text" name="E-mail" placeholder="" value="" data-constraints="@Required" />
							<span class="empty-message">*Este es un campo requerido.</span>
							<span class="error-message">*Este es un campo requerido.</span>
						</label>

						<label>
							<span class="text">Comentario:</span>
							<textarea name="Mensaje" cols="30" rows="10" placeholder="" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
							<span class="empty-message">*Este es un campo requerido.</span>
							<span class="error-message">*El mensaje es muy corto.</span>
						</label>
					</fieldset>

						<input type="submit" value="Enviar" class="btn">

					</form>
                    <strong><?php echo $msg; ?></strong>

				</div>
                
				<div class="grid_6 preffix_1">
					<div>
						<hader>
							<h2><span>Contacto</span></h2>
						</hader>
						<p class="el-1">
							Si usted tiene cualquier pregunta o comentario con respecto a nuestros PRODUCTOS o SERVICIOS, h&aacute;ganoslo saber a trav&eacute;s de alguno de los contactos enumerados abajo.
						</p><br>
					</div>
					<div class="grid_3 alpha">
						<div class="address">
							<a href="https://maps.google.com/?q=-34.5055523,-58.48607649999997" target="_blank"><img src="images/marcador-de-posicion-azul.png" alt=""><p>HSC S.A. <br>Pelliza 850, Olivos, <br>Buenos Aires, Argentina.</p></a><br>
						</div>
					</div>
					<div class="grid_3">
						<div class="address">
							<a href="tel:+5401140055392"><img src="images/telefono.png" alt=""><p>Telefono:+54 011 4005 5392 <br>FAX:+54 011 4005 5392</p></a><br>
							<img src="images/gmail.png" alt=""><p>E-mail: <a href="mailto:a hsc@hsc.com.ar" class="mail">hsc@hsc.com.ar</a></p><br>
						</div>
					</div>
				</div>
			</div>
		</div>
<!--	</div> Conteiner block 2 -->
</section>

<!--=======footer=================================-->
<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="grid_12 copyright"></div>
		</div>
	</div>
	<div class="footer_bottom"><a href="http://www.hsc.com.ar/" rel="nofollow"><img src="images/footer-logo.png" alt="logo"></a></div>
</footer>

<script type="text/javascript">
	google_api_map_init();
	function google_api_map_init(){
		var map;
		var coordData = new google.maps.LatLng(parseFloat(-34.505552), parseFloat(-58.486076,12));
		var markCoord1 = new google.maps.LatLng(parseFloat(-34.505552), parseFloat(-58.486076));
		var marker;
		
		function initialize() {
			var mapOptions = {
				zoom: 14,
				center: coordData,
				scrollwheel: false,
			}

			var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
			
			marker = new google.maps.Marker({
				map:map,
				position: markCoord1,
			});

			google.maps.event.addDomListener(window, 'resize', function() {
				map.setCenter(coordData);
				var center = map.getCenter();
			});
		}

		google.maps.event.addDomListener(window, "load", initialize); 

	}

</script>
</body>
</html>