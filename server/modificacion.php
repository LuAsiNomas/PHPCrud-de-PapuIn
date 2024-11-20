<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Server modificacion</title>
	<link rel="stylesheet" href="../css/respuesta-alta.css">
</head>

<?php


include("../modelo/usuario.php");

$nom = $_POST['nombre_equipo'];
$idl = $_POST['idjug_lider'];
$id2 = $_POST['idjug2'];
$id3 = $_POST['idjug3'];
$pro = $_POST['provincia'];

$result = modificar( $nom, $idl, $id2, $id3, $pro);

if (!$result) {
	echo '<div class="Rcontainer">
    <div class="Rbox">
        <h2 class="Rtitulo">Esta es una respuesta del servidor</h2>
        <h3 class="Rcuerpo">' . $result . '</h3>
        <a href="../index.php" class="cerrar">Cerrar</a>
    </div>
</div>';
} else {
	return include("../from/respuestas-server/respuesta-modificar.php");
}
?>