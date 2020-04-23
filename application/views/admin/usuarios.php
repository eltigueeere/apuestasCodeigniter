<?php $this->load->view('layout/headerHTML'); ?>
<!--↓↓↓↓↓↓↓↓↓↓↓↓↓CARGAR-ESTILOS↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('recursos/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css');?>">
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
					<h3 class="box-title">Usuarios - Listado</h3>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
							<i class="fa fa-minus"></i></button>
						<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
							<i class="fa fa-times"></i></button>
					</div>
				</div>

				<div class="box-body">
					<!-- <button type="button" id="nuevoUsuario" name="nuevoUsuario" class="btn btn-primary">Nuevo Usuario</button><br><br> -->
					<!-- TABLA DE ELEMENTOS  TOTALES EN EL SISTEMA
					================================================-->
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">
								<!-- /.panel-heading -->
								<div class="panel-body">
									<div class="dataTable_wrapper">
										<table class="table table-striped table-bordered table-hover" id="usuariosDT">
											<thead>
												<tr>
													<th>Nombre</th>
													<th>Usuario</th>
													<th>Acciones</th>
												</tr>
											</thead>
											<tbody>
											</tbody>
										</table>
									</div>
								</div>
								<!-- /.panel-body -->
							</div>
							<!-- /.panel -->
						</div>
						<!-- /.col-lg-12 -->
					</div>
					<!-- /TABLA -->
				</div><!--/BODY-->
				<div class="box-footer">
					<div class="row">
						<div class="col-md-12">
							<input class="btn btn-wide btn-danger" type="button" onclick="document.location.href='<?php echo base_url();?>';" value="Cancelar / Regrsar">
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
<script type="text/javascript" src="<?php echo base_url('recursos/plugins/datatables.net/js/jquery.dataTables.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('recursos/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js');?>"></script>
<script>

	$( "#nuevoUsuario" ).click(function() {
		document.location.href = "<?php echo base_url('admin/Admin_controller/alta_usuario?prm=5')?>";
	});


	var url ='<?php echo site_url('admin/Admin_controller/restUsuarios');?>'

				var table = $('#usuariosDT').DataTable({
							 
							responsive: true,
							"autoWidth": false,
							fixedColumns: true,
							fixedHeader: true,
							"deferRender": true,
							//autoFill: true,
				"language": {
					"decimal":        "",
						"emptyTable":     "No hay datos disponibles en la tabla",
								"info":       "Mostrando pagina _PAGE_ de _PAGES_",
						"infoEmpty":      "Mostrando 0 de 0 de 0 registros",
						"infoFiltered":   "(Filtrados de _MAX_ registros totales)",
						"infoPostFix":    "",
						"thousands":      ",",
								"lengthMenu":     "Mostrar _MENU_ registros por pagina",
						"loadingRecords": "Cargando...",
						"processing":     "Procesando...",
						"search":         "Buscar: ",
						"zeroRecords":    "No se encontraron registros que coincidan",
						"paginate": {
								"first":      "Primera pagina",
								"last":       "Ultima Pagina",
								"next":       "Siguiente",
								"previous":   "Anterior"
						},
						"aria": {
								"sortAscending":  ": Activar para mostrar en acendencia",
								"sortDescending": ": Activar para mostrar en descendencia"
						}
				},
				"processing" : true,  
				"ajax"   :  {
						"url"  : url,
						"type" : "GET",
							"dataSrc": "",
					},
				"columns": [
									{ "data": "nombre" },
									{ "data": "username" },
									{ "data": "idUsuario" }
							],
						"columnDefs": 
							[
					 

						{

						"render": function (data, type, row) {
						
							var acciones = '<a href="<?php echo base_url()?>admin/Admin_controller/modificar/'+data +'" title="modificar"><span class="label label-primary">Modificar</span></a>';



							acciones+='&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url()?>admin/Admin_controller/permiso_usuario/' +data +'" title="permisos"><span class="label label-success">Permisos</span></a>';


							// if(row.status === true){
							//   acciones += '<a href="#" title="desactivar" ><i  valor="'+data+'" usuario="'+row.usuario+'"  class="fa fa-trash-o bajaUsuario" style="color: red;">&nbsp;&nbsp;&nbsp;</i></a>';
							// }else{

							//   acciones += '<a href="#" title="activar" ><i  valor="'+data+'"  usuario="'+row.usuario+'" class="fa fa-check activar" style="color: green;">&nbsp;&nbsp;&nbsp;</i></a>';
							// } 
							return acciones;
						},
						"targets": 2
						}
								]
				});
			

	table.on( 'xhr', function ( e, settings, json ) {
			console.log( 'Ajax event occurred. Returned data: ', json );
	});
		
		// Handle click on checkbox
	$('#usuariosDT tbody').on('click', '#modificarUsuario', function(e){
		var $row = $(this).closest('tr');
		// Get row data
		var data = table.row($row).data();
		// Get row ID
		var id = data.id;
		console.log(id);

		//document.location.href = "{{ url('/') }}/usuarios/" + id + "/edit";

		e.stopPropagation();
		
	});

</script>
<!--↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑CARGA-SCRIPTS↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑-->
</body>
</html>