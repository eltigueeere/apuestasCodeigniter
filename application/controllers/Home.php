<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
	public function __construct(){
		parent::__construct();
	}

    public function index()
	{
		$this->load->view("inicio/index");
	}

	public function apuestas()
	{
		$this->load->view("inicio/apuestas");
	}

	public function galeria()
	{
		$this->load->view("inicio/galeria");
	}
	
	public function mision()
	{
		$this->load->view("inicio/mision");
	}

	
	public function vision()
	{
		$this->load->view("inicio/vision");
	}

	public function nuestrasValores()
	{
		$this->load->view("inicio/nuestrasValores");
	}
	
	public function contacto()
	{
		$this->load->view("inicio/contacto");
	}
}
