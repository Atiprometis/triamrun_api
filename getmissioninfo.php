<?php 


include_once '../triamrun/connentDB.php';


$query="SELECT * FROM mission";
$result=$link->query($query);
$array=$result->fetch_assoc();

$json=json_encode($array, JSON_UNESCAPED_UNICODE);
var_dump($json);


?>