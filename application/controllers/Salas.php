<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Salas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('sala_model', 'reserva_model'));
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

	public function mostrarSala($id)
	{
		$sala = $this->sala_model->getSala($id);

		$vars = array(
			'scripts' => $this->load->view('layout/scripts', '', true),
			'styles' => $this->load->view('layout/styles', '', true),
			'data' => $sala
		);

		$this->load->view('layout/home/sala_info', $vars);
	}

	public function reservar()
	{
		$nombres = $this->input->post('nombres');
		$fecha = $this->input->post('fecha');
		$cantidad = $this->input->post('cantidad');

		if (!(empty($nombres) || empty($fecha) || empty($cantidad))) {
			$res = $this->reserva_model->crearReserva($nombres, $fecha, $cantidad);
			if ($res['estado'] == 'error') {
				$this->output
					->set_status_header(400)
					->set_content_type('application/json', 'utf-8')
					->set_output(
						json_encode(
							$res,
							JSON_PRETTY_PRINT |
								JSON_UNESCAPED_UNICODE |
								JSON_UNESCAPED_SLASHES
						)
					);
			}
			if ($res['estado'] == 'ok') {
				$this->output
					->set_status_header(200)
					->set_content_type('application/json', 'utf-8')
					->set_output(
						json_encode(
							$res,
							JSON_PRETTY_PRINT |
								JSON_UNESCAPED_UNICODE |
								JSON_UNESCAPED_SLASHES
						)
					);
			}
		} else {
			$resp = array(
				"status" => "error",
				"mensaje" => "Por favor complete los campos del formulario."
			);
			$this->output
				->set_status_header(400)
				->set_content_type('application/json', 'utf-8')
				->set_output(
					json_encode(
						$resp,
						JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
					)
				);
		}
	}
}
