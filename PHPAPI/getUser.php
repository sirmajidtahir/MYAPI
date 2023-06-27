<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
//-----------------------------database connection---------------------
require 'db_connection.php';
//----------------------------Latest Record--------------------------

//----------------------------Course Record--------------------------

$query1 = "SELECT * FROM customers where email<>''";
    
$cmd1 = mysqli_query($conn,$query1);

    $json_array=array();
    while($row=mysqli_fetch_assoc($cmd1))
    {
       $json_array[]=$row;
    }
    
    echo json_encode($json_array);

?>