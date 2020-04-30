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

}
