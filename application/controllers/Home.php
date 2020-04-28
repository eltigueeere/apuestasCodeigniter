<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
	public function __construct(){
		parent::__construct();
	}

    public function index()
	{
		$this->load->view("inicio/index");
	}

	public function galeria()
	{
		$this->load->view('inicio/galeria');
	}

	public function nuestrosPrecios()
	{
		$this->load->view('inicio/nuestrosPrecios');
	}

	public function nosotros()
	{
		$this->load->view('inicio/nosotros');
	}

}
