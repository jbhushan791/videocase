<?php 
    include 'model/User.php';
    session_start();
    include_once 'db/VideoDao.class.php';
    include_once 'model/Video.php';

    include_once 'db/NoteDao.class.php';

    if(isset($_SESSION["user"]) && isset($_GET['id'])){

        $user = unserialize($_SESSION["user"]);

        $videoDao = new VideoDao();
        $videoInfo = $videoDao->get_details($user ->get_user_id(), $_GET['id']);

        $v = $videoInfo->get_video();
        $tags = $videoInfo->get_tags();
        $notes = $videoInfo->get_notes();

    }

    // Add Note
    if(isset($_POST['Post'])) {
        $text = $_POST['note'];
        $noteDao = new NoteDao();

        $noteDao->create($user->get_user_id(), $text, $v->get_videoId());
        header("Refresh:0");
        
    }
?>

<html>
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script> 
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="style/video.css">
</head>
<header>
<link rel="stylesheet" type="text/css" href="style/header.css">
    <h2>PBL Tech</h1>
    <div class="top-nav">
      <?php
        if(isset($_SESSION["user"])) {
          $user = unserialize($_SESSION["user"]);
          echo "<a data-toggle='modal' href='#myProfile'>Hi " .$user->get_first_name() . "</a>";
          echo "<a href='logout.php'>Logout</a>";
        } else {
          echo "<a href='login.php'>Login</a>";
          echo "<a href='register.php'>Register</a>";
        }
      ?>
    </div>
</header>
<body>
    <div class="bigvideo">
        <div class ="v" style="border: cornflowerblue;">
            <h3 class="videotitle"> <?php echo $v->get_title() ?> </h3>
            <video class ="v" height= 400px controls style ="margin: 20px !important;">
                <source src=<?php echo $v->get_url() ?>  type="video/mp4">
            </video>
        <div>
        <div class = "tags-list"> Tags: 
            <?php foreach($tags as $t) {?>
                   <div class=" t w3-padding-8 w3-small w3-blue w3-circle w3-center"><?php echo $t->get_name() ?></div>
            <?php } ?>
        </div>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#overview">
                 <i class="material-icons" style="font-size:36px;">summarize</i>Overview
                </a>
             </li>
            <?php
                if(isset($_SESSION["user"])) {
                    $user = unserialize($_SESSION["user"]);
                    if($user->get_role() == "User"){
            ?>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#notes">
                <i class="material-icons" style="font-size:36px;">note</i>
                Notes
                </a>
            </li>   
            <?php }}?>
        </ul>
    </div> 
     <!-- Tab panes -->
     <div class="tab-content">
        <div id="overview" class="container tab-pane active"><br>
            <div class="card">
                <div class="card-body text-center">
                    <div class = "overview1">
                        <div>
                            <p class="card-text">P<?php echo $v->get_description() ?> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div id="notes" class="container tab-pane fade"><br>
                <div>
                    <?php foreach($notes as $n) {?>
                    <div id="note" class="note">
                        <label><?php echo $n->get_text() ?></label>
                    </div>
                    <?php } ?>
                    <form method="post">
                        <textarea class="form-control" rows="5" id="note" name="note"></textarea>
                        <input type='submit' name="Post" value='Post'>
                    </form>
                     </div>
            </div>
    </div>
<body>
</html>