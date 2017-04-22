<div class="column">
	<div class="col-md-4">
          <!-- Horizontal Form -->
          <div class="box box-info">
			<div class="box-header with-border">
              <h2 class="box-title">Pedidos por Mesa</h2>
            </div>
			
			<div class="form-group" >
				<div class="box-body">
                  <label for="inputEmail3" class="col-sm-2 control-label">Mesa</label>
                  <select class="form-control">
                    <option>Mesa 1</option>
                    <option>Mesa 2</option>
                    <option>Mesa 3</option>
                    <option>Mesa 4</option>
                    <option>Mesa 5</option>
					<option>Mesa 6</option>
					<option>Mesa 7</option>
					<option>Mesa 8</option>
					<option>Mesa 9</option>
					<option>Mesa 10</option>
                  </select>
				</div>
            </div>
			
        </div><br><br>
		
			<div class="col-md-1 pull-left">
				<a href="<?php echo base_url();?>clogin" class="btn btn-danger">Regresar</a>
			</div>
		</div>			
	</div>
	
	
	<div class="column">
	<div class="col-md-4">
          <!-- Horizontal Form -->
          <div class="box box-primary">
			<div class="box-header with-border">
              <h2 class="box-title">Detalle de la Cuenta</h2>
            </div>
			
			<div class="form-group" >
				<div class="box-body">
                  <label for="inputEmail3" class="col-sm-4 control-label">Producto </label>
				  <label for="inputEmail3" class="col-sm-4 control-label">Cantidad </label>
				  <label for="inputEmail3" class="col-sm-4 control-label">Valor</label>
                  
				</div>
            </div>
        </div>	
		</div>			
	</div>
	
	<div class="column">
	<div class="col-md-4">
          <!-- Horizontal Form -->
          <div class="box box-danger">
			<div class="box-header with-border">
              <h2 class="box-title">Detalle de la Cuenta</h2>
            </div>
			
			<div class="form-group" >
			
				<div class="box-body">
                  <label class="col-sm-2 control-label">No. de Venta</label>
					<input type="text" name="numero" class="form-control" placeholder="" disabled>
				</div>
				<div class="box-body">
                  <label for="inputEmail3" class="col-sm-2 control-label">Efectivo</label>
					<input type="text" class="form-control" placeholder="$0.00">
				</div>
				<div class="box-body">
                  <label for="inputEmail3" class="col-sm-2 control-label">Cambio</label>
					<input type="text" class="form-control" placeholder="$0.00" disabled>
				</div>	
            </div>
        </div>
	
		</div>			
	</div>	
	
</div>