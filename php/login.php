<?php
  

  include("dbconn.php");
  session_start();
  if(isset($_POST["login"])){
    
    if($_POST["usuario"]== "" or $_POST["passw"]==""){
        echo "<center><h1>Usuario y contrasena no deben estar vacios</h1></center>";

}else{
    $username =$_POST["usuario"];
    $passw=$_POST["passw"];
    $query=$conn->prepare("SELECT * FROM usuarios WHERE user='$username' and passw='$passw'");
    $query -> execute();
    $control=$query ->fetchAll();
    if($control>0){
        $_SESSION["username"]=$username;
      
        header("Location:views/dashboard.php");
    }
    echo "<center><h1>Algun dato incorrecto.</h1></center>";
  }

}
?>