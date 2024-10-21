<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server altas</title>
    <link rel="stylesheet" href="../css/respuesta-alta.css">
</head>

<?php

include("../modelo/usuario.php");

$ide = $_POST['Equipo_ID'];
$noe = $_POST['nombre_equipo'];
$idl = $_POST['id_jug_lider'];
$id2 = $_POST['idjug2'];
$id3 = $_POST['idjug3'];
$pro = $_POST['provincia'];
$foto = $_FILES['foto']['tmp_name'];
$fototamaño = $_FILES['foto']['size'];

$result = insertar($ide, $noe, $idl, $id2, $id3, $pro, $foto, $fototamaño);

if (strlen($result) > 5) {
    echo '<div class="Rcontainer">
    <div class="Rbox">
        <h2 class="Rtitulo">Esta es una respuesta del servidor</h2>
        <h3 class="Rcuerpo">' . $result . '</h3>
        <a href="../from/menu.php" class="cerrar">Cerrar</a>
    </div>
</div>';
} else {
    return include("../from/respuestas-server/respuesta-alta.php");
}
?>