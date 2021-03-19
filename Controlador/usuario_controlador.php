<?php
class usuario_controlador{
	public function frmRUsuario(){
		require_once "vista/usuario/frmRUsuario.php";
	}
	public function cerrarSession(){
		session_destroy();
		header("Location: /APPBLOG");
	}

	public function regUsuario(){
		extract($_POST);// nick , email
		$r = usuario_modelo::mdlRegUsuario($nick, $email);
		echo $r;
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

	public function frmEUsuario(){
		require_once "vista/usuario/frmEUsuario.php";
	}
	public function frmISUsuario(){
		require_once "vista/usuario/frmISUsuario.php";
	}
	public function verificarUsuario(){
		extract($_POST);
		$r = usuario_modelo::mdlVerificarUsuario($usu, $pass);
		if (count($r) > 0){
			// GUARDAMOS ALGUNOS DATOS DEL VECTOR EN VARIABLES DE SESSION
			$_SESSION['ID']    = $r["USU_ID"];
			$_SESSION['NICK']  = $r["USU_NICK"];
			$_SESSION['ROL']   = $r["USU_ROL"];			
			header("Location: /APPBLOG");
		}else{
			echo "Verifique los datos";
		}
	}
}