<?php
include ("databaseconnection.php");
$scriptFilename ="smc.sql";
$sqlScript = file_get_contents($scriptFilename);
if($conn->multi_query($sqlScript)){
    echo "Script $scriptFilename executed successfully";
    
}


?>