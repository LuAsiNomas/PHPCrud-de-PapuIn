<div class="form">
	<h3 class="altaTitulo">TORNEO NACIONAL</h3>
	<form class="altaInput" action="../server/altas.php" method="POST" enctype="multipart/form-data">
		<div class="grupoInputs">
			<img onclick="seleccionarArchivo()" src="" id="logo" alt="">
			<input type="file" class="inputFile" name="foto"><br>
		</div>

		<div class="grupoInputs">
			<input type="text" placeholder="Id de equipo" name="Equipo_ID"><br>
		</div>

		<div class="grupoInputs">
			<input type="text" placeholder="Nombre de equipo" name="nombre_equipo"><br>
		</div>

		<div class="grupoInputs">
			<input type="text" placeholder="Id líder" name="id_jug_lider"><br>
		</div>

		<div class="grupoInputs">
			<input type="text" placeholder="Id jugador 2" name="idjug2"><br>
		</div>

		<div class="grupoInputs">
			<input type="text" placeholder="Id jugador 3" name="idjug"><br>
		</div>

		<div class="grupoInputs">
			<input type="text" placeholder="Provincia" name="provincia"><br>
		</div>

		<div class="btn-submit">
			<input class="btn" type="submit" value="REGISTRAR EQUIPO"><br>
		</div>
	</form>
</div>