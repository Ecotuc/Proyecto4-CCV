<?php 
	if(isset($_POST['submit'])){
		if(strlen($usuario) > 20){
			echo '<center> <h4 class=\'error\'> El usuario debe tener como máximo 20 caracteres. </h4></center>';
		}else if(strlen($usuario) < 6){
			echo '<center> <h4 class=\'error\'> El usuario debe tener como mínimo 6 caracteres. </h4></center>';
		}
		if(strlen($contraseña) > 20){
			echo '<center> <h4 class=\'error\'> La contraseña debe tener como máximo 15 caracteres. </h4></center>';
		}else if(strlen($contraseña) < 8){
			echo '<center> <h4 class=\'error\'> La contraseña debe tener como mínimo 8 caracteres. </h4></center>';
		}
		
		
	}
?>