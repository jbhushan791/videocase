<?php

// include_once 'database/database-test.php';
include_once 'database/database.php';
	
	$showAlert = false;
	$showError = false;
	$exists=false;

  // Videcase
	$title = $_POST["title"];
  $tag = $_POST["tag"];
	$description = $_POST["description"];

  // Classroom video
	$title = $_POST["ctitle"];
  $tag = $_POST["ctag"];
	$description = $_POST["cdescription"];



  //  // Create connection
  //   $servername = "127.0.0.1";
  //   $username = "root";
  //   $password = "123456";
  //   $dbname = "videocase";
  //   $conn = new mysqli($servername, $username, $password,$dbname);
  //   // Check connection
  //   if ($conn->connect_error) {
  //   die("Connection failed: " . $conn->connect_error);
  //   }

   $sql = "SELECT FIRST_NAME, LAST_NAME, EMAIL,PASSWORD FROM User WHERE EMAIL = '$email'";

   $result = $conn->query($sql);

   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["PASSWORD"]."<br>";
        echo $row["FIRST_NAME"]."<br>";
        echo $row["LAST_NAME"]."<br>";
        echo $pass1."<br>";
        if($row["PASSWORD"] === $pass1){
          // echo "alert(Login successful)</html>";
           echo "<b>login successful</b><br>";
           header("location:home.php"); 
        } else {
            //alert("Invalid password");
            echo "Invalid password <br>";
        }
    }
  } else {
    //alert("Invalid credential");
    echo "Invalid credential";
  }
 
      $conn->close();
	
?>




<!DOCTYPE html>
<html>
    <head>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>  

    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>   -->

    <style>
      * {
        box-sizing: border-box;
      }

      body {
        background-color: #f1f1f1;
      }

      #regForm {
        background-color: #ffffff;
        margin: 100px auto;
        font-family: Raleway;
        padding: 40px;
        width: 70%;
        min-width: 300px;
      }

    h1 {
      text-align: center;  
    }

    input {
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

    .background{
        background: rgba(0, 0, 0, 0) url("../image/cv.png") no-repeat fixed center center / cover ;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
      background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
      display: none;
    }

    button {
      background-color: #04AA6D;
      color: #ffffff;
      border: none;
      padding: 10px 20px;
      font-size: 17px;
      font-family: Raleway;
      cursor: pointer;
    }

    button:hover {
      opacity: 0.8;
    }

    #prevBtn {
      background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbbbbb;
      border: none;  
      border-radius: 50%;
      display: inline-block;
      opacity: 0.5;
    }

    .step.active {
      opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
      background-color: #04AA6D;
    }
    .r{
        /* display: flex; */
        /* justify-content: flex-start */
    }
  </style>
 </head>
<body>

<form id="regForm" action="createVideocase.php" method="post">
  <!-- <h1>Register:</h1> -->
  <!-- One "tab" for each step in the form: -->
  <div class="tab">
    <b>Videocase Title :</b>
    <p><input  oninput="this.className = ''" name="title"></p>
    <div class="form-group">
			<label>Add Tags:</label><br/>
			<input type="text" name="tags" placeholder="Tags" class="typeahead tm-input form-control tm-input-info"/>
		</div>

    <!-- <b>Tag:</b>
    <p> <input oninput="this.className = ''" name="tag"></p> -->
    <b>Description:</b>
    <p><textarea type = "textarea" rows="7" oninput="this.className = ''" name="description"></textarea></p>
  </div>
  <div class="tab">
    <b>Add classroom videos</b>
    <b>Title</b>
    <p><input oninput="this.className = ''" name="ctitle"></p>
    <b>Tag:</b>
    <p> <input oninput="this.className = ''" name="ctag"></p>
    <b>Description:</b>
    <p><textarea type = "textarea" rows="7" oninput="this.className = ''" name="cdescription"></textarea></p>
    <div class="file-upload-wrapper">
        <input type="file" id="input-file-now" class="file-upload" name="cfile" />
    </div>
  </div>
  <div class="tab">
    <b>Add teacher interviews</b> :
    <div>
      <label> Select an option: </label>
      <div class="r"> <input type=radio id=pre name=pre value=pre><label for=pre> Pre Interview</label></div>
      <div class="r"> <input type=radio id=post name=post value=post><label for=post> Post Interview</label></div>
      </div>
      <p><input placeholder="title..." oninput="this.className = ''" name="dd"></p>
      <p><input placeholder="tag.." oninput="this.className = ''" name="nn"></p>
      <p><textarea type = "textarea" rows="7" placeholder="description..." oninput="this.className = ''" name="lname"></textarea></p>
      <div class="file-upload-wrapper">
          <input type="file" id="input-file-now" class="file-upload" />
      </div>
    </div>
   <div class="tab"><b>Add background information:</b>
        <p><textarea type = "textarea" rows="7" placeholder="Add teacher biography..." oninput="this.className = ''" name="lname"></textarea></p>
        <p><textarea type = "textarea" rows="7" placeholder="dd School Information..." oninput="this.className = ''" name="lname"></textarea></p> 
  </div>
  <div class="tab"><b>Add Case Material:</b>
        <p><textarea type = "textarea" rows="7" placeholder="Add Lesson Overview..." oninput="this.className = ''" name="lname"></textarea></p>
        <p><textarea type = "textarea" rows="7" placeholder="Add Lesson Narrative..." oninput="this.className = ''" name="lname"></textarea></p> 
        <p><input placeholder="title..." oninput="this.className = ''" name="dd"></p>
        <div class="file-upload-wrapper">
        <input type="file" id="input-file-now" class="file-upload" />
        </div>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
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
      }
    });
  });
</script>

</body>
</html>
