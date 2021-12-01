<?php
	
    // include_once 'database/database-test.php';
    include_once 'database/database-local.php';

	$showAlert = false;
	$showError = false;
	$exists=false;

	$email = $_POST["email"];
	$pass1 = $_POST["password"];

    // $db = new DB();
    // $data = $db->login($email, $pass1);

    // echo $data;

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

   $sql = "SELECT FIRST_NAME, LAST_NAME, EMAIL FROM User WHERE EMAIL = '$email' and PASSWORD = '$pass1'";

   $result = $conn->query($sql);

   //echo $result."<br>";

   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo $row["FIRST_NAME"]."<br>";
        //echo $row["LAST_NAME"]."<br>";
        header("location: home.php"); 
    }
  } else {
    echo "Invalid credential";
  }
 
  $conn->close();
	
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap core CSS -->
        <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">  
        <!-- Custom styles for this template -->
        <link href="style/style.css" rel="stylesheet">
        <link href="style/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="content">
        <!-- <header>
            <div class="logo text-center">
                <h2>PBL Tech</h2>
            </div>
        </header> -->
        <div class="container">
            <div class="row">
                <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6 col-xs-offset-3 col-xs-6 width-100">
                <form action="login.php" method="post">
                        <div class="loginpage">
                            <input class="form-control placeholder-fix" type="text" placeholder="email" name="email" required="">
                            <input class="form-control placeholder-fix" type="password" placeholder="Password" name="password" required="">
                        </div>
                        <div class="action-button">
                            <button class="btn-block" type="submit">Login</button> 
                        </div>
                    </form>
                </div>
            </div>
            <!-- <div class="row">
                <ul class="page-links">
                    <li><a href="#">Forgot Password?</a></li>
                    <li><a href="register.html">Sign Up</a></li>
                </ul>
            </div> -->
        </div>
    </body>
</html>