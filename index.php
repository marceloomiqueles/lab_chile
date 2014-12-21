<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1" name="viewport">
		<title>Laboratorio Chile</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src='js/script.js'></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript">
			alert($(document).width());
		</script>
	</head>
	<body>
		<div id='home'>
			<div id='menuHead' class='home'>
				<div id='menuInterior'>
					<div class='dentroMenu'>
						<a href="index.php">
							<img class='logo' src="img/logo.png">
						</a>
						<div id='botonMenu'>
							<div id ='menu1' class='boton activo'>
								<a href="#home">
									HOME
								</a>
							</div>
							<div class='boton'>
								·
							</div>
							<div id='menu2' class='boton'>
								<a href="#informacion">
									INFORMACIÓN
								</a>
							</div>
							<div class='boton'>
								·
							</div>
							<div id='menu3' class='boton'>
								<a href="#comunidad">
									COMUNIDAD
								</a>
							</div><!-- 
							<div class='boton'>
								·
							</div>
							<div id='menu4' class='boton'>
								<a href="#contacto">
									CONTACTO
								</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>
			<div id='contenedorBox'>
				<div id='home' class='sliderBox'>&nbsp;</div>
				<div id='informacion' class='cabecera'>
					<div id='menuHead' class='info'>
						<div id='menuInterior'>
							<span>INFORMACIÓN</span>
						</div>
					</div>
					<div class='infoBox greenLight'>
						<div class='imagen caja1'></div>
						<div class='infoTexto'>CONSULTA A TU GINECÓLOGO</div>
						<br>
						<a href="informacion.php#consulta">
							<div class='plusBox'>
								<span>
									+
								</span>
							</div>
							<br>
							<div class='underPlusBox'>VER MÁS</div>
						</a>
					</div>
					<div class='infoBox green'>
						<div class='imagen caja2'></div>
						<div class='infoTexto'>SABÍAS QUE</div>
						<br>
						<a href="informacion.php#sabias">
							<div class='plusBox'>
								<span>
									+
								</span>
							</div>
							<br>
							<div class='underPlusBox'>VER MÁS</div>
						</a>
					</div>
					<div class='infoBox greenLight'>
						<div class='imagen caja3'></div>
						<div class='infoTexto'>¡ES CIERTO!</div>
						<br>
						<a href="informacion.php#cierto">
							<div class='plusBox'>
								<span>
									+
								</span>
							</div>
							<br>
							<div class='underPlusBox'>VER MÁS</div>
						</a>
					</div>
					<div class='infoBox green'>
						<div class='imagen caja4'></div>
						<div class='infoTexto'>REGIMEN EXTENDIDO</div>
						<br>
						<a href="informacion.php#regimen">
							<div class='plusBox'>
								<span>
									+
								</span>
							</div>
							<br>
							<div class='underPlusBox'>VER MÁS</div>
						</a>
					</div>
				</div>
				<div id='comunidad' class='cabecera'>
					<div id='menuHead' class='info'>
						<div id='menuInterior'>
							<span>COMUNIDAD</span>
						</div>
					</div>
					<div class='fbBox cajaSocial'>
						<a href="https://www.facebook.com/pages/Tu-Vida-Tus-Reglas/685693091537927" target='_blank'>
							<div class='logoSocial'>
								<img src="img/logo_fb.png">
								<br>
								<div>/tuvidatusreglas</div>
							</div>
						</a>
					</div>
					<div class='twBox cajaSocial'>
						<a href="https://twitter.com/TuVida_TusRegla" target='_blank'>
							<div class='logoSocial'>
								<img src="img/logo_tw.png">
								<br>
								<div>@tuvidatusreglas</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class='footerBox'>
				<div class='footerInteriorBox'>
					<div class='footerText alineaL redes'>
						<!-- contacto@tuvidatusreglas.cl
						<br>
						+569 831 77 818
						<br>
						<span>facebook / twitter</span> -->
					</div>
				</div>
			</div>
		</div>
	</body>
</html>