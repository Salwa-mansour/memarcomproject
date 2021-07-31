<?php
function dbconnect(){
    $serverName='localhost';
    $userName='memarcomadmin';
    $passWrod='memarcom123';
    $dbName='memarcom3';
    
    $con=mysqli_connect($serverName,$userName,$passWrod,$dbName);
    if($con){
        // echo"connected to data base";
        return $con;
    }else echo'else{echo"connection to databese failed".mysqli_connect_error()';
}

dbconnect();