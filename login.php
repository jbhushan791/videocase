<?php
	
    include_once 'db/UserDAO.class.php';
    $userDAO = new UserDAO();

	$showAlert = false;
	$showError = false;
	$exists=false;

	$email = $_POST["email"];
	$pass1 = $_POST["password"];

    if(isset($_POST["submit"])){
        $result = $userDAO->login($email, $pass1);
        if($result == "") {
           
        } else {
            session_start();
            //echo $result->get_first_name();
            $_SESSION['user'] = serialize($result);
            header("location: /videocase/home.php");
        }
    }
	
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
                            <button class="btn-block" type="submit" name="submit">Login</button> 
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