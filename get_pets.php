<?php 

header("Content-Type: application/json; charset=UTF-8");

require_once 'connect.php';

$query = "SELECT * FROM pets ORDER BY id DESC ";
$result = mysqli_query($conn, $query);
$response = array();


while( $row = mysqli_fetch_assoc($result) ){

    array_push($response, 
    array(
        'id'        =>$row['id'], 
        'name'      =>$row['name'], 
        'species'   =>$row['species'],
        'breed'     =>$row['breed'],
        'gender'    =>$row['gender'],
        'birth'     =>date('d M Y', strtotime($row['birth'])),
        'mobile'   =>$row['mobile'],
        'love'      =>$row['love']) 
    );
}

echo json_encode($response);

mysqli_close($conn);

?>