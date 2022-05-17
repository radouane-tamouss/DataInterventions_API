<?php
$servername="localhost";
$username ="root";
$password="";
$dbname="api";

// Create connection
$conn=new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error){
   die("Connection failed:" .$conn->connect_error); 
}

// $request_info = $_GET('request_info');
// $request_id = $_GET('request_id');
// $request_desc = $_GET('request_desc');
// $requester_name = $_GET('requester_name');
// $requester_add1 = $_GET('requester_add1');
// $requester_add2 = $_GET('requester_add2');
// $requester_city = $_GET('requester_city');
// $requester_state = $_GET('requester_state');
// $requester_zip = $_GET('requester_zip');
// $requester_email = $_GET('requester_email');
// $requester_mobile = $_GET('requester_mobile');
// $assign_tech = $_GET('assign_tech');
// $assign_date = $_GET('assign_date');

// $sql = "INSERT INTO assignwork_tb(request_id,request_info,request_desc, requester_name , 
//          requester_add1 , requester_add2 , requester_city , requester_state, requester_zip,
//           requester_email, requester_mobile,assign_tech,assign_date) VALUES($request_id,$request_info,
//           $request_desc,
//            $requester_name,$requester_add1,$requester_add2,
//             $requester_city, $requester_state, $requester_zip, $requester_email,
//             $requester_mobile,$assign_tech,$assign_date) ";


// $result = $conn->query($sql);

$resultJson["result"] ="result";



echo json_encode($resultJson);


?>


