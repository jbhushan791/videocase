<?php

    include_once 'db/UserDAO.class.php';
    $userDAO = new UserDAO();
       
	$showAlert = false;
	$showError = false;
	$exists=false;

    if(isset($_POST["submit"])){
        $fname = $_POST["fname"];
	    $lname = $_POST["lname"];
	    $email = $_POST["email"];
	    $pass1 = $_POST["pass1"];
	    $pass2 = $_POST["pass2"];
        $affiliation = $_POST["affiliation"];
        $description = $_POST["description"];
        $user_type = $_POST["user_type"];
        $result = $userDAO->register($fname, $lname, $email, $pass1, $user_type, $affiliation, $description);
        if($result == 1) {
        /**
         * Use this in non dev environment
         */
        header("location: /videocase/landing.php");
        //header("location: /landing.php");
        }
    }
    
?>
	
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style/register.css" rel="stylesheet">
        <link href="style/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">  
    </head>
    <body class="content">
        <div class="container-fluid">
            <div class="row signup-page">
                <div class="col-xs-12 text-center">
                    <div class="logo">
                        <h1>PBL Tech</h1>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="box">
                        <div class="title">
                            <h2><b><Register/b></h2>
                        </div>
                        <form action="register.php" method="post">
                            <div class="book-form">
                                <div class="col-md-6 col-sm-6 col-xs-6 pr-5">
                                    <input type="text" id="fname" name="fname" class="placeholder-fix" placeholder="First Name" required="" aria-invalid="false">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 pl-5">
                                    <input type="text" id="lname" name="lname" class="placeholder-fix" placeholder="Last Name" required="" aria-invalid="false">
                                </div>
                                <div class="col-xs-12">
                                    <input type="text" id="email" name="email" class="placeholder-fix" placeholder="Email" required="">
                                </div>
                                <div class="col-xs-12">
                                    <input type="password" id="pass1" name="pass1" class="placeholder-fix" placeholder="Password" required="">
                                </div>
                                <div class="col-xs-12">
                                    <input type="password" id="pass2" name="pass2" class="placeholder-fix" placeholder="Retype Password" required="">
                                </div>
                                <div class="col-xs-12">
                                    <input type="text" id="affiliation" name="affiliation" class="placeholder-fix" placeholder="Affiliation" required="">
                                </div>
                                <div class="col-xs-12">
                                    <textarea id="description" name="description" class="placeholder-fix form-control"  rows="5" placeholder="Description" ></textarea>
                                </div>
                                <div class = "col-xs-12 user-type">
                                     <div> 
                                         <input type="radio" id="Admin" name="user_type" value="Admin">
                                         <label for="Admin" >Admin</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="User" name="user_type" value="User">
                                        <label for="User" >User</label>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="buttons">
                                <button type="submit" name="submit" class="btn">Get Started</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>



