<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin | Terraza</title>
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/estilos.css">

	<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Share+Tech' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php include('header-admin.php'); ?>
	<?php include('buscador-admin.php'); ?>
	<div class="message_error">
		Qué deseas publicar?
	</div>
	<div class="nav_admin">
			<ul>

				<!-- <li>
					<a href="#">Inicio</a>
				</li> -->

				<li>
					<a href="alta.php" class="inmuebles">Inmuebles</a>
					
				</li>

				<li>
				<!-- se puede usar <li id ="propiedades">  para destacar  -->
					<a href="altaNoticia.php" class="noticias">Noticias</a>
					
				</li>

			</ul>

	</div>


	
</body>
</html>
