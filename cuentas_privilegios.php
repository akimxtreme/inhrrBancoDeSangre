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
if($codigo!=='4'){
	?><script>alert("No cuenta con suficientes privilegios para ingresar a este espacio");</script><?
	 echo '<h1>Acceso Denegado - Espacio de Administrador Maestro</h1>';
	echo '<div class="bs_java"><a class="bs_java_2" href="index.php" onclick="pedir_cta_visible(this);">Volver a principal</a></div>';
}else{
	echo'<div class="bs_java_admin"><a class="bs_java_2" href="administracion.php" onclick="pedir_cta_visible(this);">Principal</a></div>
<div class="bs_java_admin"><a class="bs_java_2" href="cuentas_privilegios.php" onclick="pedir_cta_visible(this);">Agregar cuenta</a></div>
<div class="bs_java_admin"><a class="bs_java_2" href="modificar_cuentas_privilegios.php" onclick="pedir_cta_visible(this);">Modificar cuenta</a></div>
<div class="bs_java_admin"><a class="bs_java_2" href="consultar_cuentas_privilegios.php" onclick="pedir_cta_visible(this);">Consultar cuenta</a></div>
<div class="bs_java_admin"><a class="bs_java_2" href="eliminar_cuentas_privilegios.php" onclick="pedir_cta_visible(this);">Eliminar cuenta</a></div>
<h1>Agregar Administrador</h1>';
echo '<form method="post" onsubmit="return agregar_cta_admin(this);" action="">
<h3 class="bs_java">Agregar una cuenta de administrador</h3>


<span>
<label class="bs">*Nombres</label>
<input class="bs" id="admin_nombre" name="admin_nombre" title="Indicar Nombre(s)" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this);" />
</span>

<span>
<label class="bs">*Apellidos</label>
<input class="bs" id="admin_apellidos" name="admin_apellidos" title="Indicar Apellidos(s)" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this);"/>
</span>
<span>
<label class="bs">*Correo Electr&oacute;nico</label>
<input class="bs" id="admin_correo" name="admin_correo" title="Indicar la dirección de correo electrónico de contacto para envío de información oficial del Director Médico del Establecimiento" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarEmail(this);"/>
</span>

<span>
<label class="bs">*Usuario</label>
<input class="bs" id="admin_usuario" name="admin_usuario" title="Indicar Nombre(s) y Apellidos completos" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this);"/>
</span>

<span>
<label class="bs">*Tel&eacute;fono</label>
<input class="bs" id="admin_telefono" name="admin_telefono" title="Indique el código de área y teléfono de ubicación del Banco de Sangre" type="text" maxlength="12" onkeypress="return permite(event, "num")"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this);"/>
</span>

<span>
<label class="bs">Contraseña<input type="button" value="Generar" onclick="generarPassword(this.form);">
<!--<input type="text" name="txtCampoLongitud" size="4" value="8">-->
<input class="bs" id="txtCampoPassword" name="txtCampoPassword" type="text" onclick=""/></label>
</span>

<span class="estatus">
<label class="bs">Privilegio</label>
<input  class="estatus" id="estatus_1"  name="estatus" type="radio" value="3" /><p class="radio">Administrador II</p>
<input class="estatus" id="estatus_2" name="estatus" type="radio" value="5" /><p class="radio">Administrador III</p>
</span>

<button class="bs_java" name="boton"  value="Buscar">Agregar Administrador</button>
</form>';
}
?>



 <?php
include "config.php";
if (@$_POST['boton']==='Buscar') {
$admin_nombre=$_POST['admin_nombre'];
 $admin_apellidos=$_POST['admin_apellidos'];
 $admin_correo=$_POST['admin_correo'];
 $admin_usuario=$_POST['admin_usuario'];
 $admin_telefono=$_POST['admin_telefono'];
 $txtCampoPassword=$_POST['txtCampoPassword'];
 $txtCampoPassword = md5 ($txtCampoPassword);
 $estatus=$_POST['estatus'];
 //Mayusculas y minusculas
$admin_nombre = ucwords ($admin_nombre);
$admin_apellidos = ucwords ($admin_apellidos);
$admin_correo = strtolower ($admin_correo);
$pd_usuario = strtolower ($admin_correo);
$admin_usuario = strtolower ($admin_usuario);
//utf8
$admin_nombre = utf8_decode ($admin_nombre);
$admin_apellidos = utf8_decode($admin_apellidos);
$admin_correo = utf8_decode ($admin_correo);
$admin_usuario = utf8_decode ($admin_usuario);
$sql = "SELECT * FROM administradores WHERE usuario='$admin_usuario'";
$q=mysql_query($sql,$conexion);
		$cont=mysql_num_rows($q);
		if($cont>=1){ 
			?><script>alert("Denegado: Usuario en sistema - Intente Nuevamente");</script><?
		}else {
			$sql="INSERT INTO administradores (nombre,apellido,correo,usuario,telefono,contrasenia,estatus) VALUE ('$admin_nombre','$admin_apellidos','$admin_correo','$admin_usuario','$admin_telefono','$txtCampoPassword','$estatus')";
			$ingreso=mysql_query($sql,$conexion);
			?><script>alert("Administrador agregado exitosamente");</script><?
		}

			           
}
?>
<!-- InstanceEndEditable --> </div>
</body>
<!-- InstanceEnd --></html>