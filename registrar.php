<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Inicio sesion</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="estilos.css">
		<link rel="icon" type="imgage/png" href="Russia.png" sizes="32x32">
	</head>
	<body class="fondo">
		<?php


			$Nombre=$_POST["Nombre"];
			$Apellido=$_POST["Apellido"];
			$Contra=$_POST["Contra"];
			$Usuario=$_POST["Usuario"];
			$dbconn = pg_connect("host=localhost dbname=Proyecto2 user=postgres password=1030")
    			or die('Could not connect: ' . pg_last_error());


			$query = "INSERT INTO users VALUES ( '$Nombre', '$Apellido','$Contra', 0,'$Usuario', 'U')";

			$result = pg_query($query) or die('Query failed: ' . pg_last_error());
			echo '
				<head>
					<title>Inicio sesion</title>
					<meta charset="utf-8">
					<link rel="icon" type="imgage/png" href="Russia.png" sizes="32x32">
					<link rel="stylesheet" href="estilos.css">
				</head>
				<body class = "fondo">
					<div class="form-register">
						<h2 class="form-titulo">Bienvenido</h2>
					 	<div class="contenedor-inputs">
					 		<h1 class="form__link">
					 		 <a id="link" href="index.php">Inicia sesión aquí</a></h1>
					 	</div>';
						include("validar_reg.php");
					echo'</div>
				</body>
			';



			// Free resultset
			pg_free_result($result);

			// Closing connection
			pg_close($dbconn);
		?>
	</body>
</html>
