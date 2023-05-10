<?php

    include("../../php/dbconn.php");
    if (isset($_POST['buscar'])) {;
        $codigo = $_POST['codigo'];

        //Obtienes los datos
        $sql = "SELECT * FROM stock  WHERE codigo = '$codigo'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $out = $stmt->fetch();

        $cantidad = $out['existencia'];
        

        if ($out > 0) {
            echo '
            <div class="container-sm">
            <form action="agregarItem.php" method="post">
                <label class="form-label">Codigo</label>
                <input class="form-control" value= "'.$out['codigo']. '" name="codigo2">
                
                <label class="form-label">Nombre</label>
                <input class="form-control" value= "'.$out['nombre']. '" name="nombre">
                
                <label class="form-label">Costo</label>
                <input class="form-control" value= "'.$out['costo']. '" name="costo">
                
                <label class="form-label">Stock</label>
                <input class="form-control" value= "'.$out['existencia']. '" name="existencia">
                
                <label class="form-label">Cantidad </label>
                <input class="form-control" placeholder="cantidad a agregar" name="cantidad">
                <button type="" name="agregar"> Agregar </button>
            </form>
            </div>
            ';
    
           

        } else {
            echo 'Este codigo no existe';
        }
    }
    ?>
  