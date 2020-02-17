<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Eliminar extends CI_Controller
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
		$this->load->view('layout/home/eliminar_page', $vars);
	}



}