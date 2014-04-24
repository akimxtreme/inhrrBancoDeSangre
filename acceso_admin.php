<?php session_start(); ?>


<?php 
$usuario =$_SESSION['usuario'];
	$privilegio = $_SESSION['privilegio'];
	if($privilegio!='0'){
	echo '<html><head><meta http-equiv="REFRESH" content="0; url=acceso.php"></head></html>';
	}

?>