<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class New_user_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function insertNewUser1($usuarioF1){
		$regla = "SELECT COUNT(username) AS count FROM tbusuario WHERE username = '$usuarioF1[2]'";
		return $this->db->query($regla)->result();
	}

	public function insertNewUser1_2($usuarioF1){
		$regla = "INSERT INTO tbusuario (nombre, paterno, username, password) VALUES ('$usuarioF1[0]', '$usuarioF1[1]','$usuarioF1[2]','$usuarioF1[3]')";
		return $this->db->query($regla);
	}
}