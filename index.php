<?php

session_start();
require_once("conexion.php");
if(isset($_GET['controlador']) && isset($_GET['accion'])){
	$controlador = $_GET['controlador'];
	$accion      = $_GET['accion'];
}else{
	$controlador = "inicio";
	$accion      = "index";
}
$url = "http://".$_SERVER["HTTP_HOST"]."/APPBLOG";
require_once "Vista/plantilla.php";




// $i  = new conexion();
// $c = $i->conectar(); 
// $sql = "SELECT * FROM T_USUARIOS";
// $s   = $c->prepare($sql);
// $s->setFetchMode(PDO::FETCH_ASSOC);
// $s->execute();
// // Creamos un vector llamado datos
// // que contiene todos los registross
// $datos = $s->fetchAll();
// var_dump($datos);
