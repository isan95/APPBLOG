<div class="row content">
		<div class="col-sm-9 text-justify">
			<div class="panel panel-primary">
				<div class="panel-heading">Categorias</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">


<?php
echo "<table class='table table-bordered'>";
echo "<tr>";
echo "<th>NOMBRE</th>";
echo "</tr>";
foreach ($datos as $valor) {
	echo "<tr>";
	echo "<td>
<a href='?controlador=post&accion=listarPost&cat_id=".$valor['CAT_ID']."'>
	".$valor['CAT_NOMBRE']."</a></td>";
	
	echo "</tr>";
}
echo "</table>";
?>





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