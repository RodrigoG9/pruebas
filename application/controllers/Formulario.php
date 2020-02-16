<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Formulario extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('formularioo_model');
		//$this->load->helper(array('form', 'url'));
		//$this->config->load('plot_rules');
		//$this->output->enable_profiler(TRUE);
	}

	public function index()
	{
		$vars = array(
			'scripts' => $this->load->view('layout/scripts', '', true),
			'styles' => $this->load->view('layout/styles', '', true),
			'nav' => $this->load->view('layout/nav-admin', '', true)
		);
		$this->load->view('layout/home/formulario_page', $vars);
	}

	public function insertar()
	{
		$titulo = $this->input->post('tituloi');
		$area = $this->input->post('areai');
		//$foto1=$this->input->post('foto1i');
		//$this->formularioo_model->insertar_sala($titulo,$area);
		var_dump($area);
		$config['upload_path'] = './sala/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2048000;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto1i')) { #Aquí me refiero a "foto", el nombre que pusimos en FormData
            $error = array('error' => $this->upload->display_errors());
            echo json_encode($error);
        } else {
            echo json_encode(true);
        }
		
	}
}
