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

		$sql="SELECT

		a.idinvitados,
		a.nombre,
		a.parentesco,
		a.adulto_nino,
		a.tipo_impresion,
		a.codigo_comp,
		a.confirmacion,
		a.clave,
		a.posicion,
		(SELECT tipo_impresion FROM invitados WHERE codigo_comp = a.codigo_comp AND tipo_impresion<>'') as codigo_compg
		
		FROM invitados a";
		//return ejecutarConsultaSimpleFila($sql);
		return ejecutarConsulta($sql);			
	}


}
?>

