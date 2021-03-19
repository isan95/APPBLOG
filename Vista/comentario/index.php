<div class="row content">
		<div class="col-sm-9 text-justify">
			<div class="panel panel-primary">
				<div class="panel-heading">Comentario</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
<!-- ocultar enlace sino esta logeado -->
<?php if(isset($_SESSION['ID'])){  
    $post_id = $_GET['post_id'];
?>
<a href="?controlador=comentario&accion=frmRCom&post_id=<?php echo $post_id;?>">Crear comentario</a>
<?php  } ?>

<?php
echo "<table class='table table-bordered'>";
echo "<tr>";
echo "<th>NOMBRE</th>";
echo "</tr>";
foreach ($datos as $valor) {

	echo "<tr>";
	echo "<td>".$valor['CAT_NO']."</td>";
	echo "<td><a href='?controlador=categoria&accion=frmECategoria&id=".$valor['CAT_ID']."'>Editar </a></td>";
	echo "<td><a href='?controlador=categoria&accion=eliminar&id=".$valor['CAT_ID']."'>Eliminar </a></td>";
	echo "</tr>";
}
	echo "<tr>";
	echo "<td>

	".$valor['COM_COMENTARIO']."</td>";
	
	echo "</tr>";
}
echo "</table>";
?>
