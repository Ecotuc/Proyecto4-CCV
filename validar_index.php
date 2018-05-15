<?php 

	session_start();
	error_reporting(0);

	$usuario=$_POST['usuario'];
	$_SESSION['usuario'] = $usuario;
	$contraseña=$_POST['contraseña'];

	$f1=0;
	$f2=0;

	if(isset($_POST['submit'])){
		if(!empty($usuario)){
			$f1=1;
		}
		if(!empty($contraseña)){
			$f2=1;
		}
		if(($f1==1)&&($f2==1)){
			$dbconn = pg_connect("host=localhost dbname=Proyecto2 user=postgres password=1030")
				or die('Could not connect: ' . pg_last_error());
				
			$query = "SELECT * FROM users WHERE '$usuario'=usuario AND '$contraseña'=pswrd";
			$result = pg_query($dbconn, $query) or die('Query failed: ' . pg_last_error());

			$rows = pg_num_rows($result);

			if($rows>0){
				header("location:bienvenido.php");
			} else {
				header("location:index.php");
				echo "Contraseña o usuario incorrecto";
			}

			pg_free_result($result);
			pg_close($dbconn);

		}
	}
?>