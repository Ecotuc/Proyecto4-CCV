<?php
	session_start();

	$varsesion = $_SESSION['usuario'];

	if($varsesion == null || $varsesion == ''){
		echo 'Debe iniciar sesion para ingresar';
	}
?>

<!DOCTYPE html>
<head>
	<title>Inicio</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="eb.css">
	<link rel="icon" type="imgage/png" href="Russia.png" sizes="32x32">
</head>
<body class="fondo">
	<div class="xd">
			<div id="header">
				<ul class="nav">
					<li><a href="bienvenido.php">Inicio</a></li>	
					<li>	
						<a>Calendario</a>
						<ul>
							<li>
							<a>Agregar</a>
							<ul>
								<li><a href="Insert_Cuenta.html">Cuentas</a></li>
								<li><a href="Insert_Partida.php">Partidas</a></li>
							</ul>
							</li>
							<li>
								<a>Listar</a>
								<ul>
									<li><a href="Listar_Cuentas.php">Cuentas</a></li>
									<li><a href="Listar_Partidas.php">Partidas</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a>Mi Quiniela</a>
						<ul>
							<li><a href="Libro_Diario.php">Libro Diario</a></li>
							<li><a href="Libro_Mayor.php">Libro Mayor</a></li>
							<li><a href="Balance.php">Balance</a></li>
						</ul>
					</li>
					<li>
						<a>Equipos</a>
					</li>	
				</ul>
			</div>
	</div>
				<h2>Bienvenido: <?php echo $_SESSION['usuario'] ?></h2>
			    <input type="submit" name="submit" value="Ingresar" class="btn-enviar" required><br>
				<a href="cerrarsesion.php">Cerrar sesion</a>
</body>
</html>