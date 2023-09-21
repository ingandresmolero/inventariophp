<?php

include("../php/functions/validar.php");

include("../php/functions/tasa.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Pingus Sys</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.png">

    <link rel="stylesheet" href="../css/styles.css">

</head>
<body id="dashboard">
    <?php
    include("assets/headersintasa.php");
    ?>
<?php
if ($rol != 'master') { ?>
<!-- OTRO USUARIO -->
<section class="container">

        <div class="elements">

            <a href="tracking.php" class="item">

                <img src="../img/icons/inventario.png">
                <p class="card-title">Tracking</p>
            </a>
            <a href="busqueda.php" class="item">
                <img src="../img/icons/operaciones.png">
                <p class="card-title">Busqueda</p>
    
            </a>
            <a href="reportes.php" class="item">
    
                <img src="../img/icons/inventario.png">
                <p class="card-title">Reportes</p>
            </a>
        </div>
        
        <div class="elements">
            
            <a href="vista_tecnica.php" class="item">
                <img src="../img/icons/operaciones.png">
                <p class="card-title">Vistas Tecnicas</p>
    
            </a>
            <a href="operaciones.php" class="item">
                <img src="../img/icons/operaciones.png">
                <p class="card-title">Operaciones</p>
    
            </a>
            <a href="mantenimiento.php" class="item">
                <img src="../img/icons/operaciones.png">
                <p class="card-title">Mantenimiento</p>

            </a>
           
        </div>
       

    </section>



<?php } else { ?>
    <!-- ES MASTER -->
    <section class="container">
        <div class="elements">
            <a href="stock.php" class="item">

                <img src="../img/icons/inventario.png">
                <p class="card-title">Inventario</p>
            </a>
            
            <a href="operaciones.php" class="item">
                <img src="../img/icons/operaciones.png">
                <p class="card-title">Operaciones</p>

            </a>
            <a href="operaciones.php" class="item">
                <img src="../img/icons/operaciones.png">
                <p class="card-title">Operaciones</p>

            </a>
        </div>
        <div class="elements">
            <a href="reportes.php" class="item">
                <img src="../img/icons/reportes.png">
                <p class="card-title">Reportes</p>
            </a>

            <!-- <a href="usuarios.php" class="item">
                <img src="../img/icons/usuarios.png">
                <p class="card-title">Usuarios</p>
            </a> -->

            <!-- <a href="configuracion.php" class="item" id="configuracion">
                <img src="../img/icons/configuracion.png">
                <p class="card-title">Configuracion</p>
            </a> -->
        </div>

    </section>
<?php }; ?>



    <script src="../js/validacionesrol.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>