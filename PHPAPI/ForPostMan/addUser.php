<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require 'db_connection.php';

// POST DATA
$data = json_decode(file_get_contents("php://input"));

if(isset($data->name))
{
    $username = trim($data->name);
    $useremail = trim($data->email);
   
    $query="INSERT INTO `customers`(`customerName`,`email`) VALUES('$username','$useremail')";

    $cmd = mysqli_query($db_conn,$query);
      
    if($cmd)
    {
       $last_id = mysqli_insert_id($db_conn);
    
       echo json_encode(["success"=>1,"msg"=>"User Inserted.","id"=>$last_id]);
    }
    else
    {
      echo json_encode(["success"=>0,"msg"=>"User Not Inserted!"]);
        
    }
}
else
{
    echo json_encode(["success"=>0,"msg"=>"Please fill all the required fields!"]);
}

?>