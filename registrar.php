<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Inicio sesion</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="estilos.css">
		<link rel="icon" type="imgage/png" href="Russia.png" sizes="32x32">
	</head>
	<body>
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
					<style>
						*{
							box-sizing: border-box;
						}

						body{
							margin: 0;
							font-family: sans-serif;
							background: #204862;
						}

						h2 {
							color: #fff;
							text-align: center;
						}

						.form-register{
							width: 95%;
							max-width: 500px;
							margin: auto;
							background: white;
							border-radius: 7px;
						}

						.form-titulo{
							background: deepskyblue;
							color: #fff;
							padding: 20px;
							text-align: center;
							font-weight: 100;
							font-size: 30px;
							border-top-left-radius: 7px;
							border-top-right-radius: 7px;
							border-bottom: 5px solid crimson;
						}

						.contenedor-inputs{
							padding: 10px 30px;
							display: flex;
							flex-wrap: wrap;
							justify-content: space-between;
						}

						input{
							margin-bottom: 15px;
							padding: 15px;
							font-size: 16px;
							border-radius: 3px;
							border: 1px solid darkgray;
						}

						.input-48{
							width: 100%;
						}

						.btn-enviar{
							background: crimson;
							color: #fff;
							margin: auto;
							padding: 10px 40px;
							cursor: pointer;
							font-size: 20px;
						}
						.btn-enviar:active{
							transform: scale(1.05);
						}
						a{
						    color: green; 
						    background-color: transparent; 
						    text-decoration: none;
						}

						.form__link{
							width: 100%;
							margin: 7px;
							text-align: center;
							font-size: 14px;
						}
					</style>
				</head>
				<body>
					<form action="inicio.php" class="form-register">

						<h2 class="form-titulo">Bienvenido</h2>
					 	<div class="contenedor-inputs">
					 		<h1 class="form__link">
					 		 <a id="link" href="index.php">Inicia sesión aquí</a></h1>
					 	</div>
					</form>
				</body>
			';



			// Free resultset
			pg_free_result($result);

			// Closing connection
			pg_close($dbconn);
		?>
	</body>
</html>
