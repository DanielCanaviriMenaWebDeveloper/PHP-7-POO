<?php 

	/*
		****** MÉTODOS PRIVADOS ******
		Un método privado, solo puede ser accedido en la misma clase
		donde fue creado, no puede ser manejado fuera de la clase
		solo por un metodo de la misma clase.
	*/
	class Clase1{

		private function saludar(){
			return 'Saludo';
		}

		public function mandaSaludo(){
			return self::saludar();
		}
	}

	/*
		El método saludar es privado y no podra ser accedido
		fuera de la clase, solo dentro un método de la misma
		clase. 
	*/
	# echo Clase1::saludar(); # Esta linea de codigo dara error.

	echo '<br>';

	/*
		El metodo saluda es privado pero es usado dentro el metodo
		mandaSaludo de la misma clase lo cual permitira su acceso. 
	*/
	echo Clase1::mandaSaludo();

 ?>