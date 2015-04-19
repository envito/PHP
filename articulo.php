<?php
require_once("conexion.php");
$sql="select * from articulos";
$query=mysql_query($sql,$con);

?>

<html>
	<head>
		<title>articulos</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<script language="javascript" type="text/javascript">
			function cambiar(id,color)
			{
				document.getElementById(id).style.backgroundColor=color;
			}
		</script>
	</head>
	<body>
		<h1>Inserción de una linea</h1>
		<h1>Inserción de una segunda línea</h1>
		<table align="center" width="800">
			<tr>
				<td align="center" width="800" valign="top" colspan="4">
				<h3>Art&iacute;culos de mi Sitio Web</h3>
				</td>
			</tr>
			<tr style=" background-color:#666666; color:#FFFFFF; font-weight:bold">

				<td width="200" align="center" valign="top">T&iacute;tulo</td>
				<td width="500" align="center" valign="top">Detalle</td>
				<td width="50" align="center" valign="top">Fecha</td>
				<td width="50" align="center" valign="top">Hora</td>
			</tr>
			<?php
			$i=0;
			while ($reg=mysql_fetch_array($res))
			{
			$i++;
			//$i=$i+1;
			?>
			<tr id="<?php echo "id_$i";?>" style="background-color:#f0f0f0" onmousemove="cambiar('<?php echo "id_$i";?>','#cccccc')" onmouseout="cambiar('<?php echo "id_$i";?>','#f0f0f0')">
				<td width="200" align="center" valign="top"><div align="justify"><?php echo $reg["titulo"];?></div></td>
				<td width="500" align="center" valign="top"><div align="justify"><?php echo $reg["detalle"];?></div></td>
				<td width="50" align="center" valign="top"><?php echo $reg["fecha"];?></td>
				<td width="50" align="center" valign="top"><?php echo $reg["hora"];?></td>
			</tr>
			<?php
			}
			?>
		</table>
		</center>
	</body>
</html>
