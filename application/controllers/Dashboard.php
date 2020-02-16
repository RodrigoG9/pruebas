<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('visita_model');
	}

	public function index()
	{
		$vars = array(
			'scripts' => $this->load->view('layout/scripts', '', true),
			'styles' => $this->load->view('layout/styles', '', true),
			'nav' => $this->load->view('layout/nav-admin', '', true)
		);

		$this->load->view('layout/home/dashboard', $vars);
	}

	public function visitas()
	{
		$visitas = $this->visita_model->consultar();

		$data = array();
		$data2 = array();
		foreach ($visitas as $visita) {
			array_push($data, array(
				'dia' => $visita->dia,
				'cantidad' => $visita->cantidad
			));

			array_push($data2, intval($visita->cantidad));
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json', 'utf-8')
			->set_output(
				json_encode(
					$data2,
					JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
				)
			);
	}
}
