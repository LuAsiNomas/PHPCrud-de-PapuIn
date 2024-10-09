<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO DE BAJA</title>
    <link rel="stylesheet" href="/css/formBajas.css">
</head>
<body>

<div class="formis">
	<h3 class="bajaTitulo">FORMULARIO DE BAJA</h3>
	<form class="bajaInput" action="../server/bajas.php" method="POST">
		<div class="grupoInputs">
			<label for="userName">Seleccione un nombre de usuario:</label>
			<div class="container-select">
				<div id="modal" class=""></div>
			</div>
		</div>

		<div class="btn-baja">
			<input type="submit" value="Eliminar"><br>
		</div>
	</form>
</div>
	<script src="../js/form-baja.js"></script>
</body>
</html>