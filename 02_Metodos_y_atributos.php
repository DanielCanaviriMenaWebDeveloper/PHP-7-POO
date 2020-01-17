<?php 
	class MyClase {

		// Declarando Atributos
		public $atributo = "Hola Mundo";

		// Declarando Metodos
		public function miMetodo() {
			// Forma de llamar a un atributo dentro el metodo mediante la pseudo variables this
			return $this->atributo;
		}

	}
 ?>