<?php 
	require_once "conexion.php";
	require_once "metodosCrud.php";
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>CRUD CON PHP</title>
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
		<h1>CRUD CON PHP</h1>
		<form action="PROCESOS/insertar.php" method="post">
			<label for="">Nombre</label>
			<p></p>
			<input type="text" name="txtNombre">
			<p></p>
			<label for="">Apellido</label>
			<p></p>
			<input type="text" name="txtApellido">
			<p></p>
			<button>INSERTAR REGISTRO</button>
		</form>
		<br><br>
		<table id="estilo">
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Actualizar</th>
				<th>Eliminar</th>
			</tr>

			<?php 
				$obj = new Metodos();
				$sql = "SELECT id, nombre, apellido from t_persona";
				$datos = $obj->mostrarDatos($sql);

				foreach ($datos as $key) {
			?>
			<tr>
				<td><?php echo $key['id']; ?></td>
				<td><?php echo $key['nombre']; ?></td>
				<td><?php echo $key['apellido']; ?></td>
				<!-- Forma de enviar un parametro mediante la URL -->
				<td>
					<a href="editar.php?id=<?php echo $key["id"] ?>">
						Editar
					</a>
				</td>
				<td>
					<a href="PROCESOS/eliminar.php?id=<?php echo $key["id"] ?>">
						Eliminar
					</a>
				</td>
			</tr>

			<?php 
				}
			?>
		</table>
	</body>
</html>

