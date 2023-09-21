<?php

$serverName = "192.168.1.113";
$connectionInfo = array( "Database"=>"innovaDB", "UID"=>"saint", "PWD"=>"nvd.3924306");
$connsqlsrv = sqlsrv_connect( $serverName, $connectionInfo);
$row= array ();

if($connsqlsrv){
    
}else{
    echo "  sigamos intentando <br /> ERROR: <br /> <br /> ";
    die( print_r( sqlsrv_errors(), true));
}

?>