<link href="css/estilos_banco_de_sangre.css" rel="stylesheet" type="text/css" />
<?PHP $ParCodUnidad = $_REQUEST["ParCodUnidad"];?>
<span>
<label class="bs">Municipio</label>
<select class="bs" name="ls_producto">
<?
include "config.php";
$sql1="SELECT cod_ciudad,des_ciudad  FROM ciudad WHERE cod_estado='$ParCodUnidad' ORDER BY des_ciudad";
        $hardware= mysql_query($sql1,$conexion);
		if(mysql_num_rows($hardware)>0){
			while($campo1 = mysql_fetch_object($hardware)){
				$codigo=$campo1->cod_ciudad;
				$ciudad=$campo1->des_ciudad;
				echo "<option class='bs_dir' value='$codigo'>$ciudad</option>";
			}
		}else{
			echo "<option class='bs_dir' value='' id='ls_producto'>No hay ciudad</option>";
		}
			?>
</select>
</span>
