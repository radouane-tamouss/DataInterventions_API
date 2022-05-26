<?php 

header("Content-Type: application/json; charset=UTF-8");

require_once 'connect.php';

$key = $_POST['key'];

if ( $key == "update" ){

    $request_id = $_POST['request_id'];
    $request_info = $_POST['request_info'];
    $request_desc = $_POST['request_desc'];
    $requester_name = $_POST['requester_name'];
    $requester_add1 = $_POST['requester_add1'];
    $requester_add2 = $_POST['requester_add2'];
    $requester_city = $_POST['requester_city'];
    $requester_state = $_POST['requester_state'];
    $requester_zip = $_POST['requester_zip'];
    $requester_email = $_POST['requester_email'];
    $requester_mobile = $_POST['requester_mobile'];
    $assign_tech = $_POST['assign_tech'];
    $assign_date = $_POST['assign_date'];

    $assign_date_newformat = date('Y-m-d', strtotime($assign_date));


    $query = "UPDATE assignwork_tb SET 
   
    request_info='$request_info', 
    request_desc='$request_desc',
    requester_name='$requester_name',
    requester_add1='$requester_add1',
    requester_add2='$requester_add2',
    requester_name='$requester_name',
    requester_state='$requester_state',
    requester_zip='$requester_zip',
    requester_email='$requester_email',
    requester_mobile='$requester_mobile',
    assign_tech='$assign_tech',

    assign_date='$assign_date' 
    WHERE request_id='$request_id' ";

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
}

?>