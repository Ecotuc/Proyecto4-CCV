<!DOCTYPE html>
<html lang="es">
<head>
	<title>Ingreso equipo</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estiloequipo.css">
	<link rel="icon" type="imgage/png" href="Russia.png" sizes="32x32">
</head>
<body>
	<?php
		$nombre=$_POST["nombre"];
		$imagen=file_get_contents($_FILES["imagen"]["tmp_name"]);
		$grupo=$_POST["grupo"];

		$escaped = pg_escape_bytea($imagen);

		$f1=0;
		$f2=0;
		$f3=0; 
		if(isset($_POST['submit'])){
			if(!empty($nombre)){
				$f1=1;
			}
			if(!empty($imagen)){
				$f2=1;
			}
			if(!empty($grupo)){
				$f3=1;
			}
			if($f1=1 && $f2=1 && $f3=1){
				$dbconn = pg_connect("host=localhost dbname=ProyectoCC user=postgres password=1998")
    			or die('Could not connect: ' . pg_last_error()); 


				$query = "INSERT INTO equipos VALUES ( '$nombre', '$escaped','$grupo', 0, 0, 0)";

				$result = pg_query($query) or die('Query failed: ' . pg_last_error());

				if($result){
					header("Location:bienvenido.php");
				} else {
					echo "No se pudo ingresar";
					header("Location:bienvenido.php");
				}

				pg_free_result($result);



				pg_close($dbconn);
			}
		}
	?>
</body>
</html>
