<?php
	if(isset($_POST['submit'])){
		$equipo1=$_POST['equipo1'];
		$equipo2=$_POST['equipo2'];
		$hora=$_POST['hora'];	
		$fecha=$_POST['fecha'];
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Ingreso equipo</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilopartido.css">
	<link rel="icon" type="imgage/png" href="Russia.png" sizes="32x32">
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="form-register" >

		<h2 class="form-titulo">Partido</h2>
	 	<div class="contenedor-inputs">
	 		<select>
	 			<?php
	 				$dbconn = pg_connect("host=localhost dbname=Proyecto2 user=postgres password=1030")
    			or die('Could not connect: ' . pg_last_error());

				$query = "SELECT * FROM equipos";
				$result = pg_query($query) or die('Query failed: ' . pg_last_error());

				while($fila = mysqli_fetch_assoc($result)){
        		    $num = $fila['NumCuenta'];
				    $nom = $fila['NombreCuenta'];
            		echo '<option value= "'.$num.'">'.$nom.'</option>';  
        		}
        	mysqli_close($link);
        ?>
	 		</select>
	 		<input type="text" name="nombre" placeholder="Nombre del equipo" class="input-48" required>
	 		Bandera<input type="file" name="imagen" accept="image/jpeg, image/png" class="input-48" required>
	 		<select class="input-48" name="grupo" required>
	 			<option value="" disabled selected>Seleccione un grupo</option>
	 			<option value="A">A</option>
	 			<option value="B">B</option>
	 			<option value="C">C</option>
	 			<option value="D">D</option>
	 			<option value="E">E</option>
	 			<option value="F">F</option>
	 			<option value="G">G</option>
	 			<option value="H">H</option>
	 		</select>
	 		<input type="submit" name="submit" value="Ingresar" class="btn-enviar">
	 	</div>
	 		<?php include("validarequipo.php");
			error_reporting(0);
	 		?>
	</form>
</body>
</html>