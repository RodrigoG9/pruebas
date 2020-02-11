<?php
class Sala_model extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}

	public function getSalas()
	{
		$this->db->select(array('id_sa', 'titulo', 'foto_1'));
		$this->db->from('Salas');

		$query = $this->db->get();

		return $query->result();
	}

	public function getSala($id)
	{
		$data = $this->db->get_where('Salas', array('id_sa' => $id), 1);
		return $data->result();
	}
}
