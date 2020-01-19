<?php 
	require_once '../conexion.php';
	require_once '../metodosCrud.php';

	$nombre = $_POST['txtNombre'];
	$apellido = $_POST['txtApellido'];

	$datos = array($nombre, $apellido);

	$obj = new Metodos();

	if($obj->insertarDatosNombre($datos) == 1){
		header("location:../index.php");
	}else{
		echo "No se realizo la inserción correctamente";
	}

 ?>