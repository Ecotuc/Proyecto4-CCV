<?php
	session_start();
	error_reporting(0);

	$varsesion = $_SESSION['usuario'];

	if($varsesion == null || $varsesion == ''){
		echo 'Debe iniciar sesion para ingresar';
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Quiniela</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="e.css">
	<link rel="icon" type="imgage/png" href="Russia.png" sizes="32x32">
</head>
<body class="fondo">

	<form action="ingresarquiniela.php" method="post" class="form-register" >

		<h2 class="form-titulo">Login</h2>
	 	<div class="contenedor-inputs">
	 		<input type="text" name="usuario" placeholder="Usuario" class="input-48" required>
	 		<input type="password" name="contraseña" placeholder="Contraseña" class="input-48" required>
	 		<input type="submit" name="submit" value="Ingresar" class="btn-enviar" required>
	 		<p class="form__link">¿Aún no tienes una cuenta? <a href="registro.php">Ingresa aquí</a></p>
	 	</div>
	</form>
</body>
</html>