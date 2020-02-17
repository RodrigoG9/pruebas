<?php

use Dompdf\Dompdf;
class Export extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('reserva_model');
	}

	public function index()
	{
		$vars = array(
			'scripts' => $this->load->view('layout/scripts', '', true),
			'styles' => $this->load->view('layout/styles', '', true),
			'nav' => $this->load->view('layout/nav-admin', '', true)
		);
		$this->load->view('layout/home/export_page', $vars);
	}

	public function pdf()
	{
		$fecha = $this->input->get('fecha');

		$dompdf = new Dompdf();
		$listado = $this->reserva_model->listaReservas($fecha);

		$data = array(
			'fecha' => $fecha,
			'reservas' => $listado
		);
		$temp = $this->load->view('exports/pdf_template', $data, true);
		$dompdf->loadHtml($temp);
		$dompdf->setPaper('A4', 'portrait');
		$dompdf->render();
		$dompdf->stream();
	}
}
