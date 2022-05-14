
<?php
include('../dbConnection.php');
function insertEmployee($empData){ 
    $empid=$empData["empid"];
	$empName=$empData["empName"];
	$empCity=$empData["empCity"];
	$empMobile=$empData["empMobile"];
	$empEmail=$empData["empEmail"];		
	$tech_pass=$empData["tech_pass"];
    $date_tech=$empData["date_tech"];
	$empQuery="
		INSERT INTO ".$this->technician_tb." 
		SET id='".$empid."', name='".$empName."', city='".$empCity."', mobile='".$empMobile."', email='".$empEmail."', pass='".$tech_pass."', date='".$date_tech."'";
	if( mysqli_query($this->dbConnect, $empQuery)) {
		$messgae = "Technician created Successfully.";
		$status = 1;			
	} else {
		$messgae = "Technician creation failed.";
		$status = 0;			
	}
	$empResponse = array(
		'status' => $status,
		'status_message' => $messgae
	);
	header('Content-Type: application/json');
	echo json_encode($empResponse);
}
?>