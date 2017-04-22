<div class="row">
	<div class="col-md-11">
          <!-- Horizontal Form -->
          <div class="box box-info">
			<div class="box-header with-border ">
              <h2 class="box-title">Agregar Menu</h2>
            </div>
			
			<form action="<?php echo base_url(); ?>ceditarMenu/guardar" method="POST" class="form-horizontal">
				<div class="box-body">
			  
				<div class="box-header with-border ">
					<h3 class="box-title">Menu</h3>
				</div>
			  
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre del Platillo:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtNombre"  placeholder="Ingrese Nombre del Platillo">
                  </div>
                </div>
				
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Ingredientes:</label>
                  <div class="col-sm-10">
                    <textarea type="text" class="form-control" name="txtIngredientes" rows="4" placeholder="Ingrese los ingredientes"></textarea>
                  </div>
                </div>
				
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Calificacion:</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="txtCalificacion" maxlength="2" placeholder="0-10">
                  </div>
                </div>
				
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Precio:</label>
                  <div class="col-sm-1">
                    <input type="text" class="form-control" name="txtPrecio" placeholder="$ 0">
                  </div>
                </div>
				
				<div class="form-group">
					<div class="col-md-10 pull-right">
						<button type="submit" class="btn btn-primary">Guardar Cambios</button>
					</div>
				</div>
			  
            </form>
			
			
			<!-- Actualizar Menu -->
			
			
			
			
          <!-- /.box -->
        </div>
		
			<div class="col-md-10 pull-left">
				<a href="<?php echo base_url();?>cchef" class="btn btn-danger">Regresar</a>
			</div>
		</div>
		
			
		
	</div>
</div>
