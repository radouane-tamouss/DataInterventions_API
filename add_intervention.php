<?php 

require_once 'connect.php';




$request_id = $_GET['request_id'];
$request_info = $_GET['request_info'];
$request_desc = $_GET['request_desc'];
$requester_name = $_GET['requester_name'];
$requester_add1 = $_GET['requester_add1'];
$requester_add2 = $_GET['requester_add2'];
$requester_city = $_GET['requester_city'];
$requester_state = $_GET['requester_state'];
$requester_zip = $_GET['requester_zip'];
$requester_email = $_GET['requester_email'];
$requester_mobile = $_GET['requester_mobile'];
$assign_tech = $_GET['assign_tech'];
$assign_date = $_GET['assign_date'];

$assign_date_newformat = date('Y-m-d', strtotime($assign_date));


$query = "INSERT INTO assignwork_tb(request_id,request_info,request_desc, requester_name , 
         requester_add1 , requester_add2 , requester_city , requester_state, requester_zip,
          requester_email, requester_mobile,assign_tech,assign_date) VALUES('$request_id','$request_info',
          '$request_desc',
           '$requester_name','$requester_add1','$requester_add2',
            '$requester_city', '$requester_state', '$requester_zip', '$requester_email',
            '$requester_mobile','$assign_tech','$assign_date_newformat') ";

if ( mysqli_query($conn, $query) ){

          
    $result["value"] = "1";
    $result["message"] = "Success";

    echo json_encode($result);
    mysqli_close($conn);

} 
else {
$response["value"] = "0";
$response["message"] = "Error! ".mysqli_error($conn);
echo json_encode($response);

mysqli_close($conn);
}


?>




   