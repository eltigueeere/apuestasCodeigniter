	<!-- Control Sidebar → original "dark" -->
	<aside class="control-sidebar control-sidebar-ssp">
		<!-- Create the tabs -->
		<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
			<li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
			<li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
		</ul>
		<!-- Tab panes -->
		<div class="tab-content">
			<!-- Home tab content -->
			<div class="tab-pane active" id="control-sidebar-home-tab">

				<h3 class="control-sidebar-heading"><b>Contacto</b></h3>

					<label class="control-sidebar-subheading">
						5678 Innovación Tecnologica
						<i class="fa fa-code pull-right"></i>
					</label>
				
					<label class="control-sidebar-subheading">
						3456 Centro de Atenciòn y Servicio Tecnico
						<i class="fa fa-wrench pull-right"></i>
					</label><br>

					<label class="control-sidebar-subheading">
						1111 Redes y Comunicaciones
						<i class="fa fa-wifi pull-right"></i>
					</label><br>

					


					
				<!--<h3 class="control-sidebar-heading">Novedades</h3>
					<label class="control-sidebar-subheading">
						Sistema Integral
						<i class="fa fa-code pull-right"></i>
					</label>
					<label class="control-sidebar-subheading">
						Servicio Web
						<i class="fa fa-star pull-right"></i>
					</label>
					<label class="control-sidebar-subheading">
						Ext 6666 Soporte Sistema
						<i class="fa fa-star pull-right"></i>
					</label>-->
				<h3 class="control-sidebar-heading">Nombre Sistema</h3>
					<label class="control-sidebar-subheading">
						Version 0.0.1 
						<i class="fa fa-align-center pull-right"></i>
					</label>
			</div>
			<!-- /.tab-pane -->

			<!-- Settings tab content -->
			<div class="tab-pane" id="control-sidebar-settings-tab">
				<h3 class="control-sidebar-heading"><b>Configuración General</b></h3>

				<ul class="control-sidebar-menu">
	<?php
		$this->db->select('catModulo.idAplicacion,catAplicacion.nombreAplicacion,catAplicacion.urlAplicacion');
		$this->db->join('catModulo','catModulo.idModulo = tbPermisoUsuario.idModulo');
		$this->db->join('catAplicacion','catAplicacion.idAplicacion = catModulo.idAplicacion');
		$this->db->where('tbPermisoUsuario.idUsuario', $this->session->userdata('idUsuario'));
		$this->db->group_by('catModulo.idAplicacion');
		$aplicaciones = $this->db->get('tbPermisoUsuario')->result();

		foreach ($aplicaciones as $app){
		if($app->idAplicacion==1){

		$this->db->select('tbPermisoUsuario.idModulo,catModulo.nombreModulo,catModulo.urlModulo,catModulo.iconModulo');
		$this->db->join('catModulo','catModulo.idModulo = tbPermisoUsuario.idModulo');
		$this->db->where('tbPermisoUsuario.idUsuario', $this->session->userdata('idUsuario'));
		$this->db->where('catModulo.idAplicacion', $app->idAplicacion);
		$this->db->group_by('tbPermisoUsuario.idModulo');
		$this->db->where('tbPermisoUsuario.idStatus', 1);
		$modulos = $this->db->get('tbPermisoUsuario')->result();

		foreach ($modulos as $mod){
	?>
					<li>
						<a style="color:white" href="<?php echo base_url($app->urlAplicacion.'/'.$mod->urlModulo)?>?prm=<?php echo $mod->idModulo;?>">
							<i class="fa fa-<?php echo $mod->iconModulo; ?>"></i>&nbsp;&nbsp;&nbsp;<span><?php echo $mod->nombreModulo;?></span>
						</a>
					</li>
	<?php }}} ?>
				</ul>
			</div>
			<!-- /.tab-pane -->
		</div>
	</aside>
	<!-- /.control-sidebar -->
	<!-- Add the sidebar's background. This div must be placed
	immediately after the control sidebar -->
	<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('recursos/plugins/jquery/dist/jquery.min.js');?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('recursos/plugins/bootstrap/dist/js/bootstrap.min.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('recursos/dist/js/adminlte.min.js');?>"></script>
<!-- select2 js -->
<script src="<?php echo base_url('recursos/plugins/select2/dist/js/select2.full.min.js');?>"></script>
<!-- iCheck js -->
<script src="<?php echo base_url('recursos/plugins/iCheck/icheck.min.js');?>"></script>
<!-- icons -->
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

<script>
	var aplicacion = $(location).attr('pathname');
	aplicacion = aplicacion.split("/")[2];
	$('#'+aplicacion).addClass('active');

	var funcion = $(location).attr('pathname');
	funcion = funcion.split("/")[4];
	if(funcion=='permiso_usuario'){
		var li ='<a><input type="checkbox" class="flat-red" checked> <span><b>Aplicacion</b></span></a>';
			li+='<a><input type="checkbox" class="flat-blue" checked> <span><b>Modulo</b></span></a>';
			li+='<a><input type="checkbox" class="flat-green" checked> <span><b>A</b></span>dministración</a>';
			li+='<a><input type="checkbox" class="flat-green" checked> <span><b>B</b></span>orrado</a>';
			li+='<a><input type="checkbox" class="flat-green" checked> <span><b>C</b></span>onsulta</a>';
			li+='<a><input type="checkbox" class="flat-green" checked> <span><b>E</b></span>xportacón</a>';
			li+='<a><input type="checkbox" class="flat-green" checked> <span><b>I</b></span>nserción</a>';
			li+='<a><input type="checkbox" class="flat-green" checked> <span><b>M</b></span>odificación</a>';
		$('#li').empty().append(li);
	}
</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
		 Both of these plugins are recommended to enhance the
		 user experience. -->