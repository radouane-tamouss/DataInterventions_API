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
$tech_name = 'Tech1';
$sql= "SELECT * from assignwork_tb WHERE assign_tech= '$tech_name'"; 

$result = $conn->query($sql);

$array = array();

while($raw = $result->fetch_assoc()){

    array_push($array, $raw);
}
echo json_encode($array);

?>