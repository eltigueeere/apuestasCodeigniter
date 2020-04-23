<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function login($username, $password){
		
		$this->db->where("username", $username);
		$this->db->where("password", $password);

		$resultados = $this->db->get("tbusuario");
		
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		}else{
			return false;
		}
	}

	public function modulInfo($idModulo){

		$this->db->select('
			tbPermisoUsuario.idUsuario,
			catModulo.idAplicacion,
			tbPermisoUsuario.idModulo,
			catAplicacion.nombreAplicacion AS aplicacion,
			catModulo.nombreModulo AS modulo,
			tbPermisoUsuario.administracion,
			tbPermisoUsuario.borrado,
			tbPermisoUsuario.consulta,
			tbPermisoUsuario.exportacion,
			tbPermisoUsuario.insercion,
			tbPermisoUsuario.modificacion
		');
		$this->db->join('catModulo','catModulo.idModulo = tbPermisoUsuario.idModulo');
		$this->db->join('catAplicacion','catAplicacion.idAplicacion = catModulo.idAplicacion');
		$this->db->where('tbPermisoUsuario.idUsuario', $this->session->userdata('idUsuario'));
		$this->db->where('tbPermisoUsuario.idModulo', $idModulo);
		$modulo = $this->db->get('tbPermisoUsuario');
		// echo $this->db->last_query();
		return $modulo->row();
	}

	public function traeIcons()
	{
		return $this->db->get('catIcon')->result();
	}

	public function guardar_aplicacion($datos)
	{
		$columnas = array(
			'nombreAplicacion' => $datos['nombreAplicacion'],
			'urlAplicacion' => $datos['urlAplicacion'],
			'icon' => $datos['icono'],
			'idStatus' => 1,
			'idUsuario' => $this->session->userdata('idUsuario')
		);
		$this->db->insert('catAplicacion', $columnas);
	}

	public function traer_aplicaciones_array()
	{
		return $this->db->get('catAplicacion')->result();
	}

	public function guardar_modulo($datos)
	{
		$columnas = array(
			'idAplicacion' => $datos['aplicacion'],
			'nombreModulo' => $datos['nombreModulo'],
			'urlModulo' => $datos['urlModulo'],
			'iconModulo' => $datos['icono'],
			'idStatus' => 1,
			'idUsuario' => $this->session->userdata('idUsuario')
		);
		$this->db->insert('catModulo', $columnas);
	}

	public function traer_usuarios()
	{
		return $this->db->get('tbusuario')->result();
	}

	public function traer_areas()
	{
		return $this->db->where('estado',1)->get('catArea')->result();
	}

	public function traer_roles()
	{
		return $this->db->where('estado',1)->get('catrol')->result();
	}

	public function guardar_usuario($datos)
	{
		if (empty($datos['email'])) {
			$datos['email'] = null;
		}

		$fecha=date('Y-m-d h:i:s');
		$columnas = array(
			'nombre' => $datos['nombre'],
			'paterno' => $datos['paterno'],
			'materno' => $datos['materno'],
			'username' => $datos['username'],
			'password' => sha1($datos['password']),
			'telefono' => $datos['telefono'],
			'idRol' => $datos['idRol'],
			'email' => $datos['email'],
			'idArea' => $datos['idArea'],
			'fechaCrea' => $fecha,
			'idUsuarioCrea' => $this->session->userdata('idUsuario'),
			'estado' => $datos['estado']
		);

		// $resultadoBitacora=$this->usuario_model->registro_movimiento_insert($columnas,'tbUsuario',$idUsuerC);

		$this->db->insert('tbusuario', $columnas);
	}

	public function trae_usuario($idUsuario)
	{
		$this->db->where('idUsuario', $idUsuario);
		return $this->db->get('tbusuario')->row();
	}

	public function createClave($clave, $idUsuario){
		if (empty($clave)) {
			$this->db->where('idUsuario', $idUsuario);
			$this->db->select('password');
			return $this->db->get('tbusuario')->row()->password;
		} else {
			return sha1($clave);
		}
	}

	public function modificar_usuario($idUsuario,$datos)
	{	//var_dump($datos);
		$this->db->trans_start();

		$fecha=date('Y-m-d h:i:s');
		$columnas = array(
			'nombre' => $datos['nombre'],
			'paterno' => $datos['paterno'],
			'materno' => $datos['materno'],
			'username' => $datos['username'],
			'password' => $this->createClave($datos['password'], $idUsuario),
			'telefono' => $datos['telefono'],
			'idRol' => $datos['idRol'],
			'email' => $datos['email'],
			'idArea' => $datos['idArea'],
			'fechaCambio' => $fecha,
			'idUsuarioCambio' => $this->session->userdata('idUsuario'),
			'estado' => $datos['estado']
		);

		$this->db->where('idUsuario', $idUsuario);
		$this->db->limit(1);
		$this->db->update('tbusuario', $columnas);

		// $resultadoBitacora=$this->usuario_model->registro_movimiento_update('idUsuario',$idUsuario,$columnas,'tbUsuario',$idUsuerC);

		$this->db->trans_complete();
		return $this->db->trans_status();
	}

	// public function trae_usuario($idUsuario)
	// {
	// 	$this->db->where('idUsuario', $idUsuario);
	// 	return $this->db->get('tbUsuario')->row();
	// }

	public function trae_aplicaciones()
	{
		// $this->db->select('catAplicacion.idAplicacion as id, catAplicacion.nombreAplicacion as nombre,catAplicacion.urlAplicacion as url');
		
		return $this->db->get('catAplicacion')->result();
	}

	public function traer_aplicaciones_usuario($idUsuario)
	{
		$this->db->select('catAplicacion.idAplicacion');	
		$this->db->join('catModulo', 'catModulo.idModulo = tbPermisoUsuario.idModulo');
		$this->db->join('catAplicacion', 'catAplicacion.idAplicacion = catModulo.idAplicacion');
		$this->db->where('tbPermisoUsuario.idUsuario', $idUsuario);
		$this->db->group_by('catAplicacion.idAplicacion');
		return $this->db->get('tbPermisoUsuario')->result();
	}

	public function trae_modulos_usuario($idUsuario)
	{
		// $this->db->select('tbPermisoUsuario.idModulo,tbPermisoUsuario.administracion');
		$this->db->where('tbPermisoUsuario.idUsuario', $idUsuario);
		return $this->db->get('tbPermisoUsuario')->result();
	}

	public function trae_modulosByAplicacion($idApp)
	{
		$this->db->select('catModulo.idModulo, catModulo.nombreModulo,catModulo.urlModulo');
		$this->db->where('catModulo.idAplicacion',$idApp);
		return $this->db->get('catModulo')->result();
	}

	public function guardar_permisos($idUsuario, $datos)
	{
		$this->db->where('idUsuario', $idUsuario);
		$this->db->delete('tbPermisoUsuario');

		foreach ($datos['modulos'] as $idModulo) {

			$perfil = 'perfil'.$idModulo;

			$administracion=0;
			$borrado=0;
			$consulta=0;
			$exportacion=0;
			$insercion=0;
			$modificacion=0;

			if(@$datos[$perfil]){

				foreach ($datos[$perfil] as $key) {

					if($key==1){$administracion=1;}
					if($key==2){$borrado=1;}
					if($key==3){$consulta=1;}
					if($key==4){$exportacion=1;}
					if($key==5){$insercion=1;}
					if($key==6){$modificacion=1;}
				 }

				 $tbPermisoUsuario = array(
                    'idUsuario' => $idUsuario,
                    'idModulo' => $idModulo,
                    'administracion' => $administracion,
                    'borrado' => $borrado,
                    'consulta' => $consulta,
                    'exportacion' => $exportacion,
                    'insercion' => $insercion,
                    'modificacion' => $modificacion,
                    'idStatus' => 1
                );

				 $this->db->insert('tbPermisoUsuario', $tbPermisoUsuario);

				// echo $idModulo.'→';

				// echo $administracion;
				// echo $borrado;
				// echo $consulta;
				// echo $exportacion;
				// echo $insercion;
				// echo $modificacion;
				// echo '<br>';

			}
		}
	}



	// SELECT
	// tbPermisoUsuario.idModulo
	// FROM
	// tbPermisoUsuario
	// WHERE tbPermisoUsuario.idUsuario = 1

	// SELECT
	// tbPermisoUsuario.idUsuario,
	// catAplicacion.idAplicacion,
	// catAplicacion.nombreAplicacion
	// FROM
	// tbPermisoUsuario
	// INNER JOIN catModulo ON catModulo.idModulo = tbPermisoUsuario.idModulo
	// INNER JOIN catAplicacion ON catAplicacion.idAplicacion = catModulo.idAplicacion
	// WHERE tbPermisoUsuario.idUsuario = 1
	// GROUP BY catAplicacion.idAplicacion

}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */