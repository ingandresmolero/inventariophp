<?php

$rol = $_SESSION['rol'];
if ($rol != 'master') {
   echo '
   <script>
    alert("Usted no tiene acceso a este modulo!");
    location.href ="../views/dashboard.php";
   </script>';
}else{
  

};

?>