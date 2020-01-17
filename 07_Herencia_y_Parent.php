<?php 

	/*
		La herencia es obtener todas las propiedades de una
		clase a otra mediante la palabra reservada extends
	*/

	class ClasePadre{

		public function metodoPadre(){
			return 'Hola desde el padre';
		}

		public function metodoPadre2(){
			return 'Hola desde la clase padre';
		}

		public function metodoPadre3(){
			return 'Hola desde la clase padre y el metodo padre';
		}
	}

	class ClaseHijo extends ClasePadre{

	}

	$obj = new ClaseHijo();

	echo $obj->metodoPadre();

	// Instancia rapida o de doble puntuación
	class ClaseHijo2 extends ClasePadre{

	}

	echo '<br>';
	echo ClasePadre::metodoPadre2();

	// Ejemplo de uso de la propiedad parent

	class ClaseHijo3 extends ClasePadre{

		public function metodoHijo(){
			return self::metodoPadre3();
		}

		public function metodoHijo2(){
			return parent::metodoPadre3();
		}

		public function metodoPadre3(){
			return 'Este es un metodo hijo';
		}
	}

	// Al utilizar self ocupamos el metodo de la misma clase
	echo '<br>';
	echo ClaseHijo3::metodoHijo();

	// Al utilizar parent ocupamos el metodo de la clase padre
	echo '<br>';
	echo ClaseHijo3::metodoHijo2();

	/* 
		Nota: Esto en caso que se quiera utilizar metodos
		dentro de otros metodos, pero que tengan el mismo
		nombre en la clase padre e hijo mejor usar parent 
		en caso se quiera ocupar el metodo de la clase padre
		y no de la clase hijo .
	*/
 ?>