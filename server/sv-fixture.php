<//?php
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
<//h3 class="modificarTitulo">FIXTURE<///h3>
<//div class="left-side">
        <//?php for ($i = 0; $i < 4; $i++): 
        
        include("../modelo/usuario.php");

        $foto = $_FILES['foto'];
        $noe = $_POST['nombre_equipo'];
        $idl = $_POST['idlider'];
        $id2 = $_POST['idjug2'];
        $id3 = $_POST['idjug3'];
        $fototamaño = $_FILES['fototamaño'];?>
        
        <//div class="team-card">
                <//img src="<//?php echo $equipos[$foto]['logo']; ?>" alt="Logo del equipo" class="team-logo">
        <//h3><//?php echo $equipos[$noe]['nombre_equipo']; ?><///h3>
        <//p><//?php echo $equipos[$id1]['idlider']; ?><///p>
        <//p><//?php echo $equipos[$id2]['idjug2']; ?><///p>
        <//p><//?php echo $equipos[$id3]['idjug3']; ?><///p>
            <///div>
        <//?php endfor; ?>
    <///div>
        <//div class="right-side">
        <//?php for ($i = 4; $i < 8; $i++): 

            include("../modelo/usuario.php");
        
            $foto = $_FILES['foto'];
            $noe = $_POST['nombre_equipo'];
            $idl = $_POST['idlider'];
            $id2 = $_POST['idjug2'];
            $id3 = $_POST['idjug3'];
            $fototamaño = $_FILES['fototamaño'];?>

        <//div class="team-card">
                <//img src="<//?php echo $equipos[$foto]['logo']; ?>" alt="Logo del equipo" class="team-logo">
        <//h3><//?php echo $equipos[$noe]['nombre_equipo']; ?><///h3>
        <//p><//?php echo $equipos[$id1]['idlider']; ?><///p>
        <//p><//?php echo $equipos[$id2]['idjug2']; ?><///p>
        <//p><//php echo $equipos[$id3]['idjug3']; ?><///p>
            <///div>
        <//?php endfor; ?>
    <///div>