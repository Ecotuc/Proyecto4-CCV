<?php
	$f1=0;
	$f2=0;
	$f3=0; 
	if(isset($_POST['submit'])){
		if(!empty($nombre)){
			$f1=1;
		}else{
			echo'Error en el nombre <br>';
		}
		if(!empty($imagen)){
			$f2=1;
		}else{
			echo'Error en la imagen <br>';
		}
		if(!empty($grupo)&!($grupo = 'error')){
			$f3=1;
		}else{
			echo'Error en el grupo<br>';
		}
		if($f1=1 && $f2=1 && $f3=1){
			
		}
	}
?>