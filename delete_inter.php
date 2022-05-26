<?php 

header("Content-Type: application/json; charset=UTF-8");

require_once 'connect.php';

$request_info = $_GET['request_info'];
$request_id      = $_GET['request_id'];




    $query = "DELETE FROM assignwork_tb WHERE request_id='$request_id' ";

        if ( mysqli_query($conn, $query) ){

   
                $result["value"] = "1";
                $result["message"] = "Success!";

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