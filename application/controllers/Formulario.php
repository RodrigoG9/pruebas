<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Formulario extends CI_Controller
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
            
		);
        $this->load->view('layout/home/formulario_page',$vars);
    }

}
