<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fixture.css">
</head>
<body>
<div class="fixture-container">
    <h3 class="modificarTitulo">FIXTURE</h3>
    <div class="left-side">
        <?php for ($i = 0; $i < 4; $i++): 
        
        include("../modelo/usuario.php");

        $foto = $_FILES['foto'];
        $noe = $_POST['nombre_equipo'];
        $idl = $_POST['idlider'];
        $id2 = $_POST['idjug2'];
        $id3 = $_POST['idjug3'];
        $fototamaño = $_FILES['fototamaño'];?>
        
            <div class="team-card">
                <img src="<?php echo $equipos[$foto]['logo']; ?>" alt="Logo del equipo" class="team-logo">
                <h3><?php echo $equipos[$noe]['nombre_equipo']; ?></h3>
                <p><?php echo $equipos[$id1]['idlider']; ?></p>
                <p><?php echo $equipos[$id2]['idjug2']; ?></p>
                <p><?php echo $equipos[$id3]['idjug3']; ?></p>
            </div>
        <?php endfor; ?>
    </div>
    <div class="right-side">
        <?php for ($i = 4; $i < 8; $i++): 

            include("../modelo/usuario.php");
        
            $foto = $_FILES['foto'];
            $noe = $_POST['nombre_equipo'];
            $idl = $_POST['idlider'];
            $id2 = $_POST['idjug2'];
            $id3 = $_POST['idjug3'];
            $fototamaño = $_FILES['fototamaño'];?>

            <div class="team-card">
                <img src="<?php echo $equipos[$foto]['logo']; ?>" alt="Logo del equipo" class="team-logo">
                <h3><?php echo $equipos[$noe]['nombre_equipo']; ?></h3>
                <p><?php echo $equipos[$id1]['idlider']; ?></p>
                <p><?php echo $equipos[$id2]['idjug2']; ?></p>
                <p><?php echo $equipos[$id3]['idjug3']; ?></p>
            </div>
        <?php endfor; ?>
    </div>
</div>
</div>	
</body>
</html>