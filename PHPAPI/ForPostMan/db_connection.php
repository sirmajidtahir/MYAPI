<?php

    $server = "localhost"; 
    // Place the username for the MySQL database here 
    $username = "root";  
    // Place the password for the MySQL database here 
    $password = "";  
    // Place the name for the MySQL database here 
    $database = "ecommdb"; 

    // NEW Run the actual connection here                        
    $conn = mysqli_connect($server, $username, $password, $database)
                            or die("Could not connect to database");
                   
   $db_conn = mysqli_connect($server, $username, $password, $database)
                            or die("Could not connect to database");
                   
?>

