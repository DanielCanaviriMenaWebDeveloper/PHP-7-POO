<?php 
	class Metodos{

		// Metodo que recibe un valor el cual es evaluado.
		public function mandarColor($valor){
			if($valor == 1){
				return 'Rojo';
			}elseif ($valor == 2){
				return 'Amarillo';
			}elseif ($valor == 3){
				return 'Verde';
			}
		}

		public function darDeAltaColor($color){
			// Esta seria la forma tradicional de usar un metodo dentro de otro 
			# $object = new Metodos();
			# return $object->mandarColor($color);

			// Haciendo uso de self se llega al mismo resultado con menos lineas de código
			return self::mandarColor($color);
		}
	}

	$objeto = new Metodos();
	echo $objeto->darDeAltaColor(3);

 ?>