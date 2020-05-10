<?php defined('BASEPATH') OR exit('No direct script access allowed');

class NewUser extends CI_Controller {
    
	public function __construct(){
        parent::__construct();
        $this->load->model("nU/New_user_model");
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
                            $sifrado=sha1($contraseña1);
                            $usuarioF1 = array(
                                $nombreUsuario,
                                $apellidoUsuario,
                                $nombreUsuarioAka,
                                $sifrado
                            );
                            $insertNewUser1Consulta = $this->New_user_model->insertNewUser1($usuarioF1);
                            if($insertNewUser1Consulta[0]->count != 0){
                                $mensaje = array(
                                    'texto' => 'El nombre de usuario ya existe',
                                    'tipo' => 'error'
                                );               
                                $this->session->set_flashdata('mensaje',$mensaje);
                                redirect(base_url('home/crearUsuario'));
                            } else{
                                $this->New_user_model->insertNewUser1_2($usuarioF1);
                                $this->load->view('inicio/crearUsuarioDetalles', compact("usuarioF1"));
                            }
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

    public function newUserB(){
        if($this->input->post()){
            $nombreUsuario = $_POST['nombreUsuario'];
            $numeroTelefono = $_POST["numeroTelefono"];
            $correo = $_POST["correo"];
            $genero = $_POST["genero"];
            $dia = $_POST["dia"];
            $mes = $_POST["mes"];
            $year = $_POST["year"];
            $usuarioF2 = array(
                $nombreUsuario,
                $numeroTelefono,
                $correo,
                $genero,
                $dia,
                $mes,
                $year
            );
            $this->New_user_model->insertNewUser1_3($usuarioF2);
			$mensaje = array(
				'texto' => 'Ingresa con tu nombre de usuario y contraseña',
				'tipo' => 'info'
			);
			$this->session->set_flashdata('mensaje',$mensaje);
            redirect(base_url('Auth/inicio'));
        }else{
            echo "nada";
        }
    }
}
