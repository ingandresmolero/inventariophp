<?php

include("../../php/dbconn.php");
if (isset($_POST['buscar'])) {;
    $stockid = $_POST['id_stock'];
    $codigo = $_POST['codigo'];

    //Obtienes los datos
    $sql = "SELECT * FROM stock  WHERE id_stock = '$stockid'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $out = $stmt->fetch();




    if ($out > 0) {
        echo '
            <div class="box-bg medium-sz">
            
                <form action="actualizartraslado.php" method="post">
                    <div class="input-item">
                        <label class="form-label">Codigo</label>
                        <input class="d-none" value= "' . $out['id_stock'] . '" name="id_stock"   >
                        <input class="form-control" value= "' . $out['codigo'] . '" name="codigo2"  >
                    </div>
                    <div class="input-item">
                        <label class="form-label">Nombre Articulo</label>
                        <input class="form-control" value= "' . $out['nombre'] . '" name="nombre" >
                    </div>
                 
                    <div class="input-item">
                        <label class="form-label">Existencia Stock</label>
                        <input class="form-control" value= "' . $out['existencia'] . '" name="existencia"  >
                    </div>

                    <div class="input-item">
                        <label class="form-label">Deposito Actual</label>
                        <input class="form-control" value= "' . $out['descripcion'] . '" name="deposito"  >
                    </div>
                   
                    <div class="input-item">
                        <label class="form-label">Cantidad </label>
                        <input class="form-control" placeholder="cantidad a agregar" name="cantidad" required>
                    </div>

                    <div class="input-item">
                        <label for="" class="form-label">Deposito Traslado:</label>
                            <select name="descripcion" id="descripcion" class="form-select">
                                <option value="deposito1">Deposito 1</option>
                                <option value="deposito2">Deposito 2</option>
                                <option value="LuisD">Luis Duran</option>
                                <option value="Dave">Dave Querales</option>
                                <option value="Jhon">Jhon Chacon</option>
                                <option value="Camion">Camion</option>
                                <option value="herramienta">Herramienta</option>
                                <option value="otro">Otro</option>
                            </select>
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
<!-- <div class="input-item">
                        <label class="form-label">Costo</label>
                        <input class="form-control" value= "'.$out['costo']. '" name="costo">
                    </div> -->