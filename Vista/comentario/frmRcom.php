<div class="row content">
		<div class="col-sm-9 text-justify">
			<div class="panel panel-primary">
				<div class="panel-heading">Crear comentario</div>
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
		