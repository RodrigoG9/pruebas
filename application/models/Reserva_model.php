<?php
class Reserva_model extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}

	public function crearReserva($nombres, $fecha, $personas)
	{
		$data = array(
			'Nombre_reg' => $nombres,
			'Fecha' => $fecha,
			'Personas' => $personas
		);
		$this->db->select('Fecha');
		$listado = $this->db->get('Registro');
		foreach ($listado->result() as $item) {
			$f = $item->Fecha;
			$f1 = preg_split("/[\s]+/", $f);
			$h1 = preg_split("/[:]+/", $f1[1]);

			$f2 = preg_split("/[\s]+/", $fecha);
			$h2 = preg_split("/[:]+/", $f2[1]);

			if ($f1[0] == $f2[0] && $h1[0] == $h2[0]) {
				$resp = array(
					'estado' => 'error',
					'mensaje' => 'La fecha que eligio no esta disponible'
				);
				return $resp;
			}
		}
		$status = $this->db->insert('Registro', $data);
		if ($status) {
			$rep = array(
				'estado' => 'ok',
				'mensaje' => 'Se ha completado la reserva con exito',
				'data' => $data
			);
			return $rep;
		}
	}

	public function listaReservas($fecha)
	{
		$data = $this->db->get('Registro');
		//$f = preg_split("/[\/]+/", $fecha);
		//$fDia = $f[0];
		//$fMes = $f[1];
		//$fAnio = $f[2];
		$datosEnviar = array();
		foreach ($data->result() as $reserva) {
			$fr = preg_split("/[\s]+/", $reserva->Fecha);
			$fechaReserva = $fr[0];
			//$fdb = preg_split("/[\/]+/", $fechaReserva);
			//
			//$frDia = $fdb[0];
			//$frMes = $fdb[1];
			//$frAnio = $fdb[2];

			if ($fecha == $fechaReserva) {
				array_push($datosEnviar, $reserva);
			}
		}
		//print_r($datosEnviar);
		return $datosEnviar;
	}
}
