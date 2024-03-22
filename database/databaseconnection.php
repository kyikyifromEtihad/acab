<?php 
  $host="localhost:3307";
  $username="root";
  $password= "";
  $database="smc1";
  $conn= mysqli_connect($host,$username,$password,$database);
  if($conn==false){
    mysqli_connect_error();
    }
   
   
    ?>