<?php 
    include 'model/User.php';
    session_start();
?>

<style>
    <?php include 'style/side.css'; ?>
</style>
<html>
    <!-- Main Content -->
    <head>
        <title>PBL tech</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style/header.css">
        <style>
        .fakeimg {
            height: 200px;
            background: green;
        }
        </style>
    </head>
    <!-- <body> -->
    <header>
        <h2>PBL Tech</h1>
        <div class="top-nav">
        <?php
            if(isset($_SESSION["user"])) {
            $user = unserialize($_SESSION["user"]);
            // echo "<button type='button' class='btn btn-link'>Hi ".$user->get_first_name() . "</button>";
            echo "<a href='profile.php'>Hi " .$user->get_first_name() . "</a>";
            echo "<a href='logout.php'>Logout</a>";
            } else {
            echo "<a href='login.php'>Login</a>";
            echo "<a href='register.php'>Register</a>";
            }
        ?>
        </div>
    </header>
    <!-- <div class="jumbotron text-center bg-image a" style="background-image: url('v.jpeg'); margin-bottom:0 ">
        <h1><b>PBL-TECH</b></h1>
    </div> -->
    <div>
        <h1>VIDEO CASE NAME</h1>
        <div class="row side">
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Background</h4>
                        <p class="card-text">Some example text.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Lesson</h4>
                        <p class="card-text">Some example text.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Announcement</h4>
                        <p class="card-text">Some example text.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tags</h4>
                        <p class="card-text">Some example text.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Instructor Name</h4>
                        <p class="card-text">Some example text.Some example text.Some example text.Some example text.
                            Some example text.Some example text.Some example text.Some example text.Some example text.Some example text.
                            Some example text.Some example text.Some example text.Some example text.Some example text.
                            Some example text.Some example text.Some example text.Some example text.Some example text.
                            Some example text.Some example text.Some example text.Some example text.Some example text.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <!-- <h4 class="card-title">Video Title 1</h4> -->
                        <h4 class="card-title"> 
                            <!-- <a href="/Videocase/video.php" target="_blank" class="card-title">Video Title 1</a> -->
                            <a href="video.php" target="_blank" class="card-title">Video Title 1</a>
                        </h4>
                        <video width ="400" height = "300" controls autoplay>
                            <source src="demo.MP4" type="video/mp4">
                        </video>
                        <p class="card-text">
                            <a href="#"><i class="material-icons icon">thumb_up</i></a><label>70</label>
                            <a href="#"><i class="material-icons icon">thumb_down</i></a><label>3</label>
                            <a href="#"><i class="material-icons icon">today</i></a><label>Spring 2021</label>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><a href="/Videocase/video.php" target="_blank" class="card-title">Video Title 2</a></h4>
                        <video width ="400" height = "300" controls autoplay>
                            <source src="demo.MP4" type="video/mp4">
                        </video>
                        <p class="card-text">
                            <a href="#"><i class="material-icons icon">thumb_up</i></a><label>70</label>
                            <a href="#"><i class="material-icons icon">thumb_down</i></a><label>3</label>
                            <a href="#"><i class="material-icons icon" style="display:right;">today</i></a><label>Fall 2020</label>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
    <?php include 'footer.php'; ?>
</html>