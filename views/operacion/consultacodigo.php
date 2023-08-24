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
                <form action="retirarItem.php" method="post">
                    <div class="input-item">
                        <label class="form-label" >Codigo</label>
                        <input class="form-control" value= "'.$out['codigo']. '" name="codigo2" >
                    </div>
                    <div class="input-item">
                    <label class="form-label">Nombre Articulo</label>
                    <input class="form-control" value= "'.$out['nombre']. '" name="nombre" >
                </div>
                
            <div class="input-item">
                        <label class="form-label">Stock</label>
                        <input class="form-control" value= "'.$out['existencia']. '" name="existencia" >
                    </div>
                    <div class="input-item">
                    <label class="form-label">Numero ODS</label>
                    <input class="form-control" value= "" placeholder="ODS..." name="nota_retiro">
                </div>
                <div class="input-item">
                    <label class="form-label">Tecnico</label>

                    <select name="repres_retiro" id="descripcion" class="form-select">
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
                   
                  
                    
                   
                    <div class="input-item">
                        <label class="form-label">Cantidad </label>
                        <input class="form-control" placeholder="..." name="cantidad">
                    </div>
                    <button class="btn-style-1" type="" name="retirar"> Retirar </button>
                </form>
            </div>
            ';
    
        } else {
            echo '<div class="container"><p class="alert-error">El codigo ingresado no existe.</p></div>';
        }
    }
