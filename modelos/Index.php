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

	public function listar_grupo_send($estatus)
	{
		if ($estatus==0) {
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
			a.inv_enviada,
			(SELECT tipo_impresion FROM invitados WHERE codigo_comp = a.codigo_comp AND tipo_impresion<>'') as codigo_compg,
			(SELECT count(inv_enviada) FROM invitados WHERE codigo_comp = a.codigo_comp AND inv_enviada=1) as inv_grupo
			
			FROM invitados a";
			return ejecutarConsulta($sql);
		}

		if ($estatus==1) {
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
			a.inv_enviada,
			(SELECT tipo_impresion FROM invitados WHERE codigo_comp = a.codigo_comp AND tipo_impresion<>'') as codigo_compg,
			(SELECT count(inv_enviada) FROM invitados WHERE codigo_comp = a.codigo_comp AND inv_enviada=1) as inv_grupo
			
			FROM invitados a WHERE inv_enviada=1";
			return ejecutarConsulta($sql);
		}

		if ($estatus==2) {
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
			a.inv_enviada,
			(SELECT tipo_impresion FROM invitados WHERE codigo_comp = a.codigo_comp AND tipo_impresion<>'') as codigo_compg,
			(SELECT count(inv_enviada) FROM invitados WHERE codigo_comp = a.codigo_comp AND inv_enviada=1) as inv_grupo
			
			FROM invitados a WHERE a.inv_enviada=0 AND a.confirmacion=0";
			return ejecutarConsulta($sql);
		}
		

					
	}

	public function listar_grupo_send_buscar($estatus,$buscar)
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
			a.inv_enviada,
			(SELECT tipo_impresion FROM invitados WHERE codigo_comp = a.codigo_comp AND tipo_impresion<>'') as codigo_compg
			
			FROM invitados a WHERE (a.nombre LIKE '%".$buscar."%') OR (a.codigo_comp LIKE '%".$buscar."%')";
			return ejecutarConsulta($sql);
	
					
	}

	public function marcar_enviado($idinvitados)
	{

		$sql="UPDATE invitados SET inv_enviada = 1 WHERE idinvitados='$idinvitados'";
		//return ejecutarConsultaSimpleFila($sql);
		return ejecutarConsulta($sql);			
	}

	public function update_nombre($idinvitados, $nombre)
	{

		$sql="UPDATE invitados SET nombre = '$nombre' WHERE idinvitados='$idinvitados'";
		//return ejecutarConsultaSimpleFila($sql);
		return ejecutarConsulta($sql);			
	}


}
?>

