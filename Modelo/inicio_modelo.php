<?php
class inicio_modelo{

	public static function mdlListarCategorias(){
		$i  = new conexion();
		$c = $i->conectar(); 		
		$sql = "SELECT * FROM T_CATEGORIAS";		
		$s   = $c->prepare($sql);
		$s->setFetchMode(PDO::FETCH_ASSOC);
		$res = $s->execute();
	
		$numero_filas = $s->rowCount();
		$datos = $s->fetchAll();
		return $datos;
	}
}
