<?php
$name=$_POST['name'];

$pass=$_POST['pass'];
include("./config/db.config.php");
$con=dbconnect();
if(isset($_POST['admin-btn'])):
$query="SELECT `number`, `name`, `email`, `password`, `photo` FROM `admin` WHERE name='$name'and 
password='$pass ' ";
$admin=mysqli_query($GLOBALS['con'],$query)or die(mysqli_error($GLOBALS['con']));

// print_r($query);
if(mysqli_num_rows($admin)==1){
$adminResult=mysqli_fetch_array($admin);
session_start();
$_SESSION['session_name']=$adminResult['name'];
$_SESSION['session_password']=$adminResult['password'];
   echo"hello ";
   header("location:control3.php");
    echo($adminResult["name"]);}
    else{
    echo'no';}
    endif;//isset($_POST['admin-btn']
?>