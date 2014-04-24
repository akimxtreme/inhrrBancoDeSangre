<?php
//mysql_connect: Abre una conexión a un servidor MySQL
$conexion=mysql_connect('localhost','root','2006')
or die ("NO SE PUEDE CONECTAR");

//mysql_select_db:Selecciona un base de datos MySQL
mysql_select_db('banco_de_sangre',$conexion);
?>
