<?php defined('BASEPATH') OR exit('No direct script access allowed');

class NewUser extends CI_Controller {
    
	public function __construct(){
		parent::__construct();
	}

    public function newUserA(){
        if($this->input->post()){
            $nombreUsuario =  $_POST["nombreUsuario"];
            $apellidoUsuario = $_POST["apellidoUsuario"];
            $nombreUsuarioAka = $_POST["nombreUsuarioAka"];
            $contraseña1 = $_POST["contrasena1"];
            $contraseña2 = $_POST["contrasena2"];
            if($contraseña1 == $contraseña2){
                if(strlen($contraseña1) > 5 && strlen($contraseña1) < 11 ){
                    if(preg_match('/[a-z]/i',$contraseña1)){
                        if(preg_match('/[0-9]{1}/',$contraseña1)){
                            $usuarioF1 = array(
                                "nombreUsuario" => $nombreUsuario,
                                "apellidoUsuario" => $apellidoUsuario,
                                "nombreUsuarioAka" => $nombreUsuarioAka,
                                "contraseña" => $contraseña1
                            );
                            $this->load->view('inicio/crearUsuarioDetalles', compact("usuarioF1"));
                        } else{
                            $mensaje = array(
                                'texto' => 'La contraseña no contiene almenos un número',
                                'tipo' => 'error'
                            );
                            $this->session->set_flashdata('mensaje',$mensaje);
                            redirect(base_url('home/crearUsuario'));
                        }
                    } else{
                        $mensaje = array(
                            'texto' => 'La contraseña no contiene letraas',
                            'tipo' => 'error'
                        );
                        $this->session->set_flashdata('mensaje',$mensaje);
                        redirect(base_url('home/crearUsuario'));
                    }
                } else{
                    $mensaje = array(
                        'texto' => 'La contraseña tendra de 6 a 10 caracteres',
                        'tipo' => 'error'
                    );
                    $this->session->set_flashdata('mensaje',$mensaje);
                    redirect(base_url('home/crearUsuario'));
                }
            } else{
                $mensaje = array(
                    'texto' => 'Las contraseñas no coinciden',
                    'tipo' => 'error'
                );
                $this->session->set_flashdata('mensaje',$mensaje);
                redirect(base_url('home/crearUsuario'));
            }
        } else{
            redirect(base_url()); //no post            
        }
    }
}
