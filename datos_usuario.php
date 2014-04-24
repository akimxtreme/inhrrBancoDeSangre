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
<script type="text/javascript" src="js/formulario.js"></script>
<script language="Javascript" type="text/JavaScript">
function generarPassword(form) {
	var strCaracteresPermitidos = 'a,b,c,d,e,f,g,h,i,j,k,m,n,p,q,r,s,t,u,v,w,x,y,z,1,2,3,4,5,6,7,8,9';
	var strArrayCaracteres = new Array(34);
	strArrayCaracteres = strCaracteresPermitidos.split(',');
	var length = 8, i = 0, j, tmpstr = "";
	do {
		var randscript = -1
		while (randscript < 1 || randscript > strArrayCaracteres.length || isNaN(randscript)) {
			randscript = parseInt(Math.random() * strArrayCaracteres.length)
		}
		j = randscript;
		tmpstr = tmpstr + strArrayCaracteres[j];
		i = i + 1;
	} while (i < length)
	form.txtCampoPassword.value = tmpstr;
}
</script>


<?php
$usuario =$_SESSION['usuario'];
$codigo = $_SESSION['estatus'];
?>
<div class="usuario">
<p class="usuario">Usuario: <?php echo $usuario; ?></p>
<a href="destruir_sesion.php"><p class="usuario">Cerrar sesión</p></a>
</div>
<?php
switch($codigo){
			case '1': echo '
<div class="bs_java_admin"><a class="bs_java_2" href="espacio_usuario.php" onclick="pedir_cta_visible(this);">Principal</a></div>
<div class="bs_java_admin"><a class="bs_java_2" href="datos_usuario.php" onclick="pedir_cta_visible(this);">Datos de la Cuenta</a></div>
<div class="bs_java_admin"><a class="bs_java_2" href="formulario_banco_de_sangre_2.php" title="Planilla de Incripción de Bancos de Sangre" onclick="pedir_cta_visible(this);">Planilla de Inscripción</a></div>';break;
			case '3': echo '<h1>Acceso Denegado</h1>';
	echo '<div class="bs_java"><a class="bs_java_2" href="index.php" onclick="pedir_cta_visible(this);">Volver a principal</a></div>';break;
			case '4': echo '<h1>Acceso Denegado</h1>';
	echo '<div class="bs_java"><a class="bs_java_2" href="index.php" onclick="pedir_cta_visible(this);">Volver a principal</a></div>';break;
			case '5': echo '<h1>Acceso Denegado</h1>';
	echo '<div class="bs_java"><a class="bs_java_2" href="index.php" onclick="pedir_cta_visible(this);">Volver a principal</a></div>';break;
	
}

?>

<?php
include "config.php";
?>

<?php

$sql1 = "SELECT * FROM usuarios WHERE usuario='$usuario'";
$consulta1 = mysql_query($sql1,$conexion);
if(mysql_num_rows($consulta1)>0){
while($campo1 = mysql_fetch_object($consulta1)){
    $cedula=$campo1->cedula;
    $nombres=$campo1->nombres;
	$apellidos=$campo1->apellidos;	
    $usuario=$campo1->usuario;
	$telefono=$campo1->telefono;
	$correo=$campo1->correo;
	$nombrebs=$campo1->nombrebs;
	$rif_bs=$campo1->rif_bs;
	$nit_bs=$campo1->nit_bs;
}	
  $nombres=utf8_encode ($nombres);
  $apellidos= utf8_encode ($apellidos);	
  $usuario=utf8_encode ($usuario);
  $correo=utf8_encode ($correo);
  $nombrebs=utf8_encode ($nombrebs);
	
?>


<h1>Datos de la Cuenta</h1>
<div class="bs_java_3" id="pedir_cuenta">

<form name="actualizar_datos" class="" id="" action="actualizar_datos.php" method="post" onsubmit="return modificar_cta(this);">
<span>
<label class="bs">Nombre(s)</label>
<input class="bs" id="pd_nombre" name="pd_nombre" title="Indicar Nombre(s)" type="text" disabled="disabled"  onfocus="entroEnFoco(this)" value="<?php echo $nombres;?>"/>
</span>

<span>
<label class="bs">Apellido(s)</label>
<input class="bs" id="pd_apellidos" name="pd_apellidos" title="Indicar Apellidos(s)" disabled="disabled" type="text"  onfocus="entroEnFoco(this)" value="<?php echo $apellidos;?>"/>
</span>

<span>
<label class="bs">Cédula Identidad</label>
<input class="bs" id="ced" name="ced" type="text" disabled="disabled"  value="<?php echo $cedula;?>"/>
</span>



<span>
<label class="bs">Correo Electrónico</label>
<input class="bs" id="pd_correo" name="pd_correo" disabled="disabled" type="text"  onfocus="entroEnFoco(this)" value="<?php echo $correo;?>"/>
</span>

<span>
<label class="bs">Usuario</label>
<input class="bs" id="pd_usuario" name="pd_usuario"  type="text" disabled="disabled"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)" value="<?php echo $usuario;?>"/>
</span>

<span>
<label class="bs">Teléfono</label>
<input class="bs" id="pd_telefono" name="pd_telefono" disabled="disabled" type="text" maxlength="12" onkeypress="return permite(event, 'num')"  onfocus="entroEnFoco(this)" value="<?php echo $telefono;?>" />
</span>


<span>
<label class="bs">Nombre del Banco de Sangre</label>
<input class="bs" id="pd_nombre_bs" name="pd_nombre_bs" disabled="disabled" type="text"  onfocus="entroEnFoco(this)" value="<?php echo $nombrebs;?>"/>
</span>

<span>
<label class="bs">Rif del Banco de Sangre</label>
<input class="bs" id="pd_rif" name="pd_rif"  disabled="disabled" type="text"  onfocus="entroEnFoco(this)" value="<?php echo $rif_bs;?>"/>
</span>

<span>
<label class="bs">Nit del Banco de Sangre</label>
<input class="bs" id="pd_nit" name="pd_nit"  disabled="disabled" type="text"  onfocus="entroEnFoco(this)" value="<?php echo $nit_bs;?>"/>
</span>
</form>
</div>
<?
}
?>
<!-- InstanceEndEditable --> </div>
</body>
<!-- InstanceEnd --></html>

