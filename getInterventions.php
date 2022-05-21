<?php
$servername="localhost";
$username ="root";
$password="";
$dbname="inter";
// Create connection
$conn=new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error){
   die("Connection failed:" .$conn->connect_error); 
}

$assign_tech = $_GET['assign_tech'];



$sql= "SELECT request_id,requester_name from assignwork_tb WHERE assign_tech= '$assign_tech'"; 

$result = $conn->query($sql);

$array = array();

while($raw = $result->fetch_assoc()){

    array_push($array, $raw);
}
echo json_encode($array);

?>