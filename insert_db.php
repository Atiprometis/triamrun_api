<?php

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: X-Requested-With, content-type, access-control-alloworigin, access-control-allow-methods, access-control-allow-headers');


$link = mysqli_connect('localhost', 'root', '', 'triamrun');
mysqli_set_charset($link, 'utf8');

// include_once '../triamrun/connentDB.php';
var_dump( file_get_contents('php://input'));

$contentdata = file_get_contents('php://input');
$postdata = json_decode($contentdata);

var_dump($postdata);

$hours = $postdata->hours;
$min = $postdata->min;
$second = $postdata->second;



$sql = "INSERT INTO `recordrun_seg` (`recordrun_seg_hours`, `recordrun_seg_min`, `recordrun_seg_second`) 
VALUES ($hours,$min,$second)";

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