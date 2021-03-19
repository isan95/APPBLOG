<?php
class post_controlador{

	public function frmRPost(){
		require_once "Vista/post/frmRPost.php";
	}
	// funcion para listar los post realizados
	// por los usuarios, estos se muestra en la pagina 
	// de inicio 
	public function listarPost(){
		$datos = post_modelo::mdlListarPost($_GET['cat_id']);
		require_once "Vista/post/index.php";
	}
	public function regPost(){
		extract($_POST);
		$r=post_modelo::mdlRegPost($titulo,$comentario,$cat_id);
		if($r == 1){
			echo "El Post ha sido creado";
		}
	}
	public function eliminarPost(){
		$r= post_modelo::mdleliminarPost($_GET['id']);
		if($r > 0)
			echo"Su registro ha sido eliminado";
		
	}

	public function frmEPost(){
   $r = post_modelo::mdlBuscarPost($_GET['id']);
  // var_dump($r);
   require_once "Vista/post/frmEPost.php";


	}
  
   public function actPost(){

    extract($_POST);
    $r= post_modelo::mdlActPost($titulo,$POST_COMENTARIO,$POST_ID);
     if($r > 0)
			echo"Su registro ha sido editado";


   }

}