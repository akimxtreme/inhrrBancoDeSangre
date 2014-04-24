<?php
//include: reutilizar porciones de código (script, o simple html) - incluye y evalúa el archivo especificado
include "config.php";
$nombre= $_POST['nombre'];
$sector= $_POST['sector'];
$nro_registro_sanitario= $_POST['nro_registro_sanitario'];
$direccion= $_POST['direccion'];
$rif= $_POST['rif'];
$nit= $_POST['nit'];
$telefono= $_POST['telefono'];
$fax= $_POST['fax'];
$correo_electronico= $_POST['correo_electronico'];
$pagina_web= $_POST['pagina_web'];
$tipo_situacion= $_POST['tipo_situacion'];
$inmueble= $_POST['inmueble'];

$nombre = strtoupper ($nombre);
$sector = strtoupper ($sector);
$nro_registro_sanitario = strtoupper ($nro_registro_sanitario);
$direccion = strtoupper ($direccion);
$rif = strtoupper ($rif);
$nit = strtoupper ($nit);
$telefono = strtoupper ($telefono);
$fax = strtoupper ($fax);
$correo_electronico = strtoupper ($correo_electronico);
$pagina_web = strtoupper ($pagina_web);
$tipo_situacion = strtoupper ($tipo_situacion);
$inmueble = strtoupper ($inmueble);

