<?php

    include("../../php/dbconn.php");
    if (isset($_POST['buscar'])) {;
        $codigo = $_POST['codigo'];

        //Obtienes los datos
        $sql = "SELECT * FROM stock  WHERE codigo = '$codigo'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $out = $stmt->fetch();

       
        

        if ($out > 0) {
            echo '
            <div class="box-bg medium-sz">
            
                <form action="agregarItem.php" method="post">
                    <div class="input-item">
                        <label class="form-label">Codigo</label>
                        <input class="form-control" value= "'.$out['codigo']. '" name="codigo2">
                    </div>
                    <div class="input-item">
                        <label class="form-label">Nombre</label>
                        <input class="form-control" value= "'.$out['nombre']. '" name="nombre">
                    </div>
                    <div class="input-item">
                        <label class="form-label">Costo</label>
                        <input class="form-control" value= "'.$out['costo']. '" name="costo">
                    </div>
                    <div class="input-item">
                        <label class="form-label">Stock</label>
                        <input class="form-control" value= "'.$out['existencia']. '" name="existencia">
                    </div>
                    <div class="input-item">
                        <label class="form-label">Cantidad </label>
                        <input class="form-control" placeholder="cantidad a agregar" name="cantidad">
                    </div>
                    <button type="" class="btn-style-1" name="agregar"> Agregar </button>
                </form>
            </div>
            ';

        } else {
            echo '<div class="container"><p class="alert-error">El codigo ingresado no existe.</p></div>';
        }
    }
    ?>
  