<?php 
	$f1=0;
	$f2=0;
	$f3=0;
	$f4=0;
	if(isset($_POST['submit'])){
		if(strlen($usuario) > 20){
			echo '<center> <h4 class=\'error\'> El usuario debe tener como máximo 20 caracteres. </h4></center>';
			die();
		}else if(strlen($usuario) < 6){
			echo '<center> <h4 class=\'error\'> El usuario debe tener como mínimo 6 caracteres. </h4></center>';
			die();
		}else{
			$f1=1;
		}
		if(strlen($nombre) > 20){
			echo '<center> <h4 class=\'error\'> El nombre debe tener como máximo 20 caracteres. </h4></center>';
			die();

		}else if(strlen($nombre) < 2){
			echo '<center> <h4 class=\'error\'> El nombre debe tener como mínimo 6 caracteres. </h4></center>';
			die();
		}else{
			$f2=1;
		}
		if(strlen($apellido) > 20){
			echo '<center> <h4 class=\'error\'> El apellido debe tener como máximo 20 caracteres. </h4></center>';
			die();
		}else if(strlen($apellido) < 2){
			echo '<center> <h4 class=\'error\'> El apellido debe tener como mínimo 6 caracteres. </h4></center>';
			die();
		}else{
			$f3=1;
		}
		if(strlen($contra) > 20){
			echo '<center> <h4 class=\'error\'> La contraseña debe tener como máximo 15 caracteres. </h4></center>';
			die();
		}else if(strlen($contra) < 8){
			echo '<center> <h4 class=\'error\'> La contraseña debe tener como mínimo 8 caracteres. </h4></center>';
			die();
		}else{
			$f4=1;
		}
		
		
	}
?>