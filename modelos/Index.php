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

	public function listar_grupo($idgrupo)
	{

		$sql="SELECT * FROM invitados WHERE codigo_comp = '$idgrupo'";
		//return ejecutarConsultaSimpleFila($sql);
		return ejecutarConsulta($sql);			
	}

	public function contar_lugares($idgrupo)
	{

		$sql="SELECT count(idinvitados) as cant_personas FROM invitados WHERE codigo_comp = '$idgrupo'";
		return ejecutarConsultaSimpleFila($sql);
		//return ejecutarConsulta($sql);			
	}

	public function listar_grupo_send()
	{

		$sql="SELECT idinvitados ,codigo_comp, tipo_impresion FROM invitados GROUP BY codigo_comp";
		//return ejecutarConsultaSimpleFila($sql);
		return ejecutarConsulta($sql);			
	}


}
?>

