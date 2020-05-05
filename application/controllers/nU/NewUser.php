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
            $lalos = $nombreUsuario.$apellidoUsuario.$nombreUsuarioAka.$contraseña1.$contraseña2;
            echo $lalos;
            header("Location:".base_url('home/crearUsuarioDetalles')); 
            if($this->input->post()){                
                $numeroTelefono = $_POST['numeroTelefono'];
                echo $numeroTelefono;
                echo "<br>";
                echo $lalos;


            } else{
                echo "no-2";
            }
        } else{
            echo "no-1";
        }
    }
}
