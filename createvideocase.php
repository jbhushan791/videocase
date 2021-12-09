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
    $tag_ids = [];

  
    // foreach( $tag_ids as $id){
    //   print_r($id);
    // }

    //classroom video info
    $target_dir = "uploads/";

    $target_classroom_video = $target_dir . $_FILES['cvideo']['name'];
    $classroom_video1 = new Video($_POST['title'], 'Classroom', $_POST['description'], $target_classroom_video );
    // $classroom_video1->set_tags($_POST['tags']);
    $array = explode(',', $_POST['tags']);
    $classroom_video1->set_tags($array);
   
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
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>  
  <style>
    body {
          background-color: #f1f1f1;
      }
      
      h3, progress {
          /* background-color: #ffffff; */
          margin-left: 15%;
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
var t1, d1, cdescription, ctitle, idescription, ititle;
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
    // tags = _("tags").value;
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
    _("phase3").style.display = "none";
    _("phase4").style.display = "block";
		_("progressBar").value = 75;
		_("status").innerHTML = "Phase 4 of 4";
	// interviewType = _("interview-type").value;
	// if(interviewType.length > 0){
	// 	_("phase3").style.display = "none";
  //       _("phase4").style.display = "block";
	// 	_("progressBar").value = 75;
	// 	_("status").innerHTML = "Phase 4 of 4";
	// } else {
	//     alert("Please choose interview type");	
	// }
}
function processPhase4(){
    _("phase4").style.display = "none";
    _("show_all_data").style.display = "block";
    _("progressBar").value = 100;
    _("status").innerHTML = "Phase 4 of 4";
}
function updateTags(tag){
  _("tags").value = tag;
  document.cookie = "tags =tag";
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
        <label>Tags:</label><br/>
			  <input type="text" name="tags" id = "tags" placeholder="Tags" class="typeahead tm-input form-control tm-input-info"/>
        <div class="file-upload-wrapper">
        <input type="file" accept="video/*" name="cvideo" /> <br><br>
    </div>
        <button onclick="processPhase2()">Continue</button>
  </div>
  <div id="phase3">
        <h1>Add Teacher Interview</h1>
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
        // console.log(tagApi.tagsManager("tags"));
        updateTags(tagApi.tagsManager("tags"));
        // tag_ids.push(item);
      }
    });
    // console.log(tagApi.tagsManager("tags"));
    
    //print_r(tagApi.tagList());
  });
  
</script>
</body>
</html>