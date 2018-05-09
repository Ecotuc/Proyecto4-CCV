<?php
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
		if(!empty($grupo)|| !($grupo = 'ERROR')){
			$f3=1;
		}
		if($f1=1 && $f2=1 && $f3=1){
			
		}
	}
?>