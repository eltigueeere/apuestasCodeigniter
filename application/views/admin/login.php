<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sistema Integral Nombre</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url('recursos/plugins/bootstrap/dist/css/bootstrap.min.css');?>">

	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('recursos/dist/css/AdminLTE.min.css');?>">

	<link rel="stylesheet" href="<?php echo base_url('recursos/bower_components/dani/fonts/font-awesome-4.7.0/css/font-awesome.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('recursos/bower_components/dani/css/util.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('recursos/bower_components/dani/css/main.css');?>">

	<!-- <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">	
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css"> -->
<!--===============================================================================================-->
</head>
<script>
	function deshabilitaRetroceso(){
		window.location.hash="no-back-button";
	    window.location.hash="Again-No-back-button" //chrome
	    window.onhashchange=function(){window.location.hash="no-back-button";}
	}
</script>
<body onload="deshabilitaRetroceso()">
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url(<?php echo base_url('recursos/bower_components/dani/images/uno.jpg');?>);">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form action="<?php echo base_url('auth/login');?>" method="post" class="login100-form validate-form">
					<!--<div class="login100-form-avatar">
						<img src="<?php echo base_url('recursos/bower_components/dani/images/avatar-01.jpg');?>" alt="AVATAR">
					</div>-->
						
					<span class="login100-form-title p-t-20 p-b-45">
						Plataforma de Inversion <br> Naucalpan Emprende 2019
					</span>

					<div class="wrap-input100 m-b-10">
						<?php echo muestra_mensaje_flash($this->session->flashdata('mensaje'));?>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Usuario Requerido">
						<input class="input100" type="text" name="username" placeholder="Usuario">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>


					<div class="wrap-input200 validate-input m-b-10" data-validate = "Contraseña Requerida">
						<input class="input200" type="password" name="password" placeholder="Contraseña">
						<span class="focus-input200"></span>
						<span class="symbol-input200">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn">
							Iniciar Sesión
						</button>
					</div>


					<div class="text-center w-full">
						<a class="txt1" href="#">
							© Hidalgo Tel: (55) 8476--2255
									
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script>

	// function deshabilitaRetroceso(){
	// 	window.location.hash="no-back-button";
	//     window.location.hash="Again-No-back-button" //chrome
	//     window.onhashchange=function(){window.location.hash="Again-No-back-button";}
	// }

	// deshabilitaRetroceso();

	</script>

</body>
</html>