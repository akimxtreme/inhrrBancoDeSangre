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

<?php
$codigo = $_SESSION['estatus'];
$usuario =$_SESSION['usuario'];
?>
<div class="usuario">
<p class="usuario">Usuario: <?php echo $usuario; ?></p>
<a href="destruir_sesion.php"><p class="usuario">Cerrar sesión</p></a>
</div>

<?php
switch($codigo){
			case '1': echo '
<div class="bs_java_admin"><a class="bs_java_2" href="#" onclick="pedir_cta_visible(this);">Principal</a></div>
<div class="bs_java_admin"><a class="bs_java_2" href="datos_usuario.php" onclick="pedir_cta_visible(this);">Datos de la Cuenta</a></div>
<div class="bs_java_admin"><a class="bs_java_2" href="formulario_banco_de_sangre_2.php" title="Planilla de Incripción de Bancos de Sangre" onclick="pedir_cta_visible(this);">Planilla de Inscripción</a></div>';break;
			}
?>

<!-- InstanceEndEditable --> </div>
</body>
<!-- InstanceEnd --></html>