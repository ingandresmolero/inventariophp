<?php

include("../../php/dbconn.php");


if (!isset($_POST["codigo2"]) || !isset($_POST["nombre"]) || !isset($_POST["descripcion"]) ) {
    exit("Faltan datos");
}

$codigo =$_POST["codigo2"];
$nombre =$_POST["nombre"];
$descripcion =$_POST["descripcion"];


$query2 = "INSERT INTO stock ( codigo, nombre, descripcion) VALUES ('$codigo','$nombre','$descripcion')";


$stmt2= $conn->prepare($query2);
$stmt2 -> execute();
echo '<script>alert("Se Creo un codigo")</script>';
header("Location: ../stock.php");
