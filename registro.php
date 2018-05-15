<!DOCTYPE html>
<html>
	<head>
			<meta charset="utf-8">
			<title>Registro</title>
			<link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="icon" type="imgage/png" href="Russia.png" sizes="32x32">
	</head>
	<body class="fondo">
		
<?php
	if(isset($_POST['submit'])){
			$nombre=$_POST["Nombre"];
			$apellido=$_POST["Apellido"];
			$contra=$_POST["Contra"];
			$usuario=$_POST["Usuario"];
			$dbconn = pg_connect("host=localhost dbname=Proyecto2 user=postgres password=1030")
    			or die('Could not connect: ' . pg_last_error());


			$query = "INSERT INTO users VALUES ( '$nombre', '$apellido','$contra', 0,'$usuario', 'U')";

			$result = pg_query($query) or die('Query failed: ' . pg_last_error());


			// Free resultset
			pg_free_result($result);

			// Closing connection
			pg_close($dbconn);

			echo '
					<div class="form-register">
						<h2 class="form-titulo">Bienvenido</h2>
					 	<div class="contenedor-inputs">
					 		<h1 class="form__link">
					 		 <a id="link" href="index.php">Inicia sesión aquí</a></h1>
					 	</div>
					 	';include("validar_reg.php");echo'
					</div>
			';


	}else{
		echo'
	 
				<form action="'; echo htmlspecialchars($_SERVER['PHP_SELF']); echo' " method="post" class="form-register">
					<h2 class="form-titulo">Formulario de registro</h2>
				 	<div class="contenedor-inputs">
				 		<input type="text" name="Nombre" placeholder="Nombre" class="input-48" required>
				 		<input type="text" name="Apellido" placeholder="Apellido" class="input-48" required>
				 		<input type="text" name="Usuario" placeholder="Usuario" class="input-48" required>
				 		<input type="password" name="Contra" placeholder="Contraseña" class="input-48" required>
				 		<input type="submit" value="Registrar" name="submit" class="btn-enviar">
				 		<p class="form__link">¿Ya tienes una cuenta? <a href="index.php">Ingresa aquí</a></p>
				 	</div>
				 	';include("validar_reg.php");echo'		
				</form>
		';
	}
?>
	</body>