<?php

header("Content-Type: application/json; charset=UTF-8");

require_once 'connect.php';



    $request_id    = $_GET['request_id'];
    $done  = $_GET['done'];

    $query = "UPDATE assignwork_tb SET done='$done' WHERE request_id='$request_id' ";

        if ( mysqli_query($conn, $query) ){
            $result["value"] = "1";
            $result["message"] = "done : ".$done;

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