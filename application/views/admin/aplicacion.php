<?php $this->load->view('layout/headerHTML'); ?>
<!--↓↓↓↓↓↓↓↓↓↓↓↓↓CARGAR-ESTILOS↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->
<style>
  .has-error .select2-selection {
    border-color: rgb(221,75,57) !important;
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
				<?php if(isset($prm)){echo $prm->aplicacion;}else{echo 'Nombre Aplicacion';} ?>
				<small><?php if(isset($prm)){echo $prm->modulo;}else{echo 'Nombre Modulo';} ?></small>
			</h1>
			<ol class="breadcrumb">
				<li title="Inicio"><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Inicio</a></li>
				<li class="active"><?php if(isset($prm)){echo $prm->aplicacion;}else{echo 'Nombre Aplicacion';} ?></li>
				<li class="active"><?php if(isset($prm)){echo $prm->modulo;}else{echo 'Nombre Modulo';} ?></li>
			</ol>
		</section>
		<section class="content container-fluid">
		<!--↓↓↓↓↓↓↓CONTENIDO-DE-PAGINA↓↓↓↓↓↓↓↓-->
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Agregar Aplicación</h3>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
							<i class="fa fa-minus"></i></button>
						<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
							<i class="fa fa-times"></i></button>
					</div>
				</div>

				<div class="box-body">
					
					<?php echo muestra_mensaje_flash($this->session->flashdata('mensaje'));?>

								<!-- Aqui va el contenido -->
					<?php echo form_open('admin/Admin_controller/agregar_aplicacion');?>
						 
					<div class="row">
						<div class="col-md-4">
							<div class="form-group <?php if(form_error('nombreAplicacion')){echo'has-error';} ?>">
								<label for="nombreAplicacion">Nombre de la Aplicación</label>
									<input value="<?php echo set_value('nombreAplicacion')?>" class="form-control" placeholder="Nombre" name="nombreAplicacion" id="nombreAplicacion" class="input-text" type="text">
									<?php echo form_error("nombreAplicacion","<span class='help-block'>","</span>") ?>
							</div>
						</div>
																
						<div class="col-md-4">                                       
							<div class="form-group <?php if(form_error('urlAplicacion')){echo'has-error';} ?>">
								<label for="urlAplicacion">URL de la Aplicación</label>
									<input value="<?php echo set_value('urlAplicacion')?>" class="form-control" placeholder='"Nombre de Carpeta"' name="urlAplicacion" id="urlAplicacion" class="input-text" type="text">
									<?php echo form_error("urlAplicacion","<span class='help-block'>","</span>") ?>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group <?php if(form_error('icono')){echo'has-error';} ?>">
								<label for="icono">Icono para Aplicacion</label>
								<select name="icono", id="icono" class="select2 form-control">
									<option value="">Seleccione . . .</option>
									<?php foreach ($icons as $icon):?>
									<option value="<?php echo $icon->icon?>" <?php echo set_select('icono', $icon->icon); ?>><?php echo $icon->icon?></option>
									<?php endforeach;?>
								</select>
								<?php echo form_error("icono","<span class='help-block'>","</span>") ?>
							</div>
						</div>
					</div>

				</div><!--/BODY-->
				<div class="box-footer">
					<div class="row">
						<div class="col-md-12">
							<input class="btn btn-wide btn-danger" type="button" onclick="document.location.href='<?php echo base_url();?>';" value="Cancelar / Regrsar">
							<input class="btn btn-wide btn-primary pull-right" type="submit" value="Guardar Datos">
						</div>
					</div>
				</div>
			</div><!--/BOX-->

		<!--↑↑↑↑↑↑↑CONTENIDO-DE-PAGINA↑↑↑↑↑↑↑↑-->
		</section>
	</div>
	<!-- /.content-wrapper -->
<?php $this->load->view('layout/footer'); ?>
<?php $this->load->view('layout/asideControlls'); ?>
<!--↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓CARGA-SCRIPTS↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->
<script>

	$(document).ready(function(){
		$("#icono").select2({
			templateResult: formatState,
			templateSelection: formatState
			});
		});
					 
		function formatState (state) {
			if (!state.id) { return state.text; }
			var $state = $(
				'<span ><i class="fa fa-'+ state.id +'"> ' + state.text + '</span>'
			);
			return $state;
		}

</script>
<!--↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑CARGA-SCRIPTS↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑-->
</body>
</html>