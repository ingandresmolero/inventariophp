<?php
session_start();
$username = $_SESSION['username'];
include("../../php/dbconn.php");




if (!isset($_POST["codigo2"]) || !isset($_POST["nombre"]) || !isset($_POST["cantidad"])) {
    var_dump($_POST["codigo2"]);
    var_dump($_POST["nombre"]);
    var_dump($_POST["cantidad"]);

    exit("Faltan datos");
}
//Variables
$idstock = $_POST['id_stock'];
$codigo = $_POST["codigo2"];
$nombre = $_POST["nombre"];
$existencia = $_POST["existencia"];
$cantidad = $_POST["cantidad"];
$descripcion = $_POST['descripcion'];
$deposito = $_POST['deposito'];
$fecha_reg = date("D/m/y");
$resultado = intval($existencia) - intval($cantidad);





if ($descripcion == $deposito) {
    echo 'Esta haciendo un traslado al mismo deposito';
} else {
    $queryconsulta = "SELECT COUNT(*) FROM stock WHERE codigo = '$codigo' AND descripcion ='$descripcion'";
    $stmt5 = $conn->prepare($queryconsulta);
    $stmt5->execute();
    $fila = $stmt5->fetch();
    var_dump($fila['COUNT(*)']);

    if ($fila['COUNT(*)'] >= 1) {
        echo 'existe el codigo';
        //traslado original

        $queryconsulta2 = "SELECT * FROM stock WHERE codigo = '$codigo' AND descripcion ='$descripcion'";
        $stmt6 = $conn->prepare($queryconsulta2);
        $stmt6->execute();
        $row = $stmt6->fetch();
        $existenciastock = $row['existencia'];
        $resultadosuma = intval($existenciastock) + intval($cantidad);

      
        $querytraslado = "UPDATE stock SET existencia='$resultadosuma' WHERE codigo = '$codigo' and descripcion ='$descripcion' ";
        $stmttraslado = $conn->prepare($querytraslado);
        $stmttraslado->execute();

        $querydepositoexistente = "UPDATE stock SET existencia='$resultado' WHERE codigo = '$codigo' and descripcion ='$deposito' and id_stock='$idstock' ";
        $stmtdeposito = $conn->prepare($querydepositoexistente);
        $stmtdeposito->execute();

        $query3 = "INSERT INTO reportes( codigo,  traslado, usuario,representante, fecha_creacion) VALUES ('$codigo','$cantidad','$username','$descripcion','$fecha_reg')";
        $stmt3 = $conn->prepare($query3);
        $stmt3->execute();
        // var_dump($querytraslado);
        // var_dump($querydepositoexistente);

        echo '<script>alert("Se Genero un Traslado")</script>';
        header("Location: ../traslado.php");
    } else {
        if ($fila['COUNT(*)'] < 1) {
            echo 'no existe el codigo hay que crear uno nuevo';
            $query2 = "UPDATE stock SET existencia='$resultado' WHERE codigo = '$codigo' and descripcion = '$deposito' ";
            $query3 = "INSERT INTO reportes( codigo,  ingreso, usuario, representante,  fecha_creacion) VALUES ('$codigo','$cantidad','$username','$descripcion','$fecha_reg')";
            $query4 = "INSERT INTO  stock ( codigo , nombre ,descripcion ,existencia ,usuario ,  fecha_creacion ) VALUES ('$codigo','$nombre','$descripcion','$cantidad','$username','$fecha_reg')";
            $stmt2 = $conn->prepare($query2);
            $stmt3 = $conn->prepare($query3);
            $stmt4 = $conn->prepare($query4);
            $stmt2->execute();
            $stmt3->execute();
            $stmt4->execute();
            echo '<script>alert("Se Genero un Traslado")</script>';
            header("Location: ../traslado.php");
        }
    }
}


// if ($fila == empty('')) {
//     echo 'Esta haciendo un traslado al mismo deposito, dirigirse por favor a ordenes de carga';
// } else {

//     $evaluarexistencia = "SELECT COUNT(*) FROM stock WHERE descripcion='$descripcion' and codigo='$codigo'";
//     $stmt6 = $conn->prepare($evaluarexistencia);
//     $stmt6->execute();

//     if ($stmt6 > '1') {
//         $query2 = "UPDATE stock SET existencia='$resultado' WHERE codigo = '$codigo' ";
//         $query3 = "INSERT INTO reportes( codigo,  ingreso, usuario, fecha_creacion) VALUES ('$codigo','$cantidad','$username','$fecha_reg')";

//         $stmt2 = $conn->prepare($query2);
//         $stmt3 = $conn->prepare($query3);


//         $stmt3->execute();
//         $stmt2->execute();
//         echo '<script>alert("Se Genero una Carga")</script>';
//         header("Location: ../traslado.php");
//     } else {
//         if ($stmt6 <= '0') {
//             $query2 = "UPDATE stock SET existencia='$resultado', lote = '$existencia' WHERE codigo = '$codigo' ";
//             $query3 = "INSERT INTO reportes( codigo,  ingreso, usuario, fecha_creacion) VALUES ('$codigo','$cantidad','$username','$fecha_reg')";


//             $query4 = "INSERT INTO  stock ( codigo , nombre ,descripcion ,existencia ,usuario ,  fecha_creacion ) VALUES ('$codigo','$nombre','$descripcion','$cantidad','$username','$fecha_reg')";

//             $stmt2 = $conn->prepare($query2);
//             $stmt3 = $conn->prepare($query3);
//             $stmt4 = $conn->prepare($query4);

//             $stmt2->execute();
//             $stmt3->execute();
//             $stmt4->execute();
//             echo '<script>alert("Se Genero una Carga")</script>';
//             header("Location: ../traslado.php");
//         }
//     }
// }
