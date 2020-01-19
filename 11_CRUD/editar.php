<?php 
	require_once "conexion.php";
	$obj = new Conectar();
	$con = $obj->conexion();
	// Forma de obtener el valor del parametro enviado por URL
	$id = $_GET['id'];
	$sql = "SELECT nombre, apellido from t_persona where id = '$id'";
	$result = mysqli_query($con, $sql);
	// Obtiene una fila de resultados como un array númerico
	$array = mysqli_fetch_row($result);
 ?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Editar</title>
		<style>
			table {
				box-shadow: 10px 10px 5px;
				border-collapse: collapse;
				margin: 50px auto;
			}

			td, th {
				border: 2px solid red;
				padding: 10px;
				text-align: center;
			}

			h1 {
				text-align: center;
			}

			form {
				border: 2px solid;	
				box-shadow: 10px 10px 5px;
				margin: 0px auto;
				
				width: 200px;
				padding: 10px;
			}

		</style>
	</head>
	<body>
		<h1>EDITAR REGISTRO</h1>
		<form action="PROCESOS/actualizar.php" method="post">
			<input type="text" hidden="" name="id" value="<?php echo $id ?>">
			<label for="">Nombre</label>
			<p></p>
			<input type="text" name="txtNombre" value="<?php echo $array[0] ?>">
			<p></p>
			<label for="">Apellido</label>
			<p></p>
			<input type="text" name="txtApellido" value="<?php echo $array[1] ?>">
			<p></p>
			<button>Actualizar</button>
		</form>
	</body>
</html>