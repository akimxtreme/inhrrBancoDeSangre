<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<form name="form1" method="post" action="formulario.php">
<div align="center">
<input name="Submit" type="submit" value="espalda"></div>
</form>
<div align="center">
<?php
@session_start();
$key=$_SESSION['result'];
$imag = $_POST['number'];
//echo "$key=======$imag";
if($imag==$key)			
{
   echo ("Éxito de Verificación de");
}
else{
      echo "Ha introducido el código de verificación mal! <br>
Por favor, regrese y entrar en el valor adecuado.";}
?>
</div>
