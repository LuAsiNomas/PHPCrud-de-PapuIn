<div class="form">
	<h3 class="altaTitulo">TORNEO NACIONAL</h3>
	<form class="altaInput" action="../server/altas.php" method="POST" enctype="multipart/form-data">
		<div class="grupoInputs">
			<img onclick="seleccionarArchivo()" src="" id="logo" alt="">
			<input type="file" class="inputFile" name="foto" required="Ponga logo"><br>
		</div>

		<div class="grupoInputs">
			<input type="text" placeholder="Id de equipo" name="Equipo_ID" required="Texto vacío"><br>
		</div>

		<div class="grupoInputs">
			<input type="text" placeholder="Nombre de equipo" name="nombre_equipo" required="Texto vacío"><br>
		</div>

		<div class="grupoInputs">
			<input type="text" placeholder="Id líder" name="id_jug_lider" required="Texto vacío"><br>
		</div>

		<div class="grupoInputs">
			<input type="text" placeholder="Id jugador 2" name="idjug2" required="Texto vacío"><br>
		</div>

		<div class="grupoInputs">
			<input type="text" placeholder="Id jugador 3" name="idjug" required="Texto vacío"><br>
		</div>

		<div class="grupoInputs">
			<input type="text" placeholder="Provincia" name="provincia" required="Texto vacío"><br>
		</div>

		<div class="btn-submit">
			<input class="btn" type="submit" value="REGISTRAR EQUIPO"><br>
		</div>
	</form>
</div>