<?php
class post_modelo{

	public static function mdlListarPost($post_id){
		$i  = new conexion();
		$c = $i->conectar(); 		
		$sql = "SELECT * FROM T_POST WHERE POST_CAT_ID = :POST_ID";		
		$s   = $c->prepare($sql);
		$s->setFetchMode(PDO::FETCH_ASSOC);
		$res = $s->execute(array("POST_ID"=>$post_id));
	
		$numero_filas = $s->rowCount();
		$datos = $s->fetchAll();
		return $datos;
	}

	public static function mdlRegPost($t, $cmt, $cat_id){
		$i  = new conexion();
		$c = $i->conectar(); 
		date_default_timezone_set("America/Bogota");
		$fecha = date("Y-m-d h:i:s");
		$USU_ID = $_SESSION['ID']; 
		$sql = "INSERT t_post 
		(POST_TITULO , POST_COMENTARIO, 
		 POST_FCH_RGT, POST_FCH_ACT   ,
 		POST_ESTADO , POST_USU_ID    , POST_CAT_ID) 
 		VALUES
 		(:tit, :cmt, :fch_reg, :fch_act, :est, :u_id, :c_id)";		
		$s   = $c->prepare($sql);		
		$res = $s->execute(array("tit"     => $t,
								 "cmt"     => $cmt,
								 "fch_reg" => $fecha,
								 "fch_act" => $fecha,
								 "est"     => 1,
								 "u_id"    => $USU_ID,
								 "c_id"    => $cat_id
	                           ));
		return $res;
	}

	public static function mdleliminarPost($id){
		$i  = new conexion();
		$c = $i->conectar(); 		
		$sql = "DELETE FROM T_POST WHERE POST_ID=$id";		
		$s   = $c->prepare($sql);
		$res = $s->execute();
		return $res;
        
	}

	public static function mdlBuscarPost($id){
		$i  = new conexion();
		$c = $i->conectar(); 		
		$sql = "SELECT * FROM T_POST WHERE POST_ID=$id";		
		$s   = $c->prepare($sql);
		$s->setFetchMode(PDO::FETCH_ASSOC);
		$res = $s->execute();
		$numero_filas = $s->rowCount();
		$datos = $s->fetch();
		return $datos;



	}
	public static function mdlActPost($titulo,$comentario,$post_id){
   $i = new conexion();
   $c = $i->conectar();
   $sql= "UPDATE T_POST SET POST_TITULO= :titulo, POST_COMENTARIO= :comentario WHERE POST_ID= $post_id";
   $s   = $c->prepare($sql);
   $res = $s->execute(array("titulo" => $titulo,
                              "comentario"   => $comentario));
   return $res;


   



	}


}
