<?php
  // include_once 'database/database-test.php';
  include_once 'database/database-local.php';

    // // Create connection
    // $servername = "127.0.0.1";
    // $username = "root";
    // $password = "123456";
    // $dbname = "videocase";
    // $conn = new mysqli($servername, $username, $password,$dbname);
    // // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }

    $sql = "SELECT Name FROM Tag WHERE Name LIKE '%".$_GET['query']."%'";

    $result = $conn->query($sql);

    $json = [];
	while($row = $result->fetch_assoc()){
        echo $row["Name"];
	    $json[] = $row["Name"];
	}


?>