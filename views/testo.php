<?php
        include("../php/dbconn.php");

        if(isset($_POST['consulta'])){
                $codigo = $_POST['codigo'];
                $sql="SELECT * FROM stock WHERE codigo = '$codigo'";
                $stmt=$conn->prepare($sql);

                $out = $stmt->fetch();
        

                 if ($out > 0) {
            echo 'Si existe';
        }else{
                echo 'no existe'; 
        }
        }

?>