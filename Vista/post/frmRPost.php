<div class="row content">
		<div class="col-sm-9 text-justify">
			<div class="panel panel-primary">
				<div class="panel-heading">Crear post</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-6">
<form action="?controlador=post&accion=regPost" method="post">
						<div class="form-group">
							<label for="titulo">Titulo</label>
							<input type="text" name="titulo" class="form-control">
						</div>
						<div class="form-group">
							<label for="comentario">Comentario</label>
	<textarea name="comentario" class="form-control"></textarea>
						</div>

<input type="hidden" name="cat_id" 
       value="<?php echo $_GET['cat_id']; ?>">
		
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