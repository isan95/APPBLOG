<?php
class conexion{
	private $con;
	public function __construct(){
		try{
			$this->con = new PDO('mysql:host=localhost;dbname=bd_blog','root','');
			$this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e){
			echo $e->getMessage();
		}
		return $this->con; 
	}
	public function conectar(){
		if($this->con instanceof PDO){
			return $this->con;
		}
	}
}