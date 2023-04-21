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
            <form action="caracteristicas.php" method="post" >
            <div class="col-lg-3">
                            <label for="" class="form-label">Nombre:</label>
                            <input type="tex" class="form-control" name="nombre" id="">
                        </div>

                        <div class="col-lg-3">
                            <label for="" class="form-label">Descripcion:</label>
                            <input type="tex" class="form-control" name="descripcion" id="">
                        </div>

                        <div class="col-3">
                            <label for="" class="form-label">Existencia:</label>
                            <input type="number" class="form-control" name="existencia" id="">
                        </div>

                        <div class="col-3">
                            <label for="" class="form-label">Lote:</label>
                            <input type="number" class="form-control" name="lote" id="">
                        </div>
                        <div class="col-sm-3">
                            <label for="" class="form-label">Costo:</label>
                            <input type="number" class="form-control" name="costo" id="">
                        </div>

                        <div class="row ">
                            <div class="col-sm-3">
                                <label for="" class="form-label">Precio 1:</label>
                                <input type="number" class="form-control" name="precio_1" id="">
                            </div>
                            <div class="col-sm-3">
                                <label for="" class="form-label">Precio 2:</label>
                                <input type="number" class="form-control" name="precio_2" id="">
                            </div>
                            <div class="col-sm-3">
                                <label for="" class="form-label">Precio 3:</label>
                                <input type="number" class="form-control" name="precio_3" id="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3">
                                <label for="" class="form-label">Tasa del dia BS.S:</label>
                                <input type="number" class="form-control" name="tasa" id="">

                            </div>
                            <div class="col-3">
                                <label for="" class="form-label">% IVA:</label>
                                <input type="number" class="form-control" name="iva" id="">
                            </div>
                            <div class="col-3">
                                <label for="" class="form-label">Tasa Variable:</label>
                                <input type="tasa_variable" class="form-control" name="tasa_variable" id="">

                            </div>
                        </div>

                        <hr>
                        <p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseCaracteristicas" role="button" aria-expanded="false" aria-controls="multiCollapseCaracteristicas">Caracteristicas</a>
                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseEmbalaje" aria-expanded="false" aria-controls="multiCollapseEmbalaje">Embalaje</button>

                        </p>
                        <hr>
                    </div>

                    <div>
                        <!-- CARACTERISTICAS -->
                        <div class="collapse multi-collapse" id="multiCollapseCaracteristicas">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="" class="form-label">Color:</label>
                                        <input type="tex" class="form-control" name="color" id="">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="" class="form-label">Voltaje:</label>
                                        <input type="tex" class="form-control" name="voltaje" id="">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="" class="form-label">Medida:</label>
                                        <input type="tex" class="form-control" name="medida" id="">
                                    </div>

                                    <div class="col-sm-3">
                                        <label for="" class="form-label">Calibre:</label>
                                        <input type="tex" class="form-control" name="calibre" id="">
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="" class="form-label">No de Hilos</label>
                                        <input type="tex" class="form-control" name="n_hilos" id="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- EMBALAJE -->
                    <div>
                        <div class="collapse multi-collapse" id="multiCollapseEmbalaje">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="" class="form-label">Unidad:</label>
                                        <select name="unidad" id="unidad">
                                            <option value="kg">Kilogramos</option>
                                            <option value="mt">mt</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="" class="form-label">Serial:</label>
                                        <input type="tex" class="form-control" name="serials" id="">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="" class="form-label">Largo:</label>
                                        <input type="tex" class="form-control" name="largo" id="">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="" class="form-label">Peso Bruto:</label>
                                        <input type="tex" class="form-control" name="peso_bruto" id="">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="" class="form-label">Peso Kilo/Cobre:</label>
                                        <input type="tex" class="form-control" name="peso_kg_cobre" id="">
                                    </div>
                                </div>





                            </div>
                        </div>
                    </div>



                    <input type="submit"  class="btn btn-primary mb-3" value="Guardar" name="guardar">
                    </form>
            ';
    
           

        } else {
            echo '  
            <h3>Creacion de Nuevo Codigo: </h3>
                <form action="crearCodigo.php" method="post">
                <div class="row ">
                <div class="col-sm-3">
                    <label for="" class="form-label">Codigo: </label>
                    <input type="text" class="form-control" value="'.$codigo.'" name="codigo2" >
                </div>
                <div class="col-sm-3">
                    <label for="" class="form-label">Nombre: </label>
                    <input type="text" class="form-control" name="nombre" id="">
                </div>
                <div class="col-sm-3">
                    <label for="" class="form-label">Descripcion: </label>
                    <input type="text" class="form-control" name="descripcion" id="">
                </div>
            </div>
            <input type="submit" name="crear" value="Crear">
                </form>

            ';
        }
    }
