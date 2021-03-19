<?php
class comentario_modelo{

	
	function __construct(){}
	public static function listarCom(){

		$i  = new conexion();
		$c = $i->conectar(); 		
		$sql = "SELECT * FROM T_COMENTARIO";		
		$s   = $c->prepare($sql);
		$s->setFetchMode(PDO::FETCH_ASSOC);
		$res = $s->execute();
		$numero_filas = $s->rowCount();
		$datos = $s->fetchAll();
		return $datos;
		# code...
	    }
public static function regCom( $cmt, $post_id){
		$i  = new conexion();
		$c = $i->conectar(); 
		date_default_timezone_set("America/Bogota");
		$fecha = date("Y-m-d h:i:s");
		$USU_ID = $_SESSION['ID']; 
		$sql = "INSERT t_comentario 
(COM_COMENTARIO, 
 COM_FCH_RGT, COM_FCH_ACT   ,
  COM_POST_ID , COM_USU_ID) 
 VALUES
 (:comm, :fch_reg, :fch_act, :com_post_id, :com_usu_id)";		
		$s   = $c->prepare($sql);		
		$res = $s->execute(array("comm"     => $cmt,
								 "fch_reg" => $fecha,
								 "fch_act" => $fecha,
								 
								 "com_post_id"    => $post_id,
								 "com_usu_id" => $USU_ID
	                           ));
		return $res;
	}

}