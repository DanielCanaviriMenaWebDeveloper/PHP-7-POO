<?php

	/*
		****** MÉTODOS PROTEGIDOS(PROTECTED) ******
		Los métodos protegidos solo pueden ser accedidos desde
		herencia de clases o solo desde clases hijas y debe ser
		utilizado por un metodo de una clase hija.
	*/ 
	class ClasePadre{
		protected function metodo1(){
			return 'Metodo protegido';
		}
	}


	class ClaseHija extends ClasePadre{
		public function muestra(){
			return parent::metodo1();
		}
	}

	echo ClaseHija::muestra();
	# echo ClasePadre::metodo1(); //No permitido 


	class Padre2{
		protected function metodo2(){
			echo 'Este es el metodo 2';
		}

		public function metodoMostrar(){
			return self::metodo2();
		}
	}

	echo '<br>';
	echo Padre2::metodoMostrar();

	/*
		De la misma forma podemos observar que el metodo protegido 
		puede ser accedido solo por otro metodo de la misma clase.
	*/

	
 ?>