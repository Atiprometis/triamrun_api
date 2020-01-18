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
  
	$link = mysqli_connect($serverName,$userName,$userPassword,$dbName);
   mysqli_set_charset($link,'utf8');

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