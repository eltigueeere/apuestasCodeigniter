<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AtencionCiudadana_Model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//$this->load->model(array('usuario_model'));
	}

	public function getAtenciones()
	{
		return $this->db->get('atencionCiudadana')->result();
	}
	public function getColonias()
	{
		return $this->db->get('catColonia')->result();
	}
	public function getAreas()
	{
		return $this->db->get('catAreaAtendio')->result();
	}
	public function getTipoCasa()
	{
		return $this->db->get('catTipoCasa')->result();
	}

	public function create($post){

		$datos = array
		(
			'nombreAtendio'=>'usuario',
			'nombreSolicitante'=>$post['nombre'],
			'telefono'=>$post['telefono'],
			'correo'=>$post['correo'],
			'calle'=>$post['calle'],
			'numeroInt'=>$post['numeroInt'],
			'numeroExt'=>$post['numeroExt'],
			'idCatColonia'=>$post['idCatColonia'],
			'idTipoCasa'=>$post['idTipoCasa'],
			'referenciaVecinos'=>$post['referenciaVecinos'],
			'referenciaDesc'=>$post['referencia'],
			'motivo'=>$post['motivo'],
			'idArea'=>$post['idArea'],
			'idStatusAtencion'=>1

		);

		$this->db->insert('atencionCiudadana', $datos);

		return $idatencionCiudadana = $this->db->insert_id();
	}

	public function getAtencionC($id){

		$this->db->where('id',$id);
		return $this->db->get('atencionCiudadana')->row();

	}


	public function insertFolio($folio,$id){

		$datos = array
		(
			
			'folio'=>$folio

		);

		$this->db->where('id',$id);
		$this->db->update('atencionCiudadana', $datos);

	}
	public function update($post,$id){

		$datos = array
		(

			'folio'=>$post['folio'],
			'nombreSolicitante'=>$post['nombre'],
			'telefono'=>$post['telefono'],
			'correo'=>$post['correo'],
			'calle'=>$post['calle'],
			'numeroInt'=>$post['numeroInt'],
			'numeroExt'=>$post['numeroExt'],
			'idCatColonia'=>$post['idCatColonia'],
			'idTipoCasa'=>$post['idTipoCasa'],
			'referenciaVecinos'=>$post['referenciaVecinos'],
			'referenciaDesc'=>$post['referencia'],
			'motivo'=>$post['motivo'],
			'idStatusAtencion'=>1

		);

		$this->db->where('id',$id);
		$this->db->update('atencionCiudadana', $datos);
		 return true;
	}

	// si es de uno a muchos

	// public function addSeguimiento($datos,$idAtencion){



	// }

	// public function traer_aplicaciones_usuario($idUsuario)
	// {
	// 	$this->db->join('catAplicacion', 'tbPermisoUsuario.idAplicacion = catAplicacion.idAplicacion ','inner');
	// 	$this->db->where('idUsuario', $idUsuario);
	// 	$this->db->group_by('tbPermisoUsuario.idAplicacion');
	// 	return $this->db->get('tbPermisoUsuario')->result();
	// }
	
}

/* End of file aplicacion.php */
/* Location: ./application/models/aplicacion.php */