<?php
//conectar a la DB
require_once '_db.php';

function destino(){
    $consulta = "SELECT * FROM destino";
	$ejecutarConsulta = mysqli_query($enlace, $consulta);

	while($fila = mysqli_fetch_array($ejecutarConsulta)){
		echo"<option value='".$fila['id']."'>".$fila['destino']."</option>";
	}
}
destino();

?>