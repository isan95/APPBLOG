<?php
class comentario_controlador{

function __construct(){}
public function index(){
	$datos = comentario_modelo::listarCom();
	require_once 'Vista/comentario/index.php';
}
public function frmRcom(){
	require_once 'Vista/comentario/frmRcom.php';
}


public function regCom(){
		extract($_POST);
		$r=comentario_modelo::regCom($comentario,$post_id);
		if($r == 1){
			echo "El comentario ha sido creado";
		}
	}

} 

