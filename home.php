<?php
  include 'model/User.php';
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
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
          echo "<a data-toggle='modal' href='#myProfile'>Hi " .$user->get_first_name() . "</a>";
          echo "<a href='logout.php'>Logout</a>";
        } else {
          echo "<a href='login.php'>Login</a>";
          echo "<a href='register.php'>Register</a>";
        }
      ?>
    </div>
</header>
  <div class="navigation-bar">
    <div>
      <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#videocaselist">Videocases</a>
        </li>
        <?php
          if(isset($_SESSION["user"])) {
            $user = unserialize($_SESSION["user"]);
            if($user->get_role() == "Admin"){
              echo "<li class='nav-item'>";
              echo "<a class='nav-link' data-toggle='tab' href='#admin'>Admin Page</a>";
              echo "<li>";
            }
          }
        ?>
        
        
        <!-- <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#presenter">Presenter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#contact">Contact Us</a>
        </li>   -->
        <!-- <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#admin">Admin Page</a>
        </li>    -->
      </ul>
    </div>
  </div> 
  <!-- Tab panes -->
  <div class="tab-content">
      <div id="home" class="container tab-pane active"><br>
          <?php include 'main.php'; ?>
      </div>
      <div id="videocaselist" class="container tab-pane fade"><br>
          <?php include 'videocaselist.php'; ?>
      </div>
      <div id="presenter" class="container tab-pane fade"><br>
          <?php include 'presenter.php'; ?>
      </div>
      <div id="contact" class="container tab-pane fade"><br>
          <?php include 'contact.php'; ?>
      </div>
      <div id="admin" class="container tab-pane fade"><br>
          <?php include 'admin.php'; ?>
      </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="myProfile" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">About me</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <?php
            if(isset($_SESSION["user"])) {
              $user = unserialize($_SESSION["user"]);
                echo "<p>" .$user->get_first_name(). " " .$user->get_last_name(). "</p>";
                echo "<p>" .$user->get_email().   "</p>";
                echo "<p>" .$user->get_affiliation().   "</p>";
                echo "<p>" .$user->get_description().   "</p>";
                
            }
          ?>
        </div>
      </div>
    </div>
  </div>
  <?php include 'footer.php'; ?>
</html>