<div class="row content">
		<div class="col-sm-9 text-justify">
			<div class="panel panel-primary">
				<div class="panel-heading">Crear Comentario</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-6">
<form action="?controlador=comentario&accion=regCom" method="post">
						
						<div class="form-group">
							<label for="comentario">Comentario</label>
	<textarea name="comentario" class="form-control"></textarea>
						</div>

<input type="hidden" name="post_id" 
       value="<?php echo $_GET['post_id']; ?>">
		
						<input type="submit" name="aceptar" class="btn btn-default">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
		<div class="col-sm-3 sidenav">
			<div class="panel panel-primary">
				<div class="panel-heading">SENA Blog</div>
				<div class="panel-body">
					<ul class="nav nav-pills nav-stacked">
						<li class="active"><a href="#section1">SofiaPlus</a></li>
						<li><a href="#section2">Blackboard</a></li>
						<li><a href="#section3">Platzi</a></li>
					</ul><br>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Buscar...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">
								<span class="glyphicon glyphicon-search"></span>
							</button>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>