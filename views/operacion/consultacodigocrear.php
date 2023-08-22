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
            <div class="container">
            <p class="alert-error">El codigo introducido ya existe.</p>

            </div>
            ';
    } else {
        echo '  
            <div id="test">
            
                <form action="crearCodigo.php" method="post" class="form-style-2">
                <div class="card p-5 justify-content-center">
                <h3>Creacion de Nuevo Codigo: </h3>
                <div class="col-sm">
                    <label for="" class="col-form-label">Codigo: </label>
                    <input type="text" class="form-control" value="' . $codigo . '" name="codigo2"  >
                </div>
                <div class="col-sm">
                    <label for="" class="col-form-label">Nombre: </label>
                    <input type="text" class="form-control" name="nombre" id="">
                </div>
                <div class="col-sm">
                <label for="" class="form-label">Descripcion:</label>
                <select name="descripcion" id="descripcion" class="form-select">
                 <option value="deposito1">Deposito 1</option>
                 <option value="deposito2">Deposito 2</option>
                 <option value="herramienta">Herramienta</option>
                 <option value="otro">Otro</option>
                </select>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <label for="" class="col-form-label">Existencia: </label>
                        <input type="text" value="0" placeholder="0" class="form-control" name="existencia" id="">
                    </div>
                    
                </div>    
            <div class="col-sm d-none">
            <label for="" class="col-form-label">Costo: </label>
            <input type="text" class="form-control" name="costo" id="">
        </div>
        <div class="col-sm mb-3 d-none">
            <label for="" class="col-form-label">Precio: </label>
            <input type="text" class="form-control" name="precio_1" id="">
        </div>
        <input type="submit" name="crear" class="submit-btn" value="Crear">
            </div>
            
                </form>
                </div>

            ';
    }
}
