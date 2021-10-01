<!DOCTYPE html>
<style>
    <?php include 'style/video.css'; ?>
</style>
<html>
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
    <h1><b>PBL-TECH: Wise Practice Case Construction Tool</b></h1>
    </div>
    <div class="bigvideo">
        <div class ="v" style="border: cornflowerblue;">
        <h3 class="videotitle"> VIDEO TITLE </h3>
            <video class ="v" height= 400px controls style ="margin: 20px !important;">
                <source src="demo.MP4" type="video/mp4">
            </video>
            <div>
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#overview">
            <i class="material-icons" style="font-size:36px;">summarize</i>
            Overview
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#notes">
            <i class="material-icons" style="font-size:36px;">note</i>
            Notes
        </a>
      </li>   
    </ul>
  </div> 
  <!-- Tab panes -->
    <div class="tab-content">
        <div id="overview" class="container tab-pane active"><br>
            <div class="card">
                <div class="card-body text-center">
                    <div class = "overview1">
                        <div class="person">
                            <img class="card-img-top" src="image/person.png" alt="Card image">   
                            <h6 class="card-title">Presenter Name</h6>
                        </div>
                        <div>
                            <i style="margin-botton: 10px !important">Presenter occupation</i><br>
                            <p class="card-text">Presenter Profilr.. work.. some text text text tetx
                                some text text text tetx some text text text tetx some text text text
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h5> Video details </h5>
                <label> Video description.. content... description </label>
            </div>
        </div>
        <div id="notes" class="container tab-pane fade"><br>
            <div>
                <div id="note" class="note">
                    <label>Note 1.. Note ... Some important notes</label>
                </div>
                <div id="note" class="note">
                    <label>Note 2.. Note ... Some text<br>
                    Second line <br>
                    Third line</label>
                </div>
                <div id="note" class="note">
                    <label>Note 3.. Note ... Some text</label>
                </div>
                <textarea class="form-control" rows="5" id="note"></textarea>
                <button id="note" type="submit" class="btn btn-outline-secondary btn-sm">Post</button>
            </div>
        </div>
    </div>
            <!-- <div class ="bar">
                <a href="#" data-toggle="collapse" data-target="#note">
                    <i class="material-icons" style="font-size:36px;">note</i></a><label style="align:center;">Notebook</label>
                <!-- <button type="button" class="btn btn-secondary" data-toggle="collapse" 
                        data-target="#comment">Notebook</button> -->
                <br><br>
                <!-- <div class="tag"><label> #tag1 </label>
                <label> #tag2 </label>
                <label> #tag3 </label>
                <label> #tag4 </label></div> -->
            <!-- </div>
            <div id="note" class="collapse note">
                <label>Note 1.. Note ... Some important notes</label>
            </div>
            <div id="note" class="collapse note">
                <label>Note 2.. Note ... Some text<br>
                Second line <br>
                Third line</label>
            </div>
            <div id="note" class="collapse note">
                <label>Note 3.. Note ... Some text</label>
            </div>
            <textarea class="form-control collapse" rows="5" id="note"></textarea>
            <button id="note" type="submit" class="btn btn-outline-secondary btn-sm collapse">Post</button> -->
        </div> 
        <div>
            <div>
                <h6>Related videos</h6>
            </div>
            <div class="card">
                <div class="card-body text-center">
                    <video width ="200" height = "150" controls autoplay>
                        <source src="demo.MP4" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="card">
                <div class="card-body text-center">
                    <video width ="200" height = "150" controls autoplay>
                        <source src="demo.MP4" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="card">
                <div class="card-body text-center">
                    <video width ="200" height = "150" controls autoplay>
                        <source src="demo.MP4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
    <!-- </body -->
    <?php include 'footer.php'; ?>
</html> 