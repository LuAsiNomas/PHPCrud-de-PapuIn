<?php

function insertar($ide, $noe, $idl, $id2, $id3, $pro){
    
         $Conexion = include("conexion.php");

        $cadena = "INSERT INTO equipos(Equipo_ID, nombre_equipo, id_jugador_lider, idjug2, idjug3, provincia) VALUES ($ide, $noe, $idl, $id2, $id3, $pro)";
        try {
            $resultado = mysqli_query($Conexion, $cadena);

            if ($resultado) {
                return true;
            }
        } catch (Exception $e) {
            return substr($e, 22, 41);
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
        $html = $html . '<option value="' . $registro[0] . '">" '. $registro[0] .' ' . $registro[1] . '</option>';
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
    cursor: pointer' name='usuario'><option value=''selected='true' disabled>Seleccione una opcion</option>";


    while ($registro = mysqli_fetch_row($consulta)) {
        $html = $html . '<option value="' . $registro[0] . '"> '. $registro[0] .' ' . $registro[1] . '</option>';
    }
    $html = $html . "</select>";
    return $html;
}

function getUsuarioUserName($userName)
{
    $Conexion = include("conexion.php");
    $cadena = "SELECT * FROM equipos WHERE equipo_id =". $userName ;
    $consulta = mysqli_query($Conexion, $cadena);
    $array = array();
    while ($registro = mysqli_fetch_row($consulta)) {
        array_push($array, array('foto' => base64_encode($registro[4]), 'equipo_id' => $registro[0], 'nombre_equipo' => $registro[1], 'idjug_lider' => $registro[2], 'idjug2' => $registro[3], 'idjug3' => $registro[5], 'provincia' => $registro[6]));
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

function modificar($idl, $id2, $id3, $nom, $pro) {
   
    $Conexion = include("conexion.php");

        $cadena = "UPDATE  equipos SET equipo_id = '$idl', idjug_lider = '$id2', idjug2 = '$id3', idjug3 = '$nom' = nombre_equipo, '$pro' = provincia WHERE equipo_id = '$ide'";

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