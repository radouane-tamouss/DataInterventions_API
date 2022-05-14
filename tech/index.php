<?php
include('dbConnection.php');
if(isset($_POST['submit']))	{
	$url = $_POST['url'];				
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);		
	$result = json_decode($response);	
	print_r($result);		
}
?>