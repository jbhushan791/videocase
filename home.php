<!DOCTYPE html>
<html lang="en">
<head>
  <title>PBL tech</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <h1><b>PBL-TECH: Wise Practice Case Construction Tool</b></h1>
  </div>
<!-- <nav class="navbar navbar-expand-sm bg-info navbar-dark"> -->
  <!-- <a class="navbar-brand" data-toggle="tab" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button> -->
  <div>
    <ul class="nav nav-pills" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#videolist">Videos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#">Presenter</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#">Contact Us</a>
      </li>    
    </ul>
  </div> 
   <!-- Tab panes -->
   <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
        <?php include 'main.php'; ?>
    </div>
    <div id="videolist" class="container tab-pane fade"><br>
      <?php include 'videolist.php'; ?>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Under contruction</h3>
    </div>
    <div id="menu3" class="container tab-pane fade"><br>
      <h3>Under contruction</h3>
    </div>
  </div>
</div> 
<!-- </nav> -->
<!-- </body> -->
<?php include 'footer.php'; ?>
</html>