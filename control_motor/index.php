<?php 

	$conexion=mysqli_connect('localhost','admin_1','12345','base_de_datos');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
    
<link rel='stylesheet' href='style3.css'>

 
</head>
<body>
<br>
     <div align='center'>DATOS ADQUIRIDOS DE MYSQL</div><br>
	<table border="1px" align='center' style="text-align:center;" >
		<tr>
			<td>Posicion_angular</td>
			<td>velocidad_angular</td>
			<td>corriente</td>	
		</tr>

		<?php 
		$sql="SELECT * from control_motor";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
	
	
		<td><?php echo $mostrar['Posicion_angular'] ?></td>
	      <td><?php echo $mostrar['velocidad_angular'] ?></td>
			<td><?php echo $mostrar['corriente'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>