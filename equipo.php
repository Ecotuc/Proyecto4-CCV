<?php
	if(isset($_POST['submit'])){
		$nombre=$_POST['nombre'];
		$grupo=$_POST['grupo'];
		$bandera=$_POST['bandera'];	
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio sesion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estiloequipo.css">
	<link rel="icon" type="imgage/png" href="Russia.png" sizes="32x32">
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="form-register" >

		<h2 class="form-titulo">Login</h2>
	 	<div class="contenedor-inputs">
	 		<input type="text" name="nombre" placeholder="Nombre del equipo" class="input-48">
	 		Bandera <input type="file" name="imagen" accept="image/jpeg, image/png" class="input-48">
	 		Grupo <select>
	 			<option value="A">A</option>
	 			<option value="B">B</option>
	 			<option value="C">C</option>
	 			<option value="D">D</option>
	 			<option value="E">E</option>
	 			<option value="F">F</option>
	 			<option value="G">G</option>
	 			<option value="H">H</option>
	 		</select>
	 		<br><br>
	 		<input type="submit" name="submit" value="Ingresar" class="btn-enviar">
	 		<p class="form__link">¿Aún no tienes una cuenta? <a href="registro.php">Ingresa aquí</a></p>
	 	</div>
	 		<?php include("validar.php");
	 		?>
	</form>
</body>
</html>