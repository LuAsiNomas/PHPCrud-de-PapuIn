<?php

function insertar($ide, $noe, $idl, $id2, $id3, $pro, $foto, $fototamaño) {

    if ($fototamaño > 0) {
        $fp = fopen($foto, "rb");
        $contenido = fread($fp, $fototamaño);
        $contenido = addslashes($contenido);
        fclose($fp);

         $Conexion = include("conexion.php");

         $cadena = "INSERT INTO equipos(Equipo_ID, nombre_equipo, id_jugador_lider, idjug2, idjug3, provincia, foto, fototamaño) VALUES ($ide, $noe, $idl, $id2, $id3, $pro, $foto, $fototamaño)";
         try {
            $resultado = mysqli_query($Conexion, $cadena);

            if ($resultado) {
                return true;
            }
        } catch (Exception $e) {
            return substr($e, 22, 41);
        }

}
}

function getUsuarioUsersNames()
{
    $Conexion = include("conexion.php");
    $cadena = "SELECT idlider FROM equipos ";

    $consulta = mysqli_query($Conexion, $cadena);
    $html = "<select class='select' style='border-bottom: 1px solid black;
    border-top: 0;
    border-left: 0;
    border-right: 0;
    width:15em;
    font-size:1.5em;
    cursor: pointer' name='userName'><option value=''selected='true' disabled>Seleccione una opcion</option>";


    while ($registro = mysqli_fetch_row($consulta)) {
        $html = $html . "<option value=" . $registro[0] . ">" . $registro[0] . "</option>";
    }
    $html = $html . "</select>";
    return $html;
}

function getUsuarioUsersNamesModificar()
{
    $Conexion = include("conexion.php");
    $cadena = "SELECT idlider FROM equipos ";

    $consulta = mysqli_query($Conexion, $cadena);
    $html = "<select class='selectModificar' style='border-bottom: 1px solid black;
    border-top: 0;
    border-left: 0;
    border-right: 0;
    width:15em;
    font-size:1.5em;
    cursor: pointer' name='usuario'><option value=''selected='true' disabled>Seleccione una opcion</option>";


    while ($registro = mysqli_fetch_row($consulta)) {
        $html = $html . "<option value=" . $registro[0] . ">" . $registro[0] . "</option>";
    }
    $html = $html . "</select>";
    return $html;
}

function getUsuarioUserName($userName)
{
    $Conexion = include("conexion.php");
    $cadena = "SELECT * FROM equipos WHERE idlider ='" . $userName . "'";
    $consulta = mysqli_query($Conexion, $cadena);
    $array = array();
    while ($registro = mysqli_fetch_row($consulta)) {
        array_push($array, array('id' => $registro[0], 'apellido' => $registro[1], 'nombre' => $registro[2], 'fecha' => $registro[3], 'foto' => base64_encode($registro[4]), 'usuario' => $registro[5], 'clave' => $registro[6]));
    }
    return $array;
}

function getUsuarioUserNames()
{
    $Conexion = include("conexion.php");
    $cadena = "SELECT idlider FROM equipos ";
    $consulta = mysqli_query($Conexion, $cadena);
    $array = array();
    while ($registro = mysqli_fetch_row($consulta)) {
        array_push($array, array('idlider' => $registro[0]));
    }
    return $array;
}

function deleteUser($userName)
{
    $Conexion = include("conexion.php");
    $cadena = "DELETE FROM equipos  WHERE idlider = '$userName'";
    $resultado = mysqli_query($Conexion, $cadena);

    return $resultado;
}

function modificar($idl, $id2, $id3, $nom, $pro, $foto, $fototamaño) {

    if ($fototamaño > 0) {
        $fp = fopen($foto, "rb");
        $contenido = fread($fp, $fototamaño);
        $contenido = addslashes($contenido);
        fclose($fp);

   
    $Conexion = include("conexion.php");

        $cadena = "UPDATE  equipos SET idlider = '$idl', id2 = '$id2', id3 = '$id3', nombre = '$nom', WHERE provincia = '$pro', foto = '$foto', fotomaño = '$fototamaño'";

        try {
            $resultado = mysqli_query($Conexion, $cadena);
            if ($resultado) {
                return true;
            }
        } catch (Exception $e) {
            return substr($e, 22, 41);
        }
   
}
}

function listar()
{
    $Conexion = include("conexion.php");
    $cadena = "SELECT * FROM equipos ";

    $consulta = mysqli_query($Conexion, $cadena);
    $htmlListar = "";

    while ($registro = mysqli_fetch_row($consulta)) {
        $htmlListar = $htmlListar . '<div class="container-listar"><img src="data:image/jpeg;base64,' .
            base64_encode($registro[4]) . '" width="200px" height="200px">
            <h3>' . $registro[5] . '</h3>
            <h3>' . $registro[1] . ' ' . $registro[2] . '</h3>
            <h2>' . $registro[3] . ' </h2></div>';
    }

    return $htmlListar;
}

?>