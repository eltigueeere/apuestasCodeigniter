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
				<?php if(isset($prm)){echo $prm->aplicacion;}else{echo 'Administracion';} ?>
				<small><?php if(isset($prm)){echo $prm->modulo;}else{echo 'Modificar Usuario';} ?></small>
			</h1>
			<ol class="breadcrumb">
				<li title="Inicio"><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Inicio</a></li>
				<li class="active"><?php if(isset($prm)){echo $prm->aplicacion;}else{echo 'Administracion';} ?></li>
				<li class="active"><?php if(isset($prm)){echo $prm->modulo;}else{echo 'Modificar Usuario';} ?></li>
			</ol>
		</section>
		<section class="content container-fluid">
		<!--↓↓↓↓↓↓↓CONTENIDO-DE-PAGINA↓↓↓↓↓↓↓↓-->

					<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Editar Usuario - <?php echo $usuarioDatos->username; ?></h3>
	
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>

					<div class="box-body">
						<?php if($this->session->flashdata("mensaje")):?>
							<div class="alert alert-success">
								<p><b><?php echo $this->session->flashdata("mensaje")?></b></p>
							</div>
						<?php endif; ?>

							<!-- <?php if(validation_errors()) {?>

							<div class="alert alert-danger">
									<strong> <?php echo validation_errors();?> </strong> 
							</div>
						<?php } ?> -->

												<!-- Aqui va el contenido -->
						<?php echo form_open('admin/Admin_controller/modificar/'.$usuarioDatos->idUsuario);?>
								 
						<div class="row">
								<!-- columna -->
								<div class="col-md-4">
												<div class="form-group <?php if(form_error('nombre')){echo'has-error';} ?>">
														<label> 
																Nombre <span class="symbol required"></span>
														</label>
												<input type="text" value="<?php echo set_value('nombre',$usuarioDatos->nombre);?>" class="form-control input-sm" name="nombre" id="nombre" onChange="javascript:this.value=this.value.toUpperCase();"/>
												<?php echo form_error("nombre","<span class='help-block'>","</span>") ?>
												</div>
								</div>

								<!-- fin columna <-->

								<!-- columna -->
								<div class="col-md-4">
												<div class="form-group <?php if(form_error('paterno')){echo'has-error';} ?>">
														<label> 
															 Apellido Paterno   <span class="symbol required"></span>
														</label>
												<input type="text" value="<?php echo set_value('paterno',$usuarioDatos->paterno);?>" class="form-control input-sm" name="paterno" id="paterno" onChange="javascript:this.value=this.value.toUpperCase();"/>
												<?php echo form_error("paterno","<span class='help-block'>","</span>") ?>
												</div>
								</div>

								<!-- fin columna -->

								<!-- columna -->
								<div class="col-md-4">
												<div class="form-group <?php if(form_error('materno')){echo'has-error';} ?>">
														<label> 
															 Apellido Materno   <span class="symbol required"></span>
														</label>
												<input type="text" value="<?php echo set_value('materno',$usuarioDatos->materno);?>" class="form-control input-sm" name="materno" id="materno" onChange="javascript:this.value=this.value.toUpperCase();"/>
												<?php echo form_error("materno","<span class='help-block'>","</span>") ?>
												</div>
								</div>

								<!-- fin columna -->



						</div>
						<div class="row">
									<!-- columna -->
								<div class="col-md-3">
												<div class="form-group <?php if(form_error('username')){echo'has-error';} ?>">
														<label>
															Usuario<span class="symbol required"></span>
														</label>
												<input type="text" value="<?php echo set_value('username',$usuarioDatos->username);?>" class="form-control input-sm" name="username" id="username"/>
												<?php echo form_error("username","<span class='help-block'>","</span>") ?>
												</div>
								</div>
								<!-- fin columna -->
								<!-- columna -->
								<div class="col-md-3">
												<div class="form-group <?php if(form_error('password')){echo'has-error';} ?>">
														<label>
																Clave<span class="symbol required"></span>
														</label>
														<input type="password" class="form-control input-sm" name="password" id="password" maxlength="30"/>
														<input type="hidden" value="" name="clave_hash" id="clave_hash"   />
														<?php echo form_error("password","<span class='help-block'>","</span>") ?>
												</div>
								</div>
								<div class="col-md-3">
												<div class="form-group <?php if(form_error('telefono')){echo'has-error';} ?>">
														<label>
															Telefono<span class="symbol required"></span>
														</label>
												<input type="text" value="<?php echo set_value('telefono',$usuarioDatos->telefono);?>" class="form-control input-sm" name="telefono" id="telefono"/>
												<?php echo form_error("telefono","<span class='help-block'>","</span>") ?>
												</div>
								</div>
								<!-- fin columna -->
								<!-- columna -->
								<div class="col-md-3">
										<div class="form-group <?php if(form_error('idRol')){echo'has-error';} ?>">
												<label>
														Area
												</label>
										<select name="idRol" id="idRol"  class="select2 form-control">
											<option value="">seleccione...</option>
													<?php foreach ($roles as $rol):
																		$check=false;
																		if($rol->idRol==$usuarioDatos->idRol){
																				$check=true;
																		}
													?>

													<option value="<?php echo $rol->idRol;?>" <?php echo set_select('idRol', $rol->idRol,$check); ?>><?php echo $rol->rol?></option>
													<?php endforeach;?>
												</select>
												<?php echo form_error("idRol","<span class='help-block'>","</span>") ?>
										</div>
								</div>
								<!-- fin columna -->
							
						</div>

						<div class="row">
							 <!-- columna -->
								<div class="col-md-6">
										<div class="form-group <?php if(form_error('email')){echo'has-error';} ?>">
										<label>
												email<span class="symbol required"></span>
										</label>
										<input type="text"  value="<?php echo set_value('email',$usuarioDatos->email);?>" class="form-control input-sm" name="email" id="email" />
										<?php echo form_error("email","<span class='help-block'>","</span>") ?>
										</div>
								</div>
								<!-- fin columna -->
								<!-- columna -->
								<div class="col-md-6">
										<div class="form-group <?php if(form_error('idArea')){echo'has-error';} ?>">
												<label>
														Area
												</label>
										<select name="idArea" id="idArea"  class="select2 form-control">
											<option value="">seleccione...</option>
													<?php foreach ($areas as $area):
																		$check=false;
																		if($area->idArea==$usuarioDatos->idArea){
																				$check=true;
																		}
													?>

													<option value="<?php echo $area->idArea;?>" <?php echo set_select('idArea', $area->idArea,$check); ?>><?php echo $area->area?></option>
													<?php endforeach;?>
												</select>
												<?php echo form_error("idArea","<span class='help-block'>","</span>") ?>
										</div>
								</div>
						</div>

						<div class="row">

						<div class="col-md-4">
						</div>
						 
							 
								<div class="col-md-4">

								<?php
																		$radio=false;
																														 
																		if($usuarioDatos->estado=="1"){
																				$radio=true;
																		}
														?>



											<label class="text-center"><strong style="color: red;"> * </strong>Status </label>
											<p></p>

											<label>
												<input type="radio" value="1"   class="flat-red" name="estado" <?php if($radio){ echo "checked";  } ?>>
												Activo
											</label>
											&nbsp;
											&nbsp;

											<label>
												<input type="radio"   value="0" class="flat-red" name="estado" <?php if(!$radio) { echo "checked";  } ?>>
												Inactivo
											</label>
								</div>
							 <div class="col-md-4">
							</div>  
						</div>
																																																	


					</div><!--/BODY-->
						<div class="box-footer">
							<div class="row">
								<div class="col-md-12">
									<input class="btn btn-wide btn-danger" type="button" onclick="document.location.href='<?php echo base_url('admin/Admin_controller/lista_usuariosadmin_controller/lista_usuarios?prm=3');?>';" value="Cancelar / Regresar">
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
	<script type="text/javascript">

		$(function () {

				$(".select2").select2();

				$('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
					checkboxClass: 'icheckbox_flat-green',
					radioClass: 'iradio_flat-green'
				});

				
			});
	</script>
<!--↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑CARGA-SCRIPTS↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑-->

</body>
</html>