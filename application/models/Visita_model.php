<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Visita_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function registrarVisita($dia)
	{
		// Pregunto si la variable counte existe
		if (!isset($_COOKIE['counte'])) {
			// Los campos a registrar
			$this->dia = $dia;
			$this->direccionip = $_SERVER['REMOTE_ADDR']; // direccionip
			$this->direccionip4 = ip2long($_SERVER['REMOTE_ADDR']); // direccionip4

			$this->db->insert('visitas', $this);
		}

		setcookie('counte', 1, time() + 3700);

		// Realizo una query a la la tabla visitas
	}

	public function consultar()
	{
		$consulta = $this->db->query(
			'SELECT dia,count(*) as cantidad from visitas group by dia'
		);
		$res = $consulta->result(); // retorna los resultados de la tabla visitas

		return $res;
	}
}
