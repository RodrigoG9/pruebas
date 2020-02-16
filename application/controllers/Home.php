<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('visita_model');
	}

	public function index()
	{
		//Registro de visitas
		$hoy = getdate();
		$dia = $hoy['wday'];
		$this->visita_model->registrarVisita($dia);

		$vars = array(
			'scripts' => $this->load->view('layout/scripts', '', true),
			'styles' => $this->load->view('layout/styles', '', true),
			'nav' => $this->load->view('layout/nav', '', true)
		);

		$this->load->view('layout/home/index_page', $vars);
	}
}
