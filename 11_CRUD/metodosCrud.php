<?php 

	class Metodos{

		public function mostrarDatos($sql){

			// Instanciamos la clase Conectar 
			$c = new Conectar();
			// Realizamos la conexión con la BD definida en el metodo conexion de la clase Conectar
			$con = $c->conexion();
			/*
				mysqli_query : Metodo que nos permite realizar una consulta a la BD este recibe
				2 parametros que son la variable de conexión y la cadena de texto donde esta definida la consulta SQL.
			*/
			$result = mysqli_query($con, $sql);

			/*
				mysqli_fetch_all : Obtiene todas las filas en un array en un solo paso
				MSQLI_ASSOC : Define que el array sea un array asociativo
			*/
			return mysqli_fetch_all($result, MYSQLI_ASSOC);
		}


		// Este metodo recibira como parametro un array que contendra los datos en cada una de sus posiciones
		public function insertarDatosNombre($datos){
			$c = new Conectar();
			$con = $c->conexion();
			$sql = "INSERT into t_persona (nombre, apellido) values ('$datos[0]', '$datos[1]')";

			// Si la inserción se realizo correctamente regresa el valor 1
			return $result = mysqli_query($con, $sql);
		}

		public function actualizaDatosNombre($datos){
			$c = new Conectar();
			$con = $c->conexion();
			$sql = "UPDATE t_persona set nombre='$datos[0]', apellido='$datos[1]' where id='$datos[2]'";
			return $result = mysqli_query($con, $sql);
		}

		public function eliminarDatosNombre($id){
			$c = new Conectar();
			$con = $c->conexion();
			$sql = "DELETE from t_persona where id='$id'";
			return $result = mysqli_query($con, $sql);
		}


	}

 ?>