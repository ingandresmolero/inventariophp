<?php include("../../php/functions/validar.php");

?>
<?php

include("../../php/dbconn.php");
$stockid = $_GET['stockid'];
$sql = "SELECT * FROM stock INNER JOIN reportes ON stock.codigo = reportes.codigo where stock.id_stock='$stockid' AND reportes.fecha_creacion = (SELECT MAX(fecha_creacion) from reportes) AND id_reporte = (SELECT MAX(id_reporte) FROM reportes) LIMIT 1";
// $sql = "SELECT * FROM stock where id_stock='$stockid' ";
$sql2 = "SELECT * FROM stock WHERE id_stock='$stockid'";


$stmt = $conn->prepare($sql);
$stmt->execute();

$stmt2 = $conn->prepare($sql2);
$stmt2->execute();

$datos = $stmt2->fetch();

$resultado = $stmt->fetchAll();
$filas = $stmt->rowCount();

$codigo = $datos['codigo'];
if (isset($_POST['agregar'])) {
    header("Location: act_stock.php?codigo=$codigo");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../img/favicon.png">
    <link rel="stylesheet" href="../../css/styles.min.css">
    <title>Editar Producto</title>
</head>

<body>
    <?php include("../../views/assets/headersintasa.php"); ?>

    <main>

        <div class="container">
            <h1 class="page-heading">Editar articulo</h1>
            <div class="box-bg-2">

                <form action="" method="post" class="form-style-3">

                    <div class="row ">
                        <div class="col-lg-4">
                            <label for="" class="form-label">Codigo:</label>
                            <input type="tex" class="form-control" name="codigo" id="" value="<?php echo $datos['codigo'] ?>" placeholder="<?php echo $datos['codigo'] ?>">

                        </div>

                        <div class="col-lg-4">
                            <label for="" class="form-label">Nombre:</label>
                            <input type="tex" class="form-control" name="nombre" id="" value="<?php echo $datos['nombre'] ?>" placeholder="<?php echo $datos['nombre'] ?>">
                        </div>

                        <div class="col-lg-4">
                            <label for="" class="form-label">Descripcion:</label>
                           <select name="descripcion" id="descripcion" class="form-control">
                            <option value="deposito1">Deposito 1</option>
                            <option value="deposito2">Deposito 2</option>
                            <option value="herramienta">Herramienta</option>
                            <option value="otro">Otro</option>
                           </select>
                        </div>

                        <div class="col-lg-4">
                            <label for="" class="form-label">Existencia:</label>
                            <input type="tex" class="form-control" name="descripcion" id="" value="<?php echo $datos['existencia'] ?>" placeholder="<?php echo $datos['existencia'] ?>...">
                        </div>

                    </div>

                    
                        <div class="row mb-3 mt-4">
                            <input type="submit" class="submit-btn-2" name="agregar" value="agregar" />

                        </div>
                   

            </div>
            <!-- FIN EMBALAJE -->

          <div class="row mb-3 mt-4">
                <!-- <input type="submit" class="submit-btn-2" value="Actualizar" name="actualizar"> -->
                <?php
                        $rol = $_SESSION['rol'];
                        if ($rol == 'master') {
                            echo '<input type="submit" class="submit-invert " value="Borrar" name="borrar">';
                        }
                ?>
            </div>
            </form>
        <?php
        if (isset($_POST['borrar'])) {
            $delete = " DELETE FROM stock WHERE id_stock='$stockid'";

            $stmt = $conn->prepare($delete);
            $stmt->execute();
            echo '<script>
                alert("Se elimino el producto ' . $stockid . '--' . $stock['nombre'] . '");
                window.location.href = "../stock.php";
                </script>';
        };

        // if (isset($_POST['actualizar'])) {
        //     $username = $_SESSION['username'];
        //     $fecha_dia = date("Ymd");
        //     $codigo = $_POST['codigo'];
        //     $nombre = $_POST['nombre'];
        //     $descripcion = $_POST['descripcion'];
        //     $existencia = $_POST['existencia'];
        //     // $lote = $_POST['lote'];




        //     // $costopromedio = $_POST['costopromedio'];
        //     // $costoanterior = $_POST['costo_anterior'];
        //     // $utilidad = $_POST['utilidad'];


        //     // $precio_1 = $_POST['precio1'];
        //     // $precio_2 = $_POST['iva'];
        //     // $precio_3 = $_POST['utilidad'];
        //     // $precio1 = $_POST['precio_1'];
        //     // $precioIva = $_POST['precioIva'];
        //     // $precio1bs = $_POST['precioBs_1'];
        //     // $precioIvabs = $_POST['precioBsIva_1'];

        //     // $tasa = $tasadia;
        //     // $tasa_variable = $_POST['tasa_variable'];

        //     // $iva = '16%';
        //     // $color = $_POST['color'];
        //     // $voltaje = $_POST['voltaje'];
        //     // $medida = $_POST['medida'];
        //     // $calibre = $_POST['calibre'];
        //     // $n_hilos = $_POST['n_hilos'];
        //     // $unidad = $_POST['unidad'];
        //     // $serials = $_POST['serials'];
        //     // $largo = $_POST['largo'];
        //     // $peso_bruto = $_POST['peso_bruto'];
        //     // $peso_kilo_gramo = $_POST['peso_kg_cobre'];


        //     // UPDATE `stock` SET `id_stock`='[value-1]',`codigo`='[value-2]',`nombre`='[value-3]',`descripcion`='[value-4]',`existencia`='[value-5]',`lote`='[value-6]',`costo`='[value-7]',`utilidad`='[value-8]',`costo_anterior`='[value-9]',`precio1`='[value-10]',`precioIva`='[value-11]',`precio1bs`='[value-12]',`precioIvbs`='[value-13]',`costopromedio`='[value-14]',`precio_1`='[value-15]',`precio_2`='[value-16]',`precio_3`='[value-17]',`tasa`='[value-18]',`tasa_variable`='[value-19]',`iva`='[value-20]',`color`='[value-21]',`voltaje`='[value-22]',`medida`='[value-23]',`calibre`='[value-24]',`N_hilos`='[value-25]',`unidades`='[value-26]',`serials`='[value-27]',`largo`='[value-28]',`peso_bruto`='[value-29]',`peso_kg_cobre`='[value-30]',`usuario`='[value-31]',`fecha_creacion`='[value-32]' WHERE 1

        //     $query = "UPDATE stock SET codigo='$codigo',nombre='$nombre',descripcion='$descripcion',existencia='$existencia', WHERE id_stock='$stockid'";

        //     $consulta = $conn->prepare($query);
        //     $consulta->execute();

        //     $act = $consulta->fetchAll();

        //     if ($act > 0) {
        //         echo '<script>
        //         alert("Se agrego campos para empresa");
        //         window.location.href = "../stock.php";
        //         </script>';
        //     } else {
        //         echo '<script>alert("Hubo un error!")</script>';
        //     }
        // }

        ?>
        </div>
        </div>
    </main>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
<script src="../../js/productFuction.js"></script>

<script>
    // const costo = document.getElementById("costo");
    // const utilidad = document.getElementById("utilidad");
    // const pvp = document.getElementById("pvp");

    // costo.classList.add(" btn-primary");
    //Servicios
</script>

</html>