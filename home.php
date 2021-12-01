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
  <style>
  .fakeimg {
    height: 200px;
    background: green;
  }
  </style>
</head> 
<!-- <body> -->
  <div class="jumbotron text-center bg-image a" style="background-image: url('v.jpeg'); margin-bottom:0 ">
    <!-- <h1 class ="text-info"><b>PBL-TECH: Wise Practice Case Construction Tool</b></h1> -->
    <h1><b>PBL-TECH</b></h1>
    <!-- <div>
      <a href="login.php"><b>Login</b></a>
      <a href="register.php"><b>Register</b></a>
    </div> -->
  </div>
  
<!-- <nav class="navbar navbar-expand-sm bg-info navbar-dark"> -->
  <!-- <a class="navbar-brand" data-toggle="tab" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button> -->
  <div class="navigation-bar">
    <div>
      <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#videocaselist">Videocases</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#presenter">Presenter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#contact">Contact Us</a>
        </li>  
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#admin">Admin Page</a>
        </li>   
      </ul>
    </div>
    <!-- <div>
      <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#register">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#login">Login</a>
        </li>
      </ul>
    </div> -->
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
      <!-- <div id="register" class="container tab-pane fade"><br>
         
      </div>
      <div id="login" class="container tab-pane fade"><br>
         
      </div> -->
  </div>
  <?php include 'footer.php'; ?>
</html>