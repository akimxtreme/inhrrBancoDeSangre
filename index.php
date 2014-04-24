<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantilla_BS.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="imagenes/minilogo.png"/>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Sistema de Inscripción de Bancos de Sangre</title>
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
<!-- SCRITP: REFRESCAR CÓDIGO CAPTCHA --> 
<?php
@session_start();
?>
<script type="text/javascript">
function refresh()
{
    var ran=Math.floor(Math.random()*10);
    var path=document.getElementById("imgsrc").src;
    document.getElementById("imgsrc").src=path+"?rand="+ran;
}
</script>
<!-- INGRESO AL SISTEMA --> 
<div class="bs_java">
<div class="bas_j">

<form action="ingreso_sistema_2.php" method="post" onsubmit="return validar_usuario();">
<span>
<label class="bs">*Usuario</label>
<input class="bs" id="usuario" name="usuario" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_usuario">Ingrese el nombre de usuario</p>
</span>
<span>
<label class="bs">*Contrase&ntilde;a</label>
<input class="bs" id="contrasenia" name="contrasenia" type="password" maxlength="20" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_contrasenia">Ingrese su contraseña</p>
</span>
<button class="bs_java">Ingresar</button>
</form>

</div>

<a class="bs_java" href="#">¿Olvido su Usuario o Contraseña?</a>
</div>
<!-- FORMULARIO PARA SOLICITAR CUENTA --> 
<div class="bs_java_2" id="pedir_cuenta">
<form onsubmit="return global_pedir_cta()" action="solicitud_cuenta.php" method="post" >
<h3 class="bs_java">Formulario de solicitud de cuenta</h3>
<span>
<label class="bs">*Nombres</label>
<input class="bs" id="pd_nombre" name="pd_nombre" title="Indicar Nombre(s)" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_pd_nombre">Ingrese sus nombres</p>
</span>

<span>
<label class="bs">*Apellidos</label>
<input class="bs" id="pd_apellidos" name="pd_apellidos" title="Indicar Apellidos(s)" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_pd_apellidos">Ingrese sus apellidos</p>
</span>

<span class="bs">
<span class="sub_radio"><label class="bs">*C&eacute;dula de Identidad</label></span>
<span class="sub_radio"><input class="radio" id="pd_venezolano"  name="pd_nacionalidad"  title="Seleccione esta opción si es Venezolano" type="radio" value="venezolano" onclick="nacionalidad(this)" /><p class="radio">V</p>
<input class="radio" id="pd_extranjero" name="pd_nacionalidad"  title="Seleccione esta opción si es Extranjero" type="radio" value="extranjero" onclick="nacionalidad(this)" /><p class="radio">E</p></span>
<input class="bs" id="pd_cedula" name="pd_cedula"  value="" title="Reseñar si es Venezolano(a) ó Extranjero(a) y a continuación el número de cédula de identidad" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_pd_cedula">Campo Obligatorio - Ej: V-110000000</p>
</span>


<span>
<label class="bs">*Correo Electr&oacute;nico</label>
<input class="bs" id="pd_correo" name="pd_correo" title="Indicar la dirección de correo electrónico de contacto para envío de información oficial del Director Médico del Establecimiento" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarEmail(this);"/>
<p class="obligatorio" id="pd_correo_obligatorio">Obligatorio - Ej: tu_correo@correo.com</p>
</span>

<span>
<label class="bs">*Usuario</label>
<input class="bs" id="pd_usuario" name="pd_usuario" title="Indicar Nombre(s) y Apellidos completos" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_pd_usuario">Obligatorio - Ej: pperez</p>
</span>

<span>
<label class="bs">*Tel&eacute;fono</label>
<input class="bs" id="pd_telefono" name="pd_telefono" title="Indique el código de área y teléfono de ubicación del Banco de Sangre" type="text" maxlength="12" onkeypress="return permite(event, 'num')"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_pd_telefono">Obligatorio - Ej: 02123330099</p>
</span>


<span>
<label class="bs">*Nombre del Banco de Sangre</label>
<input class="bs" id="pd_nombre_bs" name="pd_nombre_bs" title="Indicar la Universidad o Institución que le otorgó el titulo" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_pd_nombre_bs">Ingrese el nombre del banco de sangre</p>
</span>

<span>
<label class="bs">Rif del Banco de Sangre</label>
<input class="bs" id="pd_rif" name="pd_rif" title="Indicar la especialidad en el área de salud del Director Médico del Establecimiento" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_pd_rif">Campo opcional - Ej: G-20000101-1</p>
</span>

<span>
<label class="bs">Nit del Banco de Sangre</label>
<input class="bs" id="pd_nit" name="pd_nit" title="Indicar el número de Matrícula del registro como profesional en el Ministerio del Poder Popular para la Salud del Director Médico del Establecimiento" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this)"/>
<p class="obligatorio" id="obligatorio_pd_nit">Campo opcional - Ej: J-20000101-1</p>
</span>

<span>
<label class="bs">*Introduzca el Resultado:</label>
<input class="bs" id="number" name="number" title="Ingresa el código que muestra la imagen" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this);"/>
<p class="obligatorio" id="pd_number">Ingrese el resultado de la imagen</p>
</span>
<span>
<img class="captcha" id="imgsrc" src="captcha.php">
<img class="captcha_2" src="imagenes/refresh.gif" onClick="javascript:refresh();">
</span>

<button class="bs_java" onclick="pedir_cta_visible(this);">Solicitar cuenta</button>
</form>
</div>
<!-- SOLICITUD DE CUENTA AQUI --> 
<div class="bs_java"><a class="bs_java_2" href="#" onclick="pedir_cta_visible(this);">Solicita tu cuenta aqu&iacute;...</a></div>
<!-- GUIA: CAMPOOBLIGATORIO --> 
<div class="bs_java"><label class="bs">(*) Campo Obligatorio</label></div>
<!-- InstanceEndEditable --> </div>
</body>
<!-- InstanceEnd --></html>