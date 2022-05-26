<?php 

header("Content-Type: application/json; charset=UTF-8");

require_once 'connect.php';

$query = "SELECT * FROM assignwork_tb ORDER BY assign_date DESC ";
$result = mysqli_query($conn, $query);
$response = array();


while( $row = mysqli_fetch_assoc($result) ){

    array_push($response, 
    array('request_id' => $row['request_id'],
        'request_info' => $row['request_info'],
        'request_desc' => $row['request_desc'],
        'requester_name' => $row['requester_name'],
        'requester_add1' => $row['requester_add1'],
        'requester_add2' => $row['requester_add2'],
        'requester_city' => $row['requester_city'],
        'requester_state' => $row['requester_state'],
        'requester_zip' => $row['requester_zip'],
        'requester_email' => $row['requester_email'],
        'requester_mobile' => $row['requester_mobile'],
        'assign_tech' => $row['assign_tech'],
        'assign_date' => $row['assign_date']
    ) 
    );
}

echo json_encode($response);

mysqli_close($conn);

?>