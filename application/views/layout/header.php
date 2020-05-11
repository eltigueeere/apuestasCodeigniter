
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-ssp sidebar-mini">
<div class="wrapper">

	<!-- Main Header -->
	<header class="main-header">

		<!-- Logo -->
		<a href="<?php echo base_url(); ?>" class="logo">
			<!-- mini logo for sidebar mini 50x50 pixels -->
			<span class="logo-mini"><b>GAA</b></span>
			<!-- logo for regular state and mobile devices -->
			<span class="logo-lg"><b>©Face 2 Face</b></span>
		</a>

		<!-- Header Navbar -->
		<nav class="navbar navbar-static-top" role="navigation">
			<!-- Sidebar toggle button-->
			<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
				<span class="sr-only">Toggle navigation</span>
			</a>
			<!-- Navbar Right Menu -->
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<!-- User Account Menu -->
					<li class="dropdown user user-menu">
						<!-- Menu Toggle Button -->
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<!-- The user image in the navbar-->
							<img src="<?php echo base_url('recursos/img/user.jpg');?>" class="user-image" alt="User Image">
							<!-- hidden-xs hides the username on small devices so only the image appears. -->
							<span class="hidden-xs"><?php echo $this->session->userdata('username'); ?></span>
						</a>
						<ul class="dropdown-menu">
							<!-- The user image in the menu -->
							<li class="user-header">
								<img src="<?php echo base_url('recursos/img/user.jpg');?>" class="img-circle" alt="User Image">

								<p>
									<?php $userRol=$this->db->where('idRol',$this->session->userdata('idRol'))->get('catrol')->row('rol'); ?>
									<?php $userDate=$this->db->where('idUsuario',$this->session->userdata('idUsuario'))->get('tbusuario')->row('fechaCrea'); ?>
									
									<?php echo $this->session->userdata('username').' - '.$userRol; ?>
									<small>Miembro desde <?php echo date('m / Y', strtotime($userDate)); ?></small>
								</p>
							</li>
							<!-- Menu Footer-->
							<li class="user-footer" style="background: red">
								<!-- <div class="pull-left">
									<a href="#" class="btn btn-default btn-flat">Perfil</a>
								</div> -->
								<div class="pull-right">
									<a href="<?php echo base_url('auth/logout'); ?>" class="btn bg-navy btn-flat">Cerrar Sesión</a>
								</div>
							</li>
						</ul>
					</li>
					<!-- Control Sidebar Toggle Button -->
					<li>
						<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
					</li>
				</ul>
			</div>
		</nav>
	</header>