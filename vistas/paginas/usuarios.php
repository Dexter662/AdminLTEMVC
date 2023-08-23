<div class="content-wrapper" style="main-height: 717px;">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Administrar Usuarios</h1>
				</div>
			</div>
		</div>
	</section>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card card-info card-outline">
						<div class="card-header">
							<button class="btn btn-success crear-usuario" data-toggle="modal" data-target="#modal-crear-usuario">
								Crear Nuevo Usuario
							</button><br>
						</div><br>
						<div class="card-body">
							<table class="table table-bordered table-striped dt-responsive tablaUsuarios" width="100%">
								<thead>
									<tr>
										<th style="width:10px">#</th>
										<th>Nombre</th>
										<th>Usuario</th>
										<th>Foto</th>
										<th>Rol</th>
										<th>Acciones</th>
									</tr>
								</thead>
								<tbody>
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- Modal Crear Usuario  -->
<div class="modal modal-default fade" id="modal-crear-usuario">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="alert alert-success alert-dismissible">Agregar Nuevo Usuario</h4>
			</div>
			<form method="POST" enctype="multipart/form-data">
				<div class="form-group has-feedback" bis-skin-cheched="1">
					<input type="text" class="form-control" name="nombre" placeholder="Nombre">
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback" bis-skin-cheched="1">
					<input type="text" class="form-control" name="usuario" placeholder="Usuario">
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback" bis-skin-cheched="1">
					<input type="password" class="form-control" name="password" placeholder="Contraseña">
					<span class="glyphicon glyphicon-eye-close form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback" bis-skin-cheched="1">
					<input type="text" class="form-control" name="" placeholder="">
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
			</form>
		</div>
	</div>
</div>