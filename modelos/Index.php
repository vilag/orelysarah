<?php

//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Index
{
	public function __construct()
	{

	}

	public function buscar_persona($name_num_inv)
	{

		$sql="SELECT * FROM invitados WHERE nombre LIKE '%".$name_num_inv."%'";
		//return ejecutarConsultaSimpleFila($sql);
		return ejecutarConsulta($sql);			
	}


}
?>

