<?php 
    include_once '../triamrun/connentDB.php';

    foreach ($conn->query("SELECT * FROM mission") as $row){
        echo $row['mission_name'] . " <br>" .$row['mission_distance'];    
    }

    // $statement = $conn->prepare("SELECT * FROM mission");
    // $statement->execute();
    // $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    // $json = json_encode($results);

?>