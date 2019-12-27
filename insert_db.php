<?php

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: X-Requested-With, content-type, access-control-alloworigin, access-control-allow-methods, access-control-allow-headers');


$link = mysqli_connect('localhost', 'root', '', 'triamrun');
mysqli_set_charset($link, 'utf8');

// include_once '../triamrun/connentDB.php';



$hours = $_POST['hoursData'];
$min = $_POST['minData'];
$second = $_POST['secondData'];

$sql = "INSERT INTO `recordrunning` (`recordrunning_hours`, `recordrunning_min`, `recordrunning_second`) VALUES ($hours,$min,$second);";

$result = mysqli_query($link,$sql);

if($result){
    $callback = array(
        'status' => 200,
        'msg' => 'Insert data'
    );
}else{
    $callback = array(
        'status' => 404,
        'msg' => 'Insert fail'
    );
}

echo json_encode($callback);



?>