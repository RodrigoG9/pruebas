<?php

use Dompdf\Dompdf;
class Export extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
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
		$dompdf = new Dompdf();

		$this->load->view('exports/pdf_template');
	}
}
