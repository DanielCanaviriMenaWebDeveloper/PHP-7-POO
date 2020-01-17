<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Calculadora con POO en PHP</title>
	</head>
	<body>
		<form action="procesar.php" method="post">
			<label>Valor 1</label>
			<p></p>
			<input type="text" name="val1">
			<p></p>
			<label>Valor 2</label>
			<p></p>
			<input type="text" name="val2">
			<p></p>
			<select name="opcion">
				<option value="suma">Suma</option>
				<option value="resta">Resta</option>
				<option value="multiplicacion">Multiplicación</option>
				<option value="division">División</option>
			</select>
			<p></p>
			<button>Calcular</button>
		</form>
	</body>
</html>
