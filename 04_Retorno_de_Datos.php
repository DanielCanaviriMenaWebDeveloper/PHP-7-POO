<?php 
	class RetornoDatos{

		// Metodo para retornan un dato de tipo String
		public function retornaString($edad){
			if($edad >= 18){
				return 'Es mayor de Edad';
			}else{
				return 'No es mayor de Edad';
			}
		}

		// Metodo para retornar un dato de tipo Entero
		public function retornaEntero($valor){
			if($valor>0){
				return 1;
			}else{
				return 0;
			}
		}

		// Metodo para retornar dato de tipo Array
		public function retornaArreglo($ciclos){
			$arreglo = array();
			for($i=0; $i<$ciclos; $i++){
				$arreglo[$i]=$i;
			}
			return $arreglo;
		}

		// Metodo para retornar un dato tipo Json
		public function retornaJson(){
			$arr = array(
				"Monitor" => 10,
				"Teclado" => 5,
				"Mouse" => 24
			);
			return json_encode($arr);
		} 

	}// Fin de la clase

	$objeto = new RetornoDatos();
	
	echo $objeto->retornaString(17);
	echo '<br>';
	var_dump($objeto->retornaString(19));

	echo '<br>';
	echo $objeto->retornaEntero(45);
	echo '<br>';
	var_dump($objeto->retornaEntero(-3));

	echo '<br>';
	print_r($objeto->retornaArreglo(10)); 
	echo '<br>';
	var_dump($objeto->retornaArreglo(10));

	echo '<br>';
	echo $objeto->retornaJson();
	echo '<br>';
	var_dump($objeto->retornaJson());
 ?>