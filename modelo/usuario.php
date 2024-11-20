<?php


function insertar($noe, $idl, $id2, $id3, $pro, $foto, $fototamano)
{
    if ($fototamano > 0) {
        $fp = fopen($foto, "rb");
        $contenido = fread($fp, $fototamano);
        $contenido = addslashes($contenido);
        fclose($fp);


        $Conexion = include("conexion.php");


        $cadena = "INSERT INTO `equipos` ( `nombre_equipo`, `idjug_lider`, `idjug2`, `idjug3`,`logo` , `provincia`) VALUES ( '$noe', '$idl', ' $id2', '$id3', ' $contenido', ' $pro');";


        try {
            $resultado = mysqli_query($Conexion, $cadena);


            if ($resultado) {
                return true;
            }
        } catch (Exception $e) {
            return substr($e, 22, 41);
        }
    } else {
        return false;
    }
}


function getUsuarioUsersNames()
{
    $Conexion = include("conexion.php");
    $cadena = "SELECT equipo_id, nombre_equipo FROM equipos ";


    $consulta = mysqli_query($Conexion, $cadena);
    $html = "<select class='select' style='border-bottom: 1px solid black;
    border-top: 0;
    border-left: 0;
    border-right: 0;
    width:15em;
    font-size:1.5em;
    cursor: pointer' name='userName'><option value=''selected='true' disabled>Seleccione una opcion</option>";




    while ($registro = mysqli_fetch_row($consulta)) {
        $html = $html . '<option value="' . $registro[0] . '">" ' . $registro[0] . ' ' . $registro[1] . '</option>';
    }
    $html = $html . "</select>";
    return $html;
}


function getUsuarioUsersNamesModificar()
{
    $Conexion = include("conexion.php");
    $cadena = "SELECT equipo_id, nombre_equipo FROM equipos ";


    $consulta = mysqli_query($Conexion, $cadena);
    $html = "<select class='selectModificar' onchange='cambioSelect(event)' style='border-bottom: 1px solid black;
    border-top: 0;
    border-left: 0;
    border-right: 0;
    width:15em;
    font-size:1.5em;
    box-shadow: 0 4px 10px rgba(148, 3, 3, 0.511);
    color: #000000;
    font-size: 31px;
    border-radius: 10px;
    border: 2px solid #970303;
    position:relative;
    bottom: 60px;
    cursor: pointer' name='usuario'><option value=''selected='true' disabled>Seleccione una opcion</option>";




    while ($registro = mysqli_fetch_row($consulta)) {
        $html = $html . '<option value="' . $registro[0] . '"> ' . $registro[0] . ' ' . $registro[1] . '</option>';
    }
    $html = $html . "</select>";
    return $html;
}


function getUsuarioUserName($userName)
{
    $Conexion = include("conexion.php");
    $cadena = "SELECT * FROM equipos WHERE equipo_id =" . $userName;
    $consulta = mysqli_query($Conexion, $cadena);
    $array = array();
    while ($registro = mysqli_fetch_row($consulta)) {
        array_push($array, array('equipo_id' => $registro[0], 'nombre_equipo' => $registro[1], 'idjug_lider' => $registro[2], 'idjug2' => $registro[3], 'idjug3' => $registro[4], 'foto' => base64_encode($registro[5]), 'provincia' => $registro[6]));
    }
    return $array;
}


function getUsuarioUserNames()
{
    $Conexion = include("conexion.php");
    $cadena = "SELECT equipo_id FROM equipos ";
    $consulta = mysqli_query($Conexion, $cadena);
    $array = array();
    while ($registro = mysqli_fetch_row($consulta)) {
        array_push($array, array('equipo_id' => $registro[0]));
    }
    return $array;
}


function deleteUser($userName)
{
    $Conexion = include("conexion.php");
    $cadena = "DELETE FROM equipos  WHERE equipo_id = '$userName'";
    $resultado = mysqli_query($Conexion, $cadena);


    return $resultado;
}


function modificar($idl, $id2, $id3, $nom, $pro)
{


    $Conexion = include("conexion.php");


    $cadena = "UPDATE  equipos SET equipo_id = '$idl', idjug_lider = '$id2', idjug2 = '$id3', idjug3 = '$nom' = nombre_equipo, '$pro' = provincia WHERE equipo_id";


    try {
        $resultado = mysqli_query($Conexion, $cadena);
        if ($resultado) {
            return true;
        }
    } catch (Exception $e) {
        return substr($e, 22, 41);
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
