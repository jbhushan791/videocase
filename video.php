<!DOCTYPE html>
<style>
    <?php include 'style/video.css'; ?>
</style>
<html>
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
    <div class="bigvideo">
        <div class ="v" style="border: cornflowerblue;">
        <h3 class="videotitle"> VIDEO TITLE </h3>
            <video class ="v" height= 400px controls style ="margin: 20px !important;">
                <source src="demo.MP4" type="video/mp4">
            </video>
            <div class ="bar">
                <button type="button" class="btn btn-secondary" data-toggle="collapse" 
                        data-target="#comment">Discussion</button><br><br>
                <div class="tag"><label> #tag1 </label>
                <label> #tag2 </label>
                <label> #tag3 </label>
                <label> #tag4 </label></div>
            </div>
            <div id="comment" class="collapse discussion">
                <label>Discussion 1.. Discussion ... Some text</label>
            </div>
            <div id="comment" class="collapse discussion">
                <label>Discussion 2.. Discussion ... Some text<br>
                Second line <br>
                Third line</label>
            </div>
            <div id="comment" class="collapse discussion">
                <label>Discussion 3.. Discussion ... Some text</label>
            </div>
            <textarea class="form-control collapse" rows="5" id="comment"></textarea>
            <button id="comment" type="submit" class="btn btn-outline-secondary btn-sm collapse">Post</button>
        </div>
        <div class="card person" style="border: cornflowerblue;">
                <img class="card-img-top" src="image/person.png" alt="Card image">
                <div class="card-body text-center">
                    <h4 class="card-title">Presenter Name</h4>
                    <i style="margin-botton: 10px !important">Presenter occupation</i><br>
                    <p class="card-text">Presenter Profilr.. work.. some text text text tetx
                        some text text text tetx some text text text tetx some text text text tetx
                        some text text text tetx some text text text tetx some text text text tetx
                        some text text text tetx some text text text tetx some text text text tetx
                        some text text text tetx some text text text tetx some text text text tetx
                        some text text text tetx some text text text tetx some text text text tetx
                        some text text text tetx some text text text tetx some text text text tetx
                        some text text text tetx some text text text tetx some text text text tetx
                    </p>
                </div>
        </div>
    </div>
    <!-- </body -->
    <?php include 'footer.php'; ?>
</html> 