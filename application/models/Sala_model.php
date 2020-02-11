<?php
class Sala_model extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}

	public function getSalas()
	{
		$this->db->select(array('id_sa', 'titulo', 'contenido', 'foto_1', 'foto2'));
		$this->db->from('Salas');

		$query = $this->db->get();

		return $query->result();
	}
}
