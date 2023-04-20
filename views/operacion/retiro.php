<?php
   
   $stdin = fopen('php://stdin', 'r');
    include("../../php/dbconn.php");
    if (isset($_POST['buscar'])) {;
        $codigo = $_POST['codigo'];

        $sql = "SELECT * FROM stock  WHERE codigo = '$codigo'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $out = $stmt->fetch();

        $cantidad = $out['existencia'];
        

        if ($out > 0) {
            echo '
    <p> Codigo: ' . $out['codigo'] . '</p>
    <p> Nombre: ' . $out['nombre'] . '</p>
    <p> Costo: ' . $out['costo'] . '</p>
    <p> Existencia: ' . $out['existencia'] . '</p>
';


$resultado = $cantidad - $retiro;

echo $resultado;

        } else {
            echo 'Este codigo no existe';
        }
    }
    ?>
  