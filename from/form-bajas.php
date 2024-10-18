<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO DE BAJA</title>
    <link rel="stylesheet" href="../css/formBajas.css">
</head>
<body>

<div class="formis-container">
	<h3 class="bajaTitulo" id="bajaForm">FORMULARIO DE BAJA</h3>
	<form class="bajaInput" action="../server/bajas.php" method="POST">
		<div class="grupoInputs">
			<div class="caja-text">
			<label class="text-username" for="userName">Seleccione un nombre de usuario:</label>
			</div>
			<div class="container-select">
				<div id="modal" class=""></div>
			</div>
		</div>

		<div>
			<input class="btn-baja" type="submit" value="Eliminar"><br>
		</div>
	</form>
</div>
	<audio id="errorSound" src="sounds/Voicy_Tick Sound Brawl stars.mp3"></audio>
    <audio id="successSound" src="sounds/Voicy_brawl stars win song meme.mp3"></audio>
    <script src="../js/sonido.js"></script>
	<script src="../js/form-baja.js"></script>
</body>
</html>