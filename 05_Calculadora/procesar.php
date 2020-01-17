<?php 
	require_once "claseCalculo.php";
	$calcular = new Calculadora();

	$val1 = $_POST['val1'];
	$val2 = $_POST['val2'];
	$opcion = $_POST['opcion'];

	$resultado = $calcular->calcularDatos($val1, $val2, $opcion);

	echo "La ".$opcion." de ".$val1." y ".$val2." es : ".$resultado;

 ?>