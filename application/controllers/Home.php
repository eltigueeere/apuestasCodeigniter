<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
	public function __construct(){
		parent::__construct();
	}

    public function index()
	{
		$entorno="";
		require_once ("Mobile_Detect.php");
		$detect = new Mobile_Detect();
		if ($detect->isMobile()==false) {
			$entorno="navbarEscritorio";
			$this->load->view('inicio/index', compact("entorno"));
			} else{
				$entorno="navbarMovil";
				$this->load->view('inicio/index', compact("entorno"));
			}		
	}

	public function eventosFuturos()
	{
		$this->load->view('inicio/eventosFuturos');
	}

	public function comoApostar()
	{
		$this->load->view('inicio/comoApostar');
	}

	public function nosotros()
	{
		$entorno="";
		require_once ("Mobile_Detect.php");
		$detect = new Mobile_Detect();
		if ($detect->isMobile()==false) {
			$entorno="navbarEscritorio";
			$this->load->view('inicio/nosotros', compact("entorno"));
			} else{
				$entorno="navbarMovil";
				$this->load->view('inicio/nosotros', compact("entorno"));
			}
	}

	public function crearUsuario(){
		$this->load->view('inicio/crearUsuario');
	}

	public function crearUsuarioDetalles(){
		$this->load->view('inicio/crearUsuarioDetalles');
	}
}
