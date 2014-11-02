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
		<center>
			<div id="main">
				<div id="cabecera">
					<h3>Art&iacute;culos de la web</h3>
				</div>
				<div id="contenedor">
				
					<div class="contenidos" style="background-color:#666666; color:#FFFFFF; font-weight:bold">
				        <div id="columna1">Titulo</div>
				        <div id="columna2">Detalle</div>
				        <div id="columna3">Fecha</div>
				        <div id="columna4">Hora</div>
				    </div>
				    <?php 
				    $i=0;
						while($register=mysql_fetch_array($query))
						{	
					$i=$i++;
					?>
				    <div class="contenidos" id="<?php echo "id_$i"; ?>" style="background-color:#f0f0f0" onmousemove="cambiar('<?php echo "id_$i";?>','#cccccc')" onmouseout="cambiar('<?php echo "id_$i";?>','#f0f0f0')">
				        <div id="columna1"><?php echo $register["titulo"]; ?></div>
				        <div id="columna2"><?php echo $register["detalle"]; ?></div>
				        <div id="columna3"><?php echo $register["fecha"]; ?></div>
				        <div id="columna4"><?php echo $register["hora"]; ?></div>
				    </div>

				<?php
					}
				?>
				</div>
			</div>
		</center>
	</body>
</html>