<?php
class inicio_controlador{

	public function index(){
		//  ?controlador=inicio&accion=index&cat_id=xxxx
		$datos = inicio_modelo::mdlListarCategorias();
		require_once "Vista/inicio/index.php";
	}
}
