<?php
class categoria_controlador{
	
	public function __construct(){}

	public function index(){
		$datos = categoria_modelo::mdlListarCategorias();
		require 'Vista/categoria/index.php';
	}

	public function frmRCategoria(){
		require_once 'Vista/categoria/frmRCategoria.php';
	}

	public function regCategoria(){
		extract($_POST);
		$r = categoria_modelo::mdlRegCategoria($nombre);
		if($r == 1 ){
			echo "Categoria Registrada";
		}
	}
	public function eliminar(){
		echo $_GET['id'];
		$r= categoria_modelo::mdleliminar($_GET['id']);
		if($r > 0)
			echo"Su registro ha sido eliminado";
		
	}
	public function frmEcategoria(){
   $r = categoria_modelo::mdlBuscarCategoria($_GET['id']);
  // var_dump($r);
   require_once "Vista/categoria/frmECategoria.php";


	}
  
   public function actCategoria(){

    extract($_POST);
    $r= categoria_modelo::mdlActCat($nombre,$id);
     if($r > 0)
			echo"Su registro ha sido editado";


   }


}
