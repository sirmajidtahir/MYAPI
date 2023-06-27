<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: DELETE");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require 'db_connection.php';

if(isset($_GET['emp']))
{
    $dat= json_decode($_GET['emp']);
 
    $id = trim($dat->id);
       
    $query="delete from customers 
            where customerNumber='$id'";

    $cmd = mysqli_query($db_conn,$query);
      
    if($cmd)
    {
    
       echo json_encode(["success"=>1,"msg"=>"User deleted","id"=>$id]);
    }
    else
    {
      echo json_encode(["success"=>0,"msg"=>"User Not deleted!"]);
        
    }
}
else
{
    echo json_encode(["success"=>0,"msg"=>"Please fill all the required fields!"]);
}

?>