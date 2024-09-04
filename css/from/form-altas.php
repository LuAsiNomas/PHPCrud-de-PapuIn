<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Equipo - Torneo Nacional</title>
    <link rel="stylesheet" href="../css/formAltas.css">
</head>
<body>
    <div class="form-container">
        <h3 class="form-title">TORNEO NACIONAL</h3>
        <form class="form-content" action="../server/altas.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <img onclick="seleccionarArchivo()" src="" id="logo" alt="Logo del equipo">
                <input type="file" class="input-file" name="foto" required>
            </div>

            <div class="form-group">
                <input type="text" placeholder="Nombre de equipo" name="nombre_equipo" required>
            </div>

            <div class="form-group">
                <input type="text" placeholder="Id líder" name="id_jug_lider" required>
            </div>

            <div class="form-group">
                <input type="text" placeholder="Id jugador 2" name="idjug2" required>
            </div>

            <div class="form-group">
                <input type="text" placeholder="Id jugador 3" name="idjug" required>
            </div>

            <div class="form-group">
                <input type="text" placeholder="Provincia" name="provincia" required>
            </div>

            <div class="form-group">
                <input class="btn-submit" type="submit" value="REGISTRAR EQUIPO">
            </div>
        </form>
    </div>
</body>
</html>