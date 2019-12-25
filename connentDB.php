<?php
   //  try
   //  {
   //     $conn = new PDO ("mysql:host=localhost;dbname=triamrun","root","");
   //     $conn->exec("set names utf8");
   //  //    echo "Connected to Database";
   //  }
   //  catch (PDOException $e)
   //  {
   //     echo $e->getMessage();
   //  }

   $serverName = "localhost";
   $userName = "root";
   $userPassword = "";
   $dbName = "triamrun";
  
	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	// if (mysqli_connect_errno())
	// { 
	// 	echo "Database Connect Failed : " . mysqli_connect_error();
	// }
	// else
	// {
	// 	echo "Database Connected.";
	// }

	// mysqli_close($conn);
?>