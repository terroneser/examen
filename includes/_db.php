<?php
	$servidor="localhost";
	$usuario="root";
	$clave="";
	$baseDedatos="examen";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDedatos);

	if(!$enlace){
		echo"Error en la conexion con el servidor";
	}

	$consulta = "SELECT * FROM destino";
	$ejecutarConsulta = mysqli_query($enlace, $consulta);

	while($fila = mysqli_fetch_array($ejecutarConsulta)){
		echo"<option value='".$fila['id']."'>".$fila['destino']."</option>";
	}
?>