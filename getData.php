<?php 
    include_once '../triamrun/connentDB.php';


    $contentdata = file_get_contents("php://input");
    $getdata = json_decode($contentdata);

    $getsearch = $getdata->searchdata;
    $pass = $getdata->pass;

?>