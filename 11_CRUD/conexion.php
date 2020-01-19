<?php 
	class Conectar{
		private $servidor = "localhost";
		private $usuario = "root";
		private $password = "";
		private $bd = "crudpoo";
		
		public function conexion(){
			$conexion = mysqli_connect($this->servidor,$this->usuario,$this->password,$this->bd);
			return $conexion;
		}
	}

	// Codigo para verificar si existe conexión 
	/*
		$obj = new Conectar();
		if($obj->conexion()){
			echo 'Conectado con exito';
		}else{
			echo 'Conexion sin exito';
		}
	*/
 ?>