<?php 

require_once 'connect.php';



$name       = $_POST['name'];
$species    = $_POST['species'];
$breed      = $_POST['breed'];
$gender     = $_POST['gender'];
$birth      = $_POST['birth'];
$mobile    = $_POST['mobile'];



    $birth_newformat = date('Y-m-d', strtotime($birth));

    $query = "INSERT INTO pets (name,species,breed,gender,birth,mobile)
    VALUES ('$name', '$species', '$breed', '$gender', '$birth_newformat','$mobile') ";

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