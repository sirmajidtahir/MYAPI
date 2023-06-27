<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require 'db_connection.php';

if(isset($_GET['emp']))
{
    $dat= json_decode($_GET['emp']);
 
    $username = trim($dat->name);
   
    $query1 = "SELECT * FROM customers where customerName like '%$username%'";
    
    $cmd1 = mysqli_query($conn,$query1);
    
        $json_array=array();
        while($row=mysqli_fetch_assoc($cmd1))
        {
           $json_array[]=$row;
        }
        
        echo json_encode($json_array);
}
else
{
    echo json_encode(["success"=>0,"msg"=>"Please fill all the required fields!"]);
}

?>