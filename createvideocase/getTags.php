<?php

// include_once 'database/database-test.php';

include_once 'database/database.php';


// // Create connection
// $servername = "127.0.0.1";
// $username = "root";
// $password = "123456";
// $dbname = "videocase";
// $conn = new mysqli($servername, $username, $password,$dbname);
// // Check connection
// if ($conn->connect_error) {
// die("Connection failed: " . $conn->connect_error);
// }

$sql = "SELECT NAME, TAGID FROM Tag WHERE NAME LIKE '%".$request."%'";

$result = $conn->query($sql);
$request = mysqli_real_escape_string($db_connect, $_POST["query"]);
$query = "SELECT * FROM members_mst WHERE member_name LIKE '%".$request."%'";

$result = mysqli_query($db_connect, $query);

$all_member_data = array();

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $all_member_data[] = $row["NAME"];
    }
 echo json_encode($all_member_data);
}

?>


<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    <script type="text/javascript" src="getTags.js"></script>
<head>
<body>
    <div class="container">	
        <div class="row">
            <div class="col-xs-3"> 			
                <label>Tags</label>
                <input class="typeahead form-control" name ="tag_list" id ="tag_list"  type="text" placeholder="Type Tag....">
            </div>
        </div>	
    </div>
<body>
<html>
