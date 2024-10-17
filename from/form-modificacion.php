<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO DE MODIFICACION</title>
    <link rel="stylesheet" href="../css/formModificacion.css">
</head>
<body>
<div class="form">
	<h3 class="modificarTitulo">FORMULARIO DE MODIFICACION</h3>
	<form class="modificarInput" action="../server/modificacion.php" method="POST" enctype="multipart/form-data">
		<div class="container-select">
			<div id="modalModificar" class=""></div>
		</div>
		<div class="campo-modificar">
		<br> Campos a modificar:</br>
		</div>

		<div class="grupoInputsCambiar">
			<div class="imagenUsuario">
				<img onclick="seleccionarArchivoModificar()" id="imgPerfilModificar" src="../images/fotoPerfil.png"
					alt="">
				<input type="file" name="foto" class="inputFileModificar">
			</div>
			<label class="labelInput">
					<input type="text" class="cambioInput" id="nombre" placeholder="Nombre de equipo" name="nombre" required>
				</label>
			<div class="grupoInputsModificar">
				<label class="labelInput">
					<input type="text" class="cambioInput" id="idlider" placeholder="ID Lider" name="idlider" required>
				</label>
				<label class="labelInput">
					<input type="text" class="cambioInput" id="id2" placeholder="ID Jugador 2" name="id2" required>
				</label>
				<label class="labelInput">
					<input type="text" class="cambioInput" id="id3" placeholder="ID Jugador 3" name="id3" required>
				</label>
				<label class="labelInput">
					<input type="text" class="cambioInput" id="provincia" placeholder="Provincia" name="provincia" required>
					<spam class="spanInput"></spam>
				</label>
				
				<div class="btn-submit-modificar">
					<input type="submit" class="btn-modificar" value="Modificar">
				</div>
			</div>
		</div>
	</form>
</div>