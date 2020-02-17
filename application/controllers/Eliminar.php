<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Eliminar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('sala_model'));
    }
    
    public function index()
	{
        $salas = $this->sala_model->getSalas();
		$vars = array(
			'scripts' => $this->load->view('layout/scripts', '', true),
			'styles' => $this->load->view('layout/styles', '', true),
            'nav' => $this->load->view('layout/nav-admin', '', true),
            'data' => $salas
		);
        $this->load->view('layout/home/eliminar_page', $vars);
        
	}



}