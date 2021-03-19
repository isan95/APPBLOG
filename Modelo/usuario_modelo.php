<?php
class usuario_modelo{
	public function __construct(){}

	public static function mdlVerificarUsuario($usu, $pass){
		$i  = new conexion();
		$c = $i->conectar(); 
		// Linea 9: establecemos el DML
		$sql = "SELECT * FROM T_USUARIOS WHERE USU_NICK = :n AND USU_PASSWORD = :p";
		
		$s   = $c->prepare($sql);
		// Linea 13: Establecemos que nos devuelva un array clave valor
		$s->setFetchMode(PDO::FETCH_ASSOC);
		$res = $s->execute(array("n"=>$usu , "p"=>sha1($pass)));
		// Linea 16: retorna el numero de registros
		$numero_filas = $s->rowCount();
		$datos = $s->fetch();
		return $datos;
	}

	public static function mdlRegUsuario($nick, $email){
		$i  = new conexion();
		$c = $i->conectar(); 
		date_default_timezone_set("America/Bogota");
		$fecha = date("Y-m-d h:i:s");
		$sql = "INSERT T_USUARIOS
	(USU_NICK, USU_CORREO, USU_PASSWORD, USU_FCH_RGT, USU_ROL)
	VALUES
	(:nick, :correo, :password, :fch_reg, :rol)";		
		$s   = $c->prepare($sql);		
		$res = $s->execute(array("nick"     =>$nick,
								 "correo"   =>$email,
								 "password" =>sha1($email),
								 "fch_reg"  =>$fecha,
								 "rol"      =>2 ));
		return $res;
		// sha1 encripta la contraseña
	}
}
