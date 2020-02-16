<?php
class User_model extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}

	public function verificarUser($nick, $pass)
	{
		$res = $this->db->get_where(
			'Usuarios',
			array(
				'Nick' => $nick,
				'Password' => $pass
			),
			1
		);

		if (count($res->result()) > 0) {
			return true;
		}

		return false;
	}
}
