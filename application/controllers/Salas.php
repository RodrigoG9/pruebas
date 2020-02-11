<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Salas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('sala_model');
	}

	public function index()
	{
		$salas = $this->sala_model->getSalas();

		$vars = array(
			'scripts' => $this->load->view('layout/scripts', '', true),
			'styles' => $this->load->view('layout/styles', '', true),
			'data' => $salas
		);

		$this->load->view('layout/home/salas_page', $vars);
	}
}
