
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
<?php
 function getEmployee($empId) {		
	$sqlQuery = '';
	if($empId) {
		$sqlQuery = "WHERE id = '".$empId."'";
	}	
	$empQuery = "
		SELECT empid, empName, empCity, empMobile, empEmail,date_tech, tech_pass 
		FROM ".$this->technician_tb." $sqlQuery
		ORDER BY id DESC";	
	$resultData = mysqli_query($this->dbConnect, $empQuery);
	$empData = array();
	while( $empRecord = mysqli_fetch_assoc($resultData) ) {
		$empData[] = $empRecord;
	}
	header('Content-Type: application/json');
	echo json_encode($empData);	
}
?>