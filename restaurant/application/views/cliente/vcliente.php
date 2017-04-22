<div class="row">
	<div class="col-md-7">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Menu</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="<?php echo base_url();?>assets/dist/img/ensaladas.jpg" alt="Ensalada">

                    <div class="carousel-caption">
                      Ensalada
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?php echo base_url();?>assets/dist/img/enchiladas.jpg" alt="enchiladas">

                    <div class="carousel-caption">
                      enchiladas
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?php echo base_url();?>assets/dist/img/tacos.jpg" alt="Third slide">

                    <div class="carousel-caption">
                      tacos
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </div>
		
		<div class="col-md-7 pull-left">	
			<div class="box box-primary">
				<table id="tblMenu" class="table table-bordered">
					<tr>
						<th style="width: 10px">ID</th>
						<th>Nombre</th>
						<th>Ingredientes</th>
						<th>Calificacion</th>
						<th>Precio</th>
					</tr>
				</table>
			</div>
					
			<div class="col-md-7 pull-left">
				<button id="btnGetMenu" type="button" class="btn btn-primary"></i>Obtener Menu</button>
			</div>
		</div>	
</div>
	
	<script type="text/javascript">
		var baseurl = "<?php echo base_url();?>";
	</script>