<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("admin/Admin_model");
	}

	public function inicio()
	{
		if ($this->session->userdata("login")) {
			$this->load->view("inicio/general");
		}else{			
			$this->load->view("admin/login");
		}
	}

	public function login()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$res = $this->Admin_model->login($username, sha1($password));

		if (!$res) {			
			$mensaje = array(
				'texto' => 'El usuario y/o contraseña son incorrectos',
				'tipo' => 'error'
			);
			$this->session->set_flashdata('mensaje',$mensaje);
			redirect(base_url());
		}else{			
			$data  = array(
				'idUsuario' => $res->idUsuario, 
				'username' => $res->username,
				'idRol' => $res->idRol,
				'login' => TRUE
			);
			$this->session->set_userdata($data);
			redirect(base_url());
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}