<?php

$rol = $_SESSION['rol'];
if ($rol != 'master') {
    header('location: ../views/dashboard.php');
}

?>