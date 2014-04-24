<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantilla_BS.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="imagenes/minilogo.png"/>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Espacio del Administrador del Sistema de Banco de Sangre</title>

<script language="Javascript" type="text/JavaScript">
function abrirVentana(url) {
window.open("datos_solicitador_cta.php", "Detalles de la solicitud", "directories=no, location=no, menubar=no, scrollbars=no, status=no, tittlebar=no, toolbar=no, width=725, height=300, top=50, left=100, resizable=no");
}
 
</script>
<!-- InstanceEndEditable -->
<link href="css/estilos_banco_de_sangre.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="tcal.css">
<script type="text/javascript" src="js/formulario.js"></script>
<script type="text/javascript" src="tcal.js"></script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body class="bs">
<div class="contenedor">
<div class="encabezado"></div>
<!-- InstanceBeginEditable name="contenido" -->
<?php
$usuario =$_SESSION['usuario'];
$codigo = $_SESSION['estatus'];
if($codigo == '1'){
	echo '<html><head><meta http-equiv="REFRESH" content="0; url=index.php"></head></html>';
}
?>
<div class="usuario">
<p class="usuario">Usuario: <?php echo $usuario; ?></p>
<a href="destruir_sesion.php"><p class="usuario">Cerrar sesión</p></a>
</div>
<div class="bs_java_admin"><a class="bs_java_2" href="administracion.php" onclick="pedir_cta_visible(this);">Principal</a></div>
<div class="bs_java_admin"><a class="bs_java_2" href="administracion_solicitud_cta.php" onclick="pedir_cta_visible(this);">Solicitudes de Cuenta</a></div>
<div class="bs_java_admin"><a class="bs_java_2" href="administracion_registradas.php" onclick="pedir_cta_visible(this);">Registradas</a></div>
<div class="bs_java_admin"><a class="bs_java_2" href="administracion_rechazadas.php" onclick="pedir_cta_visible(this);">Rechazadas</a></div>
<div class="bs_java_admin"><a class="bs_java_2" href="administracion_busqueda.php" onclick="pedir_cta_visible(this);">Consultar usuario</a></div>
<h1>Registradas</h1>
<div class="admin">
<span class="admin">C&eacute;dula</span>
<span class="admin">Usuario</span>
<span class="admin">Banco de Sangre</span>
</div>
<?php
include "config.php";
			$estatus="1";
			$sql1="SELECT * FROM usuarios WHERE estatus= '$estatus' ORDER BY cedula  ASC";
			$seleccion=mysql_query($sql1,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
				$usuario=$row['usuario'];
				$nombres=$row['nombres'];
				$cedula=$row['cedula'];
				$correo=$row['correo'];
				$nombrebs=$row['nombrebs'];
				$rif_bs=$row['rif_bs'];
				$nit_bs=$row['nit_bs'];
?>

<div class="admin">
<form class="admin" action="datos_solicitador_cta.php" method="post" >
<input class="admin" id="ced" type="text" name="ced" disabled="disabled" value="<?php echo $cedula;?>">
<input class="admin" id="" type="text" name="nombre" disabled="disabled" value="<?php echo $nombres;?>">
<input class="admin" id="" type="text" name="nombrebs" disabled="disabled" value="<?php echo $nombrebs;?>" />
<input type='hidden' name='ced_1' value='<?php echo $cedula;?>'>
<input class="img" type='image' valign='middle' name='boton_submit'  src='imagenes/detalles.png' alt='Ver detalles' border="0"/>
</form></div>
<?php
}
?>

<!-- InstanceEndEditable --> </div>
</body>
<!-- InstanceEnd --></html>