<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model("admin/Admin_model");
	}

	public function agregar_aplicacion()
	{
		$this->form_validation->set_rules('nombreAplicacion', 'nombre de la aplicación', 'trim|required|is_unique[catAplicacion.nombreAplicacion]');
		$this->form_validation->set_rules('urlAplicacion', 'url de la aplicación', 'trim|required');
		$this->form_validation->set_rules('icono', 'icono de la aplicación', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$datos['icons'] = $this->Admin_model->traeIcons();
			$this->load->view('admin/aplicacion',$datos);
		}
		else
		{
			$this->Admin_model->guardar_aplicacion($this->input->post());
			$mensaje = array(
					'texto' => 'Se ha insertado con éxito',
					'tipo' => 'success'
				);
			$this->session->set_flashdata('mensaje', $mensaje);
			redirect('admin/admin_controller/Agregar_aplicacion');
		}
	}

	public function agregar_modulo()
	{

		$this->form_validation->set_rules('aplicacion', 'tipo de aplicación', 'trim|required');
		$this->form_validation->set_rules('nombreModulo', 'nombre del modulo', 'trim|required');
		$this->form_validation->set_rules('urlModulo', 'url del modulo', 'trim|required');
		$this->form_validation->set_rules('icono', 'icono del modulo', 'trim|required');

		if ($this->form_validation->run() == FALSE)
		{
			$datos['aplicaciones'] = $this->Admin_model->traer_aplicaciones_array();
			$datos['icons'] = $this->Admin_model->traeIcons();

			$this->load->view('admin/modulo',$datos);
		}
		else
		{
			$this->Admin_model->guardar_modulo($this->input->post());
			$mensaje = array(
					'texto' => 'Se ha insertado con éxito',
					'tipo' => 'success'
				);
			$this->session->set_flashdata('mensaje', $mensaje);
			redirect('admin/Admin_controller/agregar_modulo');
		}
	}

	public function lista_usuarios()
	{
		$this->load->view('admin/usuarios');
	}

	public function restUsuarios()
	{
		$data =$this->Admin_model->traer_usuarios();
		echo json_encode($data);
	}

	public function alta_usuario()
	{
		$datos['areas'] = $this->Admin_model->traer_areas();
		$datos['roles'] = $this->Admin_model->traer_roles();

		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required');
		$this->form_validation->set_rules('username', 'Usuario', 'trim|required|min_length[4]|max_length[45]|is_unique[tbusuario.username]');
		$this->form_validation->set_rules('paterno', 'Apellido Paterno', 'trim|required');
		$this->form_validation->set_rules('materno', 'Apellido Materno', 'trim');
		$this->form_validation->set_rules('password', 'Clave o Password', 'trim|required|min_length[4]|max_length[100]');
		// $this->form_validation->set_rules('telefono', 'Telefono', 'trim|required');
		$this->form_validation->set_rules('idRol', 'Tipo Usuario', 'required');
		$this->form_validation->set_rules('idArea', 'Area', 'required');
		$this->form_validation->set_rules('estado', 'Status', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|valid_email');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/nuevoUsuario',$datos);
		}else{
			$datos=$this->Admin_model->guardar_usuario($this->input->post());
			$this->session->set_flashdata("mensaje","Se ha insertado con éxito");
			redirect('admin/Admin_controller/alta_usuario');
		}
	}

	public function modificar($idUsuario)
	{
		$data['areas'] = $this->Admin_model->traer_areas();
		$data['roles'] = $this->Admin_model->traer_roles();
		$data['usuarioDatos'] = $this->Admin_model->trae_usuario($idUsuario);
		if ($data['usuarioDatos'] == FALSE)
		{
			show_404();
			exit();
		}

		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required');
		$this->form_validation->set_rules('username', 'Usuario', 'trim|required|min_length[4]|max_length[45]');
		$this->form_validation->set_rules('paterno', 'Apellido Paterno', 'trim|required');
		$this->form_validation->set_rules('materno', 'Apellido Materno', 'trim');
		if ($this->input->post('password')) {
		 	$this->form_validation->set_rules('password', 'Clave puede estar vacio o ', 'trim|min_length[4]|max_length[100]');
		 }
		// $this->form_validation->set_rules('telefono', 'Telefono', 'trim|required');
		$this->form_validation->set_rules('idRol', 'Rol', 'required');
		$this->form_validation->set_rules('idArea', 'Area', 'required');
		$this->form_validation->set_rules('estado', 'Status', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|valid_email');


		if ($this->form_validation->run() == FALSE)
		{

			$this->load->view('admin/usuarioEditar',$data);


		}else{
			
				$res=$this->Admin_model->modificar_usuario($idUsuario,$this->input->post());
				if($res){
					$this->session->set_flashdata("mensaje","Se ha guardado con éxito");
					redirect('admin/Admin_controller/modificar/'.$idUsuario);
				}else{
					$this->session->set_flashdata("mensaje","ERROR");
					redirect('admin/Admin_controller/modificar/'.$idUsuario);
				}

		}
	}

	public function permiso_usuario($idUsuario)
	{
		$datos['idUsuario'] = $idUsuario;
		$datos['usuario'] = $this->Admin_model->trae_usuario($idUsuario);
		$datos['aplicaciones'] = $this->Admin_model->trae_aplicaciones($idUsuario);

		// $datos['modulos'] = $this->aplicacion_model->trae_modulosByAplicacion($aplicacion->id);
		
		$aplicaciones =$this->Admin_model->traer_aplicaciones_usuario($idUsuario);
		$apsUser= array();
		foreach ($aplicaciones as $ap) {
			$apsUser[] = $ap->idAplicacion;
		}
		$datos['aplicacionesUsuario']= $apsUser;
		// print_r(json_encode($datos['aplicacionesUsuario']));
		

		$datos['modulosUsuario'] =$this->Admin_model->trae_modulos_usuario($idUsuario);

		$this->form_validation->set_rules('fieldname', 'fieldlabel', 'trim');


		if ($this->form_validation->run() == FALSE)
		{
			
			$this->load->view('admin/usuarioPermisos',$datos);
		}
		else
		{

			// print_r($_REQUEST);

			$this->Admin_model->guardar_permisos($idUsuario, $this->input->post());

			$mensaje = array(
					'texto' => 'Se ha insertado con éxito',
					'tipo' => 'success'
				);
			$this->session->set_flashdata('mensaje', $mensaje);

			
			$this->session->set_flashdata('mensaje', $mensaje);
			redirect('admin/Admin_controller/permiso_usuario/' . $idUsuario);
		}
		
		// $modulos =$this->admin_model->trae_modulos_usuario($idUsuario);
		// $modUser= array();		
		// foreach ($modulos as $mod) {
		// 	$modUser[] = $mod->idModulo;
		// }		
		// $datos['modulosUsuario'] = $modUser;
		// print_r('<br>'.json_encode($datos['modulosUsuario']));
	}

}