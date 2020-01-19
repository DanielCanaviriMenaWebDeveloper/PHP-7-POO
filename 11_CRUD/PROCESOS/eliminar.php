<?php 
	$id = $_GET['id'];
	
	require_once "../conexion.php";
	require_once "../metodosCrud.php";

	$obj = new Metodos();
	if($obj->eliminarDatosNombre($id)==1){
		header("location:../index.php");
	}else{
		echo "No se pudo eliminar el registro";
	}

 ?>