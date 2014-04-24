<?php 
session_start();
?>
<?php
include "config.php";
$pd_usuario= $_POST['pd_usuario'];			   
			   $sql="delete from usuarios where usuario='$pd_usuario'";
			   $seleccion=mysql_query($sql,$conexion);
?>
<?php 
?><script>alert("Administrador Eliminado de la Base de Datos");</script><?
echo '<html><head><meta http-equiv="REFRESH" content="0; url=cuentas_privilegios.php"></head></html>';
?>

