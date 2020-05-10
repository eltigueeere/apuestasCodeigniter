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

	public function insertNewUser1_3($usuarioF2){
		$regla = "UPDATE tbusuario SET 
		telefono =  '$usuarioF2[1]', email =  '$usuarioF2[2]', genero =  '$usuarioF2[3]', dia =  '$usuarioF2[4]',
		mes = '$usuarioF2[5]', year = '$usuarioF2[6]' WHERE username = '$usuarioF2[0]'";
		return $this->db->query($regla);
	}
}