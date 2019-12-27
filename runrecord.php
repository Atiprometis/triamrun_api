<?php 
    header("Access-Control-Allow-Oeigin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include_once '../triamrun/connentDB.php';

    // $contentdata = file_get_contents("php:://input");

    // $postdata = file_get_contents('php://input'); 



$sql = "SELECT * FROM `recordrunning` WHERE `recordrunning_hours` = 21 AND `recordrunning_min` = 12 ";

$result = mysqli_query($con,$sql);



$numrow = mysqli_num_rows($result);

if($numrow == 1 ){
    $arr = array();
    while($row = mysqli_fetch_assoc($result)){
        $arr[] = $row;
    }

    echo json_encode($arr);
    mysqli_close($conn);
}else{
    echo json_encode(null);
}


?>