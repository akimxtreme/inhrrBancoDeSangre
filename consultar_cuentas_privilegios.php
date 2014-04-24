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
if($codigo == '1'){
	echo '<html><head><meta http-equiv="REFRESH" content="0; url=index.php"></head></html>';
}
?>
<div class="usuario">
<p class="usuario">Usuario: <?php echo $usuario; ?></p>
<a href="destruir_sesion.php"><p class="usuario">Cerrar sesión</p></a>
</div>
<div class="bs_java_admin"><a class="bs_java_2" href="administracion.php" onclick="pedir_cta_visible(this);">Principal</a></div>
<div class="bs_java_admin"><a class="bs_java_2" href="cuentas_privilegios.php" onclick="pedir_cta_visible(this);">Agregar cuenta</a></div>
<div class="bs_java_admin"><a class="bs_java_2" href="modificar_cuentas_privilegios.php" onclick="pedir_cta_visible(this);">Modificar cuenta</a></div>
<div class="bs_java_admin"><a class="bs_java_2" href="consultar_cuentas_privilegios.php" onclick="pedir_cta_visible(this);">Consultar cuenta</a></div>
<div class="bs_java_admin"><a class="bs_java_2" href="eliminar_cuentas_privilegios.php" onclick="pedir_cta_visible(this);">Eliminar cuenta</a></div>
<h1>Consultas Administrador</h1>

    <form name="busqueda" method="post" action="">
            <select name="campo">
               <option value="usuario">Usuario</option>
               <option value="nombres">Nombre</option>
               <option value="apellidos">Apellido</option>
               <option value="correo">Correo Electrónico</option>
               <option value="telefono">Teléfono</option>
            </select>
            <input type="text" name="valor">
            <input type="submit" name="boton" value="Buscar">
        </form>
        <div class="admin">
			<span class="admin">Usuario</span>
            <span class="admin">Nombre</span>
			<span class="admin">Correo electrónico</span>
			<span class="admin">Tipo de Admin</span>
            </div>
        <?php
		  
		include "config.php";
		if (@$_POST['boton']==='Buscar') { ?>
          
            <?php
			   $valor= $_POST['valor'];
			   $campo= $_POST['campo'];			   
			   $sql="SELECT * FROM usuarios WHERE estatus='3' or estatus='5' and $campo like '%$valor%'";
			   $seleccion=mysql_query($sql,$conexion);
			?>
         
         <?php
         while ($row = mysql_fetch_array($seleccion)){
				$usuario=$row['usuario'];
				$nombres=$row['nombres'];
				$cedula=$row['cedula'];
				$correo=$row['correo'];
				$estatus=$row['estatus'];
				$telefono=$row['telefono'];
				if ($estatus=="3"){
					$estatus="Administrador II (dos)";
					}
				if ($estatus=="5"){
					$estatus="Administrador III (tres)";
					}
				?>
              
             <div class="admin">
<form class="admin" action="datos_solicitador_cta_administrador_consulta.php" method="post" >
<input class="admin" id="ced" type="text" name="ced" disabled="disabled" value="<?php echo $usuario;?>">
<input class="admin" id="" type="text" name="nombre" disabled="disabled" value="<?php echo $nombres;?>">
<input class="admin" id="" type="text" name="nombrebs" disabled="disabled" value="<?php echo $correo;?>" />
<input class="admin" id="" type="text" name="nombrebs" disabled="disabled" value="<?php echo $estatus;?>" />
<input type='hidden' name='ced_1' value='<?php echo $usuario;?>'>
<input class="img" type='image' valign='middle' name='boton_submit'  src='imagenes/detalles.png' alt='Ver detalles' border="0"/>
</form></div>
<?php
}
?>
<?php
			           
}
?>  

<!-- InstanceEndEditable --> </div>
</body>
<!-- InstanceEnd --></html>