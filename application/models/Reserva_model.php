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
}
