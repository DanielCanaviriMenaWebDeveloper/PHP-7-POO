<?php 
	class miClase{
		public $mensaje = 1;

		public function hola(){
			return 'Hola';
		}
		public static function metodo(){
			return $this->mensaje;
		}

		public static function metodo2(){
			return self::hola();
		}
	}

	/*
		Se recomiendo usar intancias directas para metodos estaticos
		y para metodos publicos, privados y protegidos crear instancias de un objeto para su manipulación.
	*/
	echo miClase::metodo2();

	// Al ser un metodo estatico no permite acceder a los atributos 
	// de la clase.
	$objeto = new miClase();
	echo $objeto->metodo();







 ?>