<?php 
    include 'model/User.php';
    session_start();
    include_once 'db/VideocaseDao.class.php';
    include_once 'db/VideoDao.class.php';
    include_once 'model/Videocase.php';
    include_once 'model/Video.php';

    if(isset($_GET['id'])){
        $videocaseDao =  new VideocaseDao();
        $result = $videocaseDao->get($_GET['id']);

        $videoDao = new VideoDao();
        $videos = $videoDao->getAll($_GET['id']);


    }

    
    // Add new classroom video
    if(isset($_POST['ccreate'])) {
        $title_c = $_POST['ctitle'];
        $description_c = $_POST['cdescription'];
        $tags = explode(',', $_POST['tags']);

        $target_dir = "uploads/";
        $target_classroom_video = $target_dir . $_FILES['cvideo']['name'];

        $classroom_video = new Video( $title_c, 'Classroom', $description_c , $target_classroom_video );
        $classroom_video->set_tags($tags);
        $classroom_video->set_videocaseId($_GET['id']);

        move_uploaded_file($_FILES['cvideo']['tmp_name'], $target_classroom_video);
        $videoDao->create($classroom_video);
        header("Refresh:0");
    }

    // Add new classroom video
    if(isset($_POST['icreate'])) {
        $title_i = $_POST['ititle'];
        $description_i = $_POST['idescription'];
        $interview_type = $_POST['interview-type'];

        $target_dir = "uploads/";
        $target_video = $target_dir . $_FILES['ivideo']['name'];

        $interview_video = new Video( $title_i, $interview_type, $description_i , $target_video );
        $interview_video->set_videocaseId($_GET['id']);

        move_uploaded_file($_FILES['ivideo']['tmp_name'], $target_video);
        $videoDao->create($interview_video);
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
    <style>
        .accordion {
            margin-top: 5px;
            background-color: #9AC8EC;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        .active, .accordion:hover {
            background-color: #ccc;
        }

        .accordion:after {
            content: '\002B';
            color: #777;
            font-weight: bold;
            float: right;
            margin-left: 5px;
        }

        .active:after {
            content: "\2212";
        }

        .panel {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
            margin-bottom: 5px;
        }
        /* body{
            padding: 14px;
            width: 80%;
        } */
        .videos{
            display: flex;
            flex-wrap: wrap;
        }
        .create{
            display:flex;
            justify-content: flex-end;
            margin-top: 5px;
        }

        /*
        * create form
        */
        form {
          background-color: #ffffff;
          margin: auto;
          font-family: Raleway;
          padding: 40px;
          width: 70%;
          min-width: 300px;
        }

      .text {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
      }

      textarea {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
      }
    </style>
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
    <script>
        function _(x){
	        return document.getElementById(x);
        }
        function updateTags(tag){
            _("tags").value = tag;
            document.cookie = "tags =tag";
        }
    </script>
</header>
<body>
    <button class="accordion"><?php echo $result["Title"]?></button>
    <div class="panel">
    <p><?php echo $result["Description"]?></p>
    <p><?php echo $result["Name"]?></p>
    <p><?php echo $result["Email"]?></p>
    <p><?php echo $result["Biography"]?></p>
    <p><?php echo $result["School"]?></p>
    </div>

    <button class="accordion">Classroom Video</button>
    <div class="panel">
        <?php
            if(isset($_SESSION["user"])) {
                $user = unserialize($_SESSION["user"]);
                if($user->get_role() == 'Admin'){
                    echo "<div class='create'><button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#create-classroom'>Add</button></div>";
                }
            }
        ?>
        <div class = "videos">
            <?php
                foreach($videos as $video) {
                    if($video->get_type() == 'Classroom') {
            ?>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> 
                        <a href="videodetail.php?id=<?php echo $video->get_videoId();?>" target="_blank" class="card-title"><?php echo $video->get_title()?> </a>
                    </h4>
                    <video width ="300" height = "200" controls autoplay>
                        <source src=<?php echo $video->get_url()?> type="video/mp4">
                    </video>
                    <p class="card-text">
                        <a href="#"><i class="material-icons icon">thumb_up</i></a><label><?php echo $video->get_likes()?></label>
                    </p>
                </div>
            </div>
            <?php
                }}
            ?>
        </div>
    </div>

    <button class="accordion">Interviews</button>
    <div class="panel">
    <?php
        if(isset($_SESSION["user"])) {
          $user = unserialize($_SESSION["user"]);
          if($user->get_role() == 'Admin'){
            echo "<div class='create'><button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#create-interview'>Add</button></div>";
            }
        }
    ?>
   
    <div class = "videos">
            <?php
                foreach($videos as $video) {
                    if($video->get_type() != 'Classroom') {
            ?>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> 
                        <a href="#" target="_blank" class="card-title"><?php echo $video->get_title()?> </a>
                    </h4>
                    <video width ="300" height = "200" controls autoplay>
                        <source src=<?php echo $video->get_url()?> type="video/mp4">
                    </video>
                    <p class="card-text">
                        <a href="videodetail.php?id=<?php echo $video->get_videoId();?>"><i class="material-icons icon">thumb_up</i></a><label><?php echo $video->get_likes()?></label>
                    </p>
                </div>
            </div>
            <?php
                }}
            ?>
        </div>
    </div>
      <!-- Modal -->
    <div class="modal fade" id="create-classroom" role="dialog">
        <div class="modal-dialog">
        
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            
            <h4 class="modal-title">Create Classroom Video</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">
                    Title: <br>
                    <input class ="text" type="text" id ="ctitle" name="ctitle"><br>
                    Description: <br>
                    <textarea type = "textarea" name ="cdescription" id ="cdescription" rows="7"></textarea><br><br>
                    <label>Tags:</label><br/>
                    <input type="text" name="tags" id = "tags" placeholder="Tags" class="typeahead tm-input form-control tm-input-info"/>
                    <div class="file-upload-wrapper">
                    <input type="file" accept="video/*" name="cvideo" /> <br><br>
                    </div>
                    <input type='submit' name="ccreate" value='add'>
                </form>
            </div>
        </div>
        </div>
    </div>
    <div class="modal fade" id="create-interview" role="dialog">
        <div class="modal-dialog">
        
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            
            <h4 class="modal-title">Add Teacher Interview</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">
                    Interview Type: 
                    <select id="interview-type" name="interview-type">
                        <option value="Pre Interview">Pre Interview</option>
                        <option value="Post Interview">Post Interview</option>
                    </select><br>
                    Title: <br>
                    <input class ="text" type="text" id ="ititle" name="ititle"><br>
                    Description: <br>
                    <textarea type = "textarea" name ="idescription" id ="idescription" rows="7"></textarea><br><br>
                    
                     <div class="file-upload-wrapper">
                    <input type="file" accept="video/*" name="ivideo" /> <br><br>
                    </div>
                    <input type='submit' name="icreate" value='add'>
                </form>
            </div>
        </div>
        </div>
    </div>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
                } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
                } 
            });
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var tagApi = $(".tm-input").tagsManager();

            jQuery(".typeahead").typeahead({
            name: 'tags',
            displayKey: 'name',
            source: function (query, process) {
                return $.get('getTags.php', { query: query }, function (data) {
                data = $.parseJSON(data);
                return process(data);
                });
            },
            afterSelect :function (item){
                tagApi.tagsManager("pushTag", item);
                tag = tagApi.tagsManager("tags");
                // _("tags").value = tag;
                // document.cookie = "tags =tag";
               updateTags(tagApi.tagsManager("tags"));
            }
            });
        });
    </script>
<body>
</html>