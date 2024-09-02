<div class="form">
	<h3 class="modificarTitulo">FORMULARIO DE MODIFICACION</h3>
	<form class="modificarInput" action=".../server/modificacion.php" method="POST" enctype="multipart/form-data">
		<div class="container-select">
			<?php
			echo getUsuarioUsersNamesModificar();
			?>
			<div id="modalModificar" class=""></div>
		</div>

		Campos a modificar:<br>

		<div class="grupo_InputsCambiar">
			<div class="imagenUsuario">
				<img onclick="seleccionarArchivoModificar()" id="imgPerfil.Modificar" src=".../images/fotoPerfil.png"
					alt="">
				<input type="file" name="foto" class="inputFileModificar">
			</div>
			<label class="labe1Input">
					<input type="text" class="cambioInput" id="nombre" placeholder="" name="nombre" required>
					<spam class="spanInput">Nombre de equipo</spam>
				</label>
			<div class="grupoInputsModificar">
				<label class="labelInput">
					<input type="text" class="cambioInput" id="idlider" placeholder="" name="idlider" required>
					<spam class="spanInput">ID Lider</spam>
				</label>
				<label class="labelInput">
					<input type="text" class="cambioInput" id="id2" placeholder="" name="id2" required>
					<spam class="spanInput">ID Jugador 2</spam>
				</label>
				<label class="labelInput">
					<input type="text" class="cambioInput" id="id3" placeholder="" name="id3" required>
					<spam class="spanInput">ID Jugador 3</spam>
				</label>
				<label class="labe1Input">
					<input type="text" class="cambioInput" id="provincia" placeholder="" name="provincia" required>
					<spam class="spanInput">Provincia</spam>
				</label>
				
				<input type="date" id="fecha" placeholder="fecha" name="fecha" required>

				<div class="btn-submit">
					<input type="submit" class="btn-modificar" value="Modificar">
				</div>
			</div>
		</div>
	</form>
</div>