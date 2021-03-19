<?php
class categoria_modelo{
	public function __construct(){}
	public static function mdlRegCategoria($nombre){
		$i  = new conexion();
		$c = $i->conectar(); 		
		
		$sql = "INSERT T_CATEGORIAS
				(CAT_NOMBRE) VALUES (:nombre)";		
		$s   = $c->prepare($sql);		
		$res = $s->execute(array("nombre" =>$nombre));
		return $res;
	}
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
	public static function mdleliminar($id){
		$i  = new conexion();
		$c = $i->conectar(); 		
		$sql = "DELETE FROM T_CATEGORIAS WHERE CAT_ID=$id";		
		$s   = $c->prepare($sql);
		$res = $s->execute();
		return $res;
        
	}
	public static function mdlBuscarCategoria($id){
		$i  = new conexion();
		$c = $i->conectar(); 		
		$sql = "SELECT * FROM T_CATEGORIAS WHERE CAT_ID=$id";		
		$s   = $c->prepare($sql);
		$s->setFetchMode(PDO::FETCH_ASSOC);
		$res = $s->execute();
		$numero_filas = $s->rowCount();
		$datos = $s->fetch();
		return $datos;



	}
	public static function mdlActCat($nombre,$id){
   $i = new conexion();
   $c = $i->conectar();
   $sql= "UPDATE T_CATEGORIAS SET CAT_NOMBRE= :nombre WHERE CAT_ID= :id";
   $s   = $c->prepare($sql);
   $res = $s->execute(array("nombre" => $nombre,
                              "id"   => $id));
   return $res;


   



	}
}