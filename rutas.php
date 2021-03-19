<?php
function cargarContenido($cnt , $accion){
    require_once "Controlador/".$cnt."_controlador.php";
    $clase = $cnt."_controlador";
    $obj = new $clase();
    require_once "Modelo/".$cnt."_modelo.php";
    $obj->$accion();
}
// Registrar cnt y acciones
$cnts = array(
	"inicio"  => array("index"),
    "usuario" => array("frmRUsuario","frmEUsuario",
    	"frmISUsuario","verificarUsuario",
    	"cerrarSession","regUsuario"),

	"post"=> array("frmRPost","listarPost","regPost", "eliminarPost","frmEPost", "actPost"),
	"comentario" => array("frmRCom","index","regCom"),
	"categoria"  => array("index","frmRCategoria","regCategoria","eliminar","frmECategoria","actCategoria")

	);
if(array_key_exists($controlador, $cnts)){
	 if(in_array($accion, $cnts[$controlador])){
	 	  cargarContenido($controlador, $accion);
	 }else{
	 	echo "Error: 02 esta accion no existe";
	 }
}else{
     echo "Error: 01 esta seccion  no existe";
}


