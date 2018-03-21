<!DOCTYPE html>
<html lang="es-mx">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Zato Construcciones S.A de C.V</title>
		<link rel="icon" href="img/favicon.ico" />
		<meta name="keywords" content="diseñador grafico,imagen corporativa,logotipos,paginas web,brand design,empresas de publicidad en mexico,empresa publicidad,agencias de publicidad en hermosillo" />
		<meta name="description" content="Empresa dedicada a la proyección y ejecución de obra civil. Cuyo Director General, Ing. David Alonso Zazueta Zazueta, cuenta con más de 35 años de experiencia en el sector.">
		<meta property="og:title" content="GPro - Gabinete de Proyectos" />
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://www.zatoconstrucciones.com/" />
		<meta property="og:image" content="-"/>
		<meta property="og:image:alt" content="Foto de proyecto en desierto"/>
		<meta property="og:description" content="Empresa dedicada a la proyección y ejecución de obra civil. Cuyo Director General, Ing. David Alonso Zazueta Zazueta, cuenta con más de 35 años de experiencia en el sector."/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="css/zato.css">
	</head>
	<body>
		<main>
		<?php include 'inc/header.php';?>

		<section id="contacto" class="container">
			<div class="row">
				<div class="col-12 col-sm-3 px-0">
					<h2 class="titulos text-center">contacto</h2>
				</div>
				<div class="col-12 col-sm-9 px-0 gris">
				</div>
			</div>
			<div class="row animatedParent">
				<div id="mapa" class="col-12 animated fadeIn">
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-12 col-sm-5 animatedParent">
				  	<p class="texto animated fadeIn">Tus comentarios nos ayudan a hacer mejor nuestro servicio. Al mismo tiempo, tienes la oportunidad de contactarnos para más información acerca de nuestros servicios.</p>
				  	<h3 class="titulo mt-2 animated fadeIn">Zato Construcciones S.A. de C.V.</h3>
				  	<address class="texto animated fadeIn">Hernando de Cortéz #2133,<br>Col. Mirasierra<br>Cd. Obregón, Sonora, México<br>CP. 85060</address>
				  	<p class="animated fadeIn"><img class="redes" src="img/tel.svg"> +52 01 (644) 413-14-84<br><img class="redes" src="img/mail.svg"> asistencia@zatoconstrucciones.com</p>
		  		  	<nav class="nav animated fadeIn">
		  		  		<a class="siguenos" href="#">Síguenos en:</a>
						<a class="nav-link" href="https://twitter.com/zatosocialmedia?lang=es" target="_blank"><img class="redes" src="img/t.svg" alt="Icono Twitter"></a>
						<a class="nav-link" href="https://www.facebook.com/ZATO-CONSTRUCCIONES-177691696054409/?fref=ts" target="_blank"><img class="redes" src="img/f.svg" alt="Icono Facebook"></a>
						<a class="nav-link" href="https://www.instagram.com/zatoconst/" target="_blank"><img class="redes" src="img/i.svg" alt="Icono Instagram"></a>
						<a class="nav-link" href="https://www.pinterest.es/zatoconst/" target="_blank"><img class="redes" src="img/p.svg" alt="Icono Pinteres"></a>
					</nav>
				</div>
				<div class="col-12 col-sm-6 offset-sm-1 mt-3 mt-sm-0 mt-md-0 mt-lg-0 animatedParent">
					<h3 class="animated fadeIn">Formulario</h3>
				  	<form class="animated fadeIn" action="https://formspree.io/julian@estudiosherpa.com" method="POST">
				  		<input type="text" name="_gotcha" style="display:none" />
						<div class="form-group">
							<input type="text" class="form-control" id="nombre" name="Nombre" placeholder="Nombre*">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="email" name="_replyto" placeholder="E mail*">
						</div>
						<div class="form-group">
							<input type="number" class="form-control" id="telefono" name="Telefono" placeholder="Teléfono y/o Celular">
						</div>
						<div class="form-group">
							<textarea rows="4" cols="50" class="form-control" id="mensaje" name="Mensaje" placeholder="Mensaje"></textarea>
						</div>
						<p class="txt">Todos los campos con un asterisco ('*') son obligatorios.</p>
						<button type="submit" class="btn btn-primary boton float-right">Enviar</button>
					</form>
				</div>
			</div>
		</section>

		<?php include 'inc/footer.php';?>
		</main>

		<script>
			function initMap() {
				var uluru = {lat: 27.493186, lng: -109.913735};
				var map = new google.maps.Map(document.getElementById('mapa'), {
					zoom: 17,
					center: uluru
				});
				var marker = new google.maps.Marker({
					position: uluru,
					map: map
				});
			}
		</script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANVS_myxJ2lOs0P1tiwLApCRC4x5i8J0o&callback=initMap"></script>

		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="css/animations.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/css3-animate-it/1.0.3/js/css3-animate-it.min.js"></script>
	</body>
</html>