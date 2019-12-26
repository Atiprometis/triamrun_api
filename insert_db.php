<?php

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: X-Requested-With, content-type, access-control-alloworigin, access-control-allow-methods, access-control-allow-headers');


$link = mysqli_connect('localhost', 'root', '', 'triamrun');
mysqli_set_charset($link, 'utf8');



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

// get post body content
$content = file_get_contents('php://input');
// parse JSON

$user = json_decode($content, true);
$hours = $hours['hours'];
$min = $min['min'];
$second = $second['second'];


//check duplicate $email

$sql2 = "SELECT email FROM user WHERE email='$email' ";
$result2 = mysqli_query($link, $sql2);
$rowcount = mysqli_num_rows($result2);
if ($rowcount == 1) {
echo json_encode(['status' => 'error','message' => 'ไมสามารถลงทะเบียนได อีเมลนี้มี
ผูใชแลว']);
exit;
}

//insert data
$sql = "INSERT INTO `recordrunning` (`recordrunning_hours`, `recordrunning_min`, `recordrunning_second`) VALUES ($hours,$min,$second);";
$result = mysqli_query($link, $sql);
if ($result) {
 echo json_encode(['status' => 'ok','message' => 'บันทึกขอมูลเรียบรอยนะ']);
} else {
 echo json_encode(['status' => 'error','message' => 'เกิดขอผิดพลาดในการบันทึกขอมูล']);
}
}
mysqli_close($link);

?>