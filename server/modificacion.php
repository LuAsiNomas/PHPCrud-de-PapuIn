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

$idl = $_POST['idlider'];
$id2 = $_POST['id2'];
$id3 = $_POST['id3'];
$nom = $_POST['nombre'];
$pro = $_POST['provincia'];
$foto = $_FILES['foto'];
$fototamaño = $_FILES['fototamaño'];

$result = modificar($idl, $id2, $id3, $nom, $pro, $foto, $fototamaño);

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


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<a href="form-modificacion.php">Volver</a>

</body>

</html>