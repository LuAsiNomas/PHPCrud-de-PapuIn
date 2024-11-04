<?php
// Conexión a la base de datos

include("../modelo/usuario.php");
include("../modelo/fixture.php");

$conexion = new mysqli("localhost", "root", "", $base);
$base = "basarda";

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Obtener equipos aleatoriamente de la base de datos
$sql = "SELECT logo, nombre_lider, integrantes FROM equipos ORDER BY RAND() LIMIT 8";
$resultado = $conexion->query($sql);

$equipos = [];
if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        $equipos[] = $fila;
    }
}

// Cerrar conexión
$conexion->close();
?>