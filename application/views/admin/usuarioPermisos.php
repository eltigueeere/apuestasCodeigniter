<?php $this->load->view('layout/headerHTML'); ?>
<!--↓↓↓↓↓↓↓↓↓↓↓↓↓CARGAR-ESTILOS↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->

<style>
.checado {
    pointer-events: none;
}
</style>
<!--↑↑↑↑↑↑↑↑↑↑↑↑↑CARGAR-ESTILOS↑↑↑↑↑↑↑↑↑↑↑↑↑↑-->
<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/aside'); ?>
<?php if(isset($_GET['prm'])){$prm=$this->Admin_model->modulInfo($_GET['prm']);}?>
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				<?php if(isset($prm)){echo $prm->aplicacion;}else{echo 'Permisos Usuario';} ?>
				<small><?php if(isset($prm)){echo $prm->modulo;}else{echo $usuario->username;} ?></small>
			</h1>
			<ol class="breadcrumb">
				<li title="Inicio"><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Inicio</a></li>
				<li class="active"><?php if(isset($prm)){echo $prm->aplicacion;}else{echo 'Permisos Usuario';} ?></li>
				<li class="active"><?php if(isset($prm)){echo $prm->modulo;}else{echo $usuario->username;} ?></li>
			</ol>
		</section>
		<section class="content container-fluid">
		<!--↓↓↓↓↓↓↓CONTENIDO-DE-PAGINA↓↓↓↓↓↓↓↓-->
		<?php echo form_open('admin/Admin_controller/permiso_usuario/'.$idUsuario);?>
		<?php $row = 0; ?>
			<div class="form-group">
				<b><?php echo muestra_mensaje_flash($this->session->flashdata('mensaje'));?></b>
				<center>
					<input class="btn btn-wide btn-danger" type="button" onclick="document.location.href='<?php echo base_url('admin/Admin_controller/lista_usuarios?prm=3');?>';" value="Cancelar / Regresar">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input class="btn btn-wide btn-primary" type="submit" value="Guardar Datos" style="font:bold;">
				</center>
			</div>
			<div class="row">
			<?php foreach ($aplicaciones as $aplicacion) { ?>
				<div class="col-md-4">
					<div class="box box-primary">
						<div class="box-header with-border">

							<?php
								$checked = FALSE;
								if(in_array( $aplicacion->idAplicacion , $aplicacionesUsuario )){
									$checked = TRUE;
								}
							?>

							<input <?php echo set_checkbox('permisos[]', $aplicacion->idAplicacion, $checked)?> type="checkbox" name="permisos[]" class="flat-red"  value="<?php echo $aplicacion->idAplicacion;?>">
							<h3 class="box-title"><?php echo $aplicacion->nombreAplicacion;?></h3>

						</div>
						<div class="box-body">
						<?php
							$modulos = $this->Admin_model->trae_modulosByAplicacion($aplicacion->idAplicacion);
							foreach ($modulos as $moduloP) {
							
						?>
							<div class="form-group">								
								<label>
									<input type="checkbox" name="modulos[]" value="<?php echo $moduloP->idModulo; ?>" class="flat-blue"<?php foreach ($modulosUsuario as $permisoM){if($moduloP->idModulo==$permisoM->idModulo){echo 'checked';}}?>>
						
									<?php echo $moduloP->nombreModulo; ?>								
								</label>
								<label class="pull-right">
									A <input type="checkbox" class="flat-green" name="perfil<?php echo $moduloP->idModulo;?>[]" value="1" <?php foreach ($modulosUsuario as $permisoM){if($moduloP->idModulo==$permisoM->idModulo){if($permisoM->administracion){echo 'checked';}}}?>>
									B <input type="checkbox" class="flat-green" name="perfil<?php echo $moduloP->idModulo;?>[]" value="2" <?php foreach ($modulosUsuario as $permisoM){if($moduloP->idModulo==$permisoM->idModulo){if($permisoM->borrado){echo 'checked';}}}?>>
									C <input type="checkbox" class="flat-green" name="perfil<?php echo $moduloP->idModulo;?>[]" value="3" <?php foreach ($modulosUsuario as $permisoM){if($moduloP->idModulo==$permisoM->idModulo){if($permisoM->consulta){echo 'checked';}}}?>>
									E <input type="checkbox" class="flat-green" name="perfil<?php echo $moduloP->idModulo;?>[]" value="4" <?php foreach ($modulosUsuario as $permisoM){if($moduloP->idModulo==$permisoM->idModulo){if($permisoM->exportacion){echo 'checked';}}}?>>
									I <input type="checkbox" class="flat-green" name="perfil<?php echo $moduloP->idModulo;?>[]" value="5" <?php foreach ($modulosUsuario as $permisoM){if($moduloP->idModulo==$permisoM->idModulo){if($permisoM->insercion){echo 'checked';}}}?>>
									M <input type="checkbox" class="flat-green" name="perfil<?php echo $moduloP->idModulo;?>[]" value="6" <?php foreach ($modulosUsuario as $permisoM){if($moduloP->idModulo==$permisoM->idModulo){if($permisoM->modificacion){echo 'checked';}}}?>>
								</label>
							</div>
						<?php } ?>
						</div>
					</div>
				</div>
			<?php $row++; if($row>=3){echo '</div><div class="row">'; $row=0;}?>
			<?php } ?>


			</div>
			<!-- <div class="row">
				<div class="col-md-12">
					<center>
						<input class="btn btn-wide btn-primary" type="submit" value="Guardar Datos">
					</center>
				</div>
			</div> -->
			<!--
				<div>
				<h5 class="elh5">Simbologia</h5>
				<p class="simbologiaAdmin">A =></p>
				<p>B =></p>
				<p>C =></p>
				<p>E =></p>
				<p>I =></p>
				<p>M =></p>
			</div>
							-->

		<!--↑↑↑↑↑↑↑CONTENIDO-DE-PAGINA↑↑↑↑↑↑↑↑-->
		</section>
	</div>
	<!-- /.content-wrapper -->
<?php $this->load->view('layout/footer'); ?>
<?php $this->load->view('layout/asideControlls'); ?>
<!--↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓CARGA-SCRIPTS↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->
<script>


		//Flat red color scheme for iCheck
		$('input[type="checkbox"].flat-blue, input[type="radio"].flat-blue').iCheck({
			checkboxClass: 'icheckbox_flat-blue',
			radioClass   : 'iradio_flat-blue'
		})
		$('input[type="checkbox"].flat-green, input[type="radio"].flat-green').iCheck({
			checkboxClass: 'icheckbox_flat-green',
			radioClass   : 'iradio_flat-green'
		})
		$('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
			checkboxClass: 'icheckbox_flat-red',
			radioClass   : 'iradio_flat-red'
		})

</script>
<!--↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑CARGA-SCRIPTS↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑-->
</body>
</html>