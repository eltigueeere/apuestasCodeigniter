<?php $this->load->view('layout/headerHTML'); ?>
<!--↓↓↓↓↓↓↓↓↓↓↓↓↓CARGAR-ESTILOS↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->

<!--↑↑↑↑↑↑↑↑↑↑↑↑↑CARGAR-ESTILOS↑↑↑↑↑↑↑↑↑↑↑↑↑↑-->
<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/aside'); ?>
<?php if(isset($_POST['prm'])){$prm=$this->Admin_model->modulInfo($_POST['prm']);}?>
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

<?php if(isset($prm)){ ?>

			<?php if($prm->administracion||$prm->consulta){ ?>
				<h1>CONSULTA</h1>
			<?php } ?>
			<?php if($prm->administracion||$prm->insercion){ ?>
				<h1>INSERCION</h1>
			<?php } ?>
			<?php if($prm->administracion||$prm->modificacion){ ?>
				<h1>MODIFICACION</h1>
			<?php } ?>
			<?php if($prm->administracion||$prm->exportacion){ ?>
				<h1>EXPORTACION</h1>
			<?php } ?>
			<?php if($prm->administracion||$prm->borrado){ ?>
				<h1>BORRADO</h1>
			<?php } ?>

<?php }else{echo '<h1>NO HAY PERMISOS PARA ESTE MODULO<br>ELIMINA EL CODIGO DE PERMISOS<br>YA QUE EL USURIO NO PODRA VER NADA</h1>';} ?>

		<!--↑↑↑↑↑↑↑CONTENIDO-DE-PAGINA↑↑↑↑↑↑↑↑-->
		</section>
	</div>
	<!-- /.content-wrapper -->
<?php $this->load->view('layout/footer'); ?>
<?php $this->load->view('layout/asideControlls'); ?>
<!--↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓CARGA-SCRIPTS↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->


<!--↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑CARGA-SCRIPTS↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑-->
</body>
</html>