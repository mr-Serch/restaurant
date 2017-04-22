<div class="row">
	<div class="col-md-11">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo "Usuario: ".$this->session->userdata('s_usuario');?></h3>
            </div>

			<div class="box-header with-border ">
              <h3 class="box-title">Actualizar Datos de Empleado</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
			<form action="<?php echo base_url();?>cpersona/actualizarDatos" method="POST" class="form-horizontal">
              <div class="box-body">

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtNombre" id="inputEmail3" placeholder="Ingrese Nombre">
                  </div>
                </div>

				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Apellido Paterno:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtApPaterno" id="inputEmail3" placeholder="Ingrese Appellido Paterno">
                  </div>
                </div>

				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Apellido Materno:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtApMaterno" id="inputEmail3" placeholder="Ingrese Appellido Materno">
                  </div>
                </div>

				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email:</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="txtEmail" id="inputEmail3" placeholder="Ingrese e-mail">
                  </div>
                </div>

				<div class="form-group">
					<div class="col-md-10 pull-right">
						<button type="submit" class="btn btn-primary">Actualizar</button>
					</div>
				</div>

            </form>

			<div class="box-header with-border ">
              <h3 class="box-title">Quitar Datos de Empeado</h3>
            </div>

			<form action="<?php echo base_url();?>cpersona/eliminarPersona" method="POST" class="form-horizontal">
              <div class="box-body">
				<div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nombre:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="txtIdPersona" id="inputEmail3" placeholder="Ingrese el Nombre">
                  </div>
            </div>
						<div class="form-group">
		          <label for="inputEmail3" class="col-sm-2 control-label">Apellido Paterno:</label>
		            <div class="col-sm-10">
		                <input type="text" class="form-control" name="txtIdPersona" id="inputEmail3" placeholder="Ingrese el Apellido Paterno">
		                  </div>
		            </div>
								<div class="form-group">
				          <label for="inputEmail3" class="col-sm-2 control-label">Apellido Materno:</label>
				            <div class="col-sm-10">
				                <input type="text" class="form-control" name="txtIdPersona" id="inputEmail3" placeholder="Ingrese el Apellido Materno">
				                  </div>
				            </div>
										<div class="form-group">
						                  <label for="inputEmail3" class="col-sm-2 control-label">Email:</label>
						                  <div class="col-sm-10">
						                    <input type="email" class="form-control" name="txtEmail" id="inputEmail3" placeholder="Ingrese e-mail">
						                  </div>
						                </div>
				<div class="form-group">
					<div class="col-md-10 pull-right">
					<button type="submit" class="btn btn-danger">Eliminar</button>
					</div>
				</div>
			  </div>
            </form>

			<!--<div class="box-header with-border ">
              <h3 class="box-title">Subir Imagen a la Galeria</h3>
            </div>


			<div class="col-md-10 pull-right">
				<a href="<?php echo base_url();?>cupload" class="btn btn-primary">Ingresar</a>
			</div>-->

          <!-- /.box -->
        </div>
		</div>
	</div>
</div>
