<?php 
$host ="localhost:3307";
$username = "root";
$password= "";
$conn = mysqli_connect($host,$username,$password);
$sql= "create database SMC1";
$result = mysqli_query($conn,$sql);
if($result){
    echo "database creation successful";
}



?>