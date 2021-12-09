<?php

include_once 'db/VideocaseDao.class.php';
include_once 'model/Videocase.php';
include_once 'model/Video.php';
include_once 'model/Presenter.php';

$videcaseDao = new VideocaseDao();

if(isset($_POST['title'])){
    // Add presenter information
    $presenter = new Presenter($_POST['name'], $_POST['email'], $_POST['biography'], $_POST['school']);

    //Add videocase information
    $videocase = new Videocase($_POST['title'], $_POST['description']);

    $videos = [];
    //classroom video info
    $target_dir = "uploads/";

    $target_classroom_video = $target_dir . $_FILES['cvideo']['name'];
    $classroom_video1 = new Video($_POST['title'], 'Classroom', $_POST['description'],$target_classroom_video );
    array_push($videos,$classroom_video1);

    if($_POST['pre-title'] != ""){
      $target_pre_interview = $target_dir . $_FILES['pre-video']['name'];
      $pre_video = new Video($_POST['pre-title'], 'pre-Interview', $_POST['pre-description'],$target_pre_interview );
      array_push($videos,$pre_video);
    }

    if($_POST['post-title'] != ""){
      $target_post_interview = $target_dir .  $_FILES['post-video']['name'];
      $post_video = new Video($_POST['post-title'], 'post-Interview', $_POST['post-description'],$target_post_interview );
      array_push($videos,$post_video);
    }

    move_uploaded_file($_FILES['cvideo']['tmp_name'], $target_classroom_video);
    move_uploaded_file($_FILES['pre-video']['tmp_name'], $target_pre_interview);
    move_uploaded_file($_FILES['post-video']['tmp_name'], $target_post_interview);
    $result = $videcaseDao->create($videocase,$presenter, $videos);
    
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>
  body {
        background-color: #f1f1f1;
    }
    
    h3, progress {
        /* background-color: #ffffff; */
        margin-left: 12%;
        /* margin: auto; */
        font-family: Raleway;
        width: 75%;
        min-width: 300px;
      }

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

    button {
      background-color: #3390FF;
      color: #ffffff;
      border: none;
      padding: 10px 20px;
      font-size: 17px;
      font-family: Raleway;
      cursor: pointer;
    }

    h1 {
      color: #3390FF;
      border: none;
      /* padding: 10px 20px; */
      font-family: Raleway;
      cursor: pointer;
    }
/* form#multiphase{ border:#000 1px solid; padding:24px; width:350px; } */
form#multiphase > #phase2, #phase3, #phase4, #show_all_data{ display:none; }
</style>
<script>
var t1, d1, cdescription, ctitle, interviewType, idescription, ititle;
function _(x){
	return document.getElementById(x);
}
function processPhase1(){
	t1 = _("title").value;
	d1 = _("description").value;
	if(t1.length > 0 && d1.length > 0){
		_("phase1").style.display = "none";
		_("phase2").style.display = "block";
		_("progressBar").value = 25;
		_("status").innerHTML = "Phase 2 of 4";
	} else {
	    alert("Please fill in the fields");	
	}
}
function processPhase2(){
	cdescription = _("cdescription").value;
    ctitle = _("ctitle").value;
	if(ctitle.length > 0 && cdescription.length > 0){
		_("phase2").style.display = "none";
		_("phase3").style.display = "block";
		_("progressBar").value = 50;
		_("status").innerHTML = "Phase 3 of 4";
	} else {
        alert("Please fill in the fields");	
	}
}
function processPhase3(){
	interviewType = _("interview-type").value;
	if(interviewType.length > 0){
		_("phase3").style.display = "none";
        _("phase4").style.display = "block";
		_("progressBar").value = 75;
		_("status").innerHTML = "Phase 4 of 4";
	} else {
	    alert("Please choose interview type");	
	}
}
function processPhase4(){
    _("phase4").style.display = "none";
    _("show_all_data").style.display = "block";
    _("progressBar").value = 100;
    _("status").innerHTML = "Phase 4 of 4";
}
function submitForm(){
	_("multiphase").method = "post";
	_("multiphase").action = "createvideocase.php";
	_("multiphase").submit();
}
</script>
</head>
<body>
<progress id="progressBar" value="0" max="100"></progress>
<h3 id="status">Phase 1 of 4 
</h3>
<form id="multiphase" onsubmit="return false" enctype="multipart/form-data">
  <div id="phase1">
        <h1>Videocase</h1> 
        Title: <br>
        <input class ="text"  id="title" name="title"><br><br>
        Description: <br>
        <textarea id ="description" name ="description" rows="7"> </textarea><br><br>
        <button onclick="processPhase1()">Continue</button>
  </div>
  <div id="phase2">
        <h1>Add classroom videos</h1>
        Title: <br>
        <input class ="text" type="text" id ="ctitle" name="ctitle"><br>
        Description: <br>
        <textarea type = "textarea" name ="cdescription" id ="cdescription" rows="7"></textarea><br><br>
        <div class="file-upload-wrapper">
        <input type="file" accept="video/*" name="cvideo" /> <br><br>
    </div>
        <button onclick="processPhase2()">Continue</button>
  </div>
  <div id="phase3">
        <h1>Add Teacher Interview</h1>
        Country: 
        <select id="interview-type" name="interview-type">
        <option value="Pre Interview">Pre Interview</option>
        <option value="Post Interview">Post Interview</option>
        </select><br>
        <h2>Pre Interview</h2>
        Title: <br>
        <input class ="text" type="text" id ="pre-title" name="pre-title"><br>
        Description: <br>
        <textarea type = "textarea" name ="pre-description" id ="pre-description" rows="7"></textarea><br><br>
        <input type="file" accept="video/*" name="pre-video" /> <br><br>

        <h2>Post Interview</h2>
        Title: <br>
        <input class ="text" type="text" id ="post-title" name="post-title"><br>
        Description: <br>
        <textarea type = "textarea" name ="post-description" id ="post-description" rows="7"></textarea><br><br>
        <input type="file" accept="video/*" name="post-video" /> <br><br>

        <button onclick="processPhase3()">Continue</button>
  </div>
  <div id="phase4">
        <h1>Add background information</h1>
         Name: <br>
        <input class ="text" id="name" name="name"><br><br>
         Email: <br>
        <input class ="text" id="email" name="email"><br><br>
        <p><textarea type = "textarea" rows="7" placeholder="Add teacher biography..."  name="biography"></textarea></p>
        <p><textarea type = "textarea" rows="7" placeholder="Add School Information..." name="school"></textarea></p> 
        <button onclick="processPhase4()">Continue</button>
  </div>
  <div id="show_all_data">
        Presentetr Email: <span id="display_fname"></span> <br>
        Last Name: <span id="display_lname"></span> <br>
        Gender: <span id="display_gender"></span> <br>
        Country: <span id="display_country"></span> <br>
        <button onclick="submitForm()">Submit Data</button>
  </div>
</form>
</body>
</html>