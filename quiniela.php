<?php
	session_start();

	$varsesion = $_SESSION['usuario'];

	if($varsesion == null || $varsesion == ''){
		echo 'Debe iniciar sesion para ingresar';
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio sesion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="e.css">
	<link rel="icon" type="imgage/png" href="Russia.png" sizes="32x32">
</head>
<body class="fondo">

	<form action="validar_quiniela.php" method="post" class="form-register" >

		<h2 class="form-titulo">Tu predicción</h2>
	 	<div class="contenedor-inputs">

	 		<?php

			$e1=$_GET['equipo1'];
			$e2=$_GET['equipo2'];
			$id=$_GET['id'];
			$usuario=$_GET['usuario'];

			$dbconn = pg_connect("host=localhost dbname=ProyectoCC user=postgres password=1998")
    			or die('Could not connect: ' . pg_last_error());
			
			$query2 = "SELECT * FROM quiniela WHERE '$usuario'=usuario AND '$id'=idpartido";

			$resultado2 = pg_query($query2) or die('Query failed: ' . pg_last_error());

			$rows = pg_num_rows($result);

			if($rows>0){
			    echo $e1;
    			echo "<input type=number name=golese1 value=$rows[2]>";
    			echo $e2;
    			echo "<input type=number name=golese2 value=$rows[3]>";
    		} else {
    			echo $e1;
    			echo "<input type=number name=golese1 value=0>";
    			echo $e2;
    			echo "<input type=number name=golese2 value=0>";
    		}

    			

			?>
	 	</div>
	</form>
</body>
</html>