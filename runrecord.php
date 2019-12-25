<?php 
    include_once '../triamrun/connentDB.php';

    // $contentdata = file_get_contents("php:://input");

// $statement = $conn->prepare('INSERT INTO recordrunning (recordrunning_hours, recordrunning_min,recordrunning_second)
//     VALUES (:hours, :min,:second)');

// $statement->execute([
//     'hours' => 122,
//     'min' => 20,
//     'second' => 20,
// ]);

// $results = $statement->fetchAll(PDO::FETCH_ASSOC);
// $json = json_encode($results);



$input = file_get_contents('php://input'); 
$data = json_decode($input, true); 
$message = array(); 
if($data['action'] == "insert"){
    $hours = $data['hours']; 
    $min = $data['min']; 
    $second = $data['second']; 

    $q = mysqli_query($con, "INSERT INTO recordrunning ( recordrunning_hours, recordrunning_min,recordrunning_second ) VALUES ($hours, $min, $second)"); 
    if($q){
    $message['status'] = "success"; 
    }
    else{
    $message['status'] = "error"; 
    }
    echo json_encode($message); 
}
echo mysqli_error($conn); 


?>