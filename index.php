<?php
	if(isset($_POST['submit'])){
		$usuario=$_POST['usuario'];
		$contraseña=$_POST['contraseña'];
		
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio sesion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilos.css">
	<link rel="icon" type="imgage/png" href="Russia.png" sizes="32x32">
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="form-register" >

		<h2 class="form-titulo">Login</h2>
	 	<div class="contenedor-inputs">
	 		<input type="text" name="usuario" placeholder="Usuario" class="input-48">
	 		<input type="password" name="contraseña" placeholder="Contraseña" class="input-48">
	 		<input type="submit" name="submit" value="Ingresar" class="btn-enviar">
	 		<p class="form__link">¿Aún no tienes una cuenta? <a href="registro.php">Ingresa aquí</a></p>
	 	</div>
	 		<?php include("validar.php");
	 		?>
	</form>
</body>
</html>