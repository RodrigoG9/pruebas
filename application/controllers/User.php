<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('session');
	}

	public function login()
	{
		$nick = $this->input->post('nick');
		$pass = $this->input->post('password');
		$estado = $this->user_model->verificarUser($nick, $pass);

		$this->session->set_userdata(array(
			'nick' => 'Wills',
			'isLogged' => true
		));

		if ($estado) {
			$res = array(
				'estado' => 'ok',
				'mensaje' => "Bienvenido al sistema $nick."
			);
			$this->output
				->set_status_header(200)
				->set_content_type('application/json', 'utf-8')
				->set_output(
					json_encode(
						$res,
						JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
					)
				);
		} else {
			$res = array(
				'estado' => 'error',
				'mensaje' => 'Credenciales de usuario no son validos.'
			);
			$this->output
				->set_status_header(401)
				->set_content_type('application/json', 'utf-8')
				->set_output(
					json_encode(
						$res,
						JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
					)
				);
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('nick', 'isLogged');
		$this->session->sess_destroy();
	}
}
