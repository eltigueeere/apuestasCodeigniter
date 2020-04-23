<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">

		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">

			<!-- Sidebar user panel (optional) -->
			<div class="user-panel">
				<div class="pull-left image">
					<img src="<?php echo base_url('recursos/img/user.jpg');?>" class="img-circle" alt="User Image">
				</div>
				<div class="pull-left info">
					<p><?php echo $this->session->userdata('username'); ?></p>
					<!-- Status -->
					<a><i class="fa fa-circle text-success"></i> Online</a>
				</div>
			</div>
			<!-- Sidebar Menu -->
			<ul class="sidebar-menu" data-widget="tree">
			<li id="li" class="checado"></li>
				<!-- <li class="header">MENU</li> -->
	<?php
		$this->db->select('catModulo.idAplicacion,catAplicacion.nombreAplicacion,catAplicacion.urlAplicacion,catAplicacion.icon');
		$this->db->join('catModulo','catModulo.idModulo = tbPermisoUsuario.idModulo');
		$this->db->join('catAplicacion','catAplicacion.idAplicacion = catModulo.idAplicacion');
		$this->db->where('tbPermisoUsuario.idUsuario', $this->session->userdata('idUsuario'));
		$this->db->group_by('catModulo.idAplicacion');
		$aplicaciones = $this->db->get('tbPermisoUsuario')->result();

		foreach ($aplicaciones as $app){
		if($app->idAplicacion!=1){
	?>
				<li class="treeview" id="<?php echo $app->urlAplicacion; ?>">
					<a href="#"><i class="fa fa-<?php echo $app->icon; ?> "></i> <span><?php echo $app->nombreAplicacion; ?></span>
						<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
					</a>
					<ul class="treeview-menu">
	<?php
		$this->db->select('tbPermisoUsuario.idModulo,catModulo.nombreModulo,catModulo.urlModulo,catModulo.iconModulo');
		$this->db->join('catModulo','catModulo.idModulo = tbPermisoUsuario.idModulo');
		$this->db->where('tbPermisoUsuario.idUsuario', $this->session->userdata('idUsuario'));
		$this->db->where('catModulo.idAplicacion', $app->idAplicacion);
		$this->db->where('tbPermisoUsuario.idStatus', 1);
		$this->db->group_by('tbPermisoUsuario.idModulo');
		$modulos = $this->db->get('tbPermisoUsuario')->result();

		foreach ($modulos as $mod){
		if($mod->idModulo!=1){
	?>
						<li <?php if(@$mod->idModulo==@$_POST['prm']){echo 'class="active"';}?>><a onclick="recarga_<?php echo $mod->idModulo;?>();" style="cursor:pointer;"><i class="fa fa-<?php echo $mod->iconModulo; ?>"></i> <span><?php echo $mod->nombreModulo; ?></span></a></li>						

						<form name="frm-<?php echo $mod->idModulo;?>" method="post" action="<?php echo base_url($app->urlAplicacion.'/'.$mod->urlModulo)?>">
							<input type="hidden" name="prm" value="<?php echo $mod->idModulo;?>">
						</form>

						<script type="text/javascript">
							function recarga_<?php echo $mod->idModulo;?>(){
								document.forms["frm-<?php echo $mod->idModulo;?>"].submit();
							}
						</script>
	<?php }} ?>
					</ul>
				</li>
	<?php }} ?>
			</ul>
			<!-- /.sidebar-menu -->
		</section>
		
		<!-- /.sidebar -->
	</aside>