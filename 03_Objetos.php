<?php 
	class MyClase {
		// Mis atributos
		public $resultado = 0;

		// Mis metodos
		public function miMetodo($v1, $v2){
			$this->resultado = $v1 + $v2;
			return $this->resultado;
		}
	}// Termina mi Clase

	// Instanciar o Declarar un Objeto

	$miObjeto = new MyClase();

	echo $miObjeto->miMetodo(6,5);


 ?>