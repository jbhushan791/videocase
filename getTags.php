<?php
  // include_once 'database/database-test.php';
  include_once 'database/database-local.php';

    $sql = "SELECT Name FROM Tag WHERE Name LIKE '%".$_GET['query']."%'";

    $result = $conn->query($sql);

    $json = [];
	while($row = $result->fetch_assoc()){
        echo $row["Name"];
	    $json[] = $row["Name"];
	}


?>