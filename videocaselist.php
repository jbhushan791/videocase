<!DOCTYPE html>
<style>
    <?php include 'style/video.css';
          include 'style/filter.css';
    
    ?>
</style>
<html>
        <!-- <div class ="filter">
            <select class="top"  id="sub">
                <option selected>Subject</option>
                <option>Math</option>
                <option>Science</option>
                <option>Computer</option>
            </select>
            <select class="top" id="grade">
                <option selected>Grade</option>
                <option>1-7</option>
                <option>8-14</option>
            </select>
            <select class="top" id="strategy">
                <option selected>All</option>
                <option>Case Based Learning</option>
                <option>Problem Based Learning</option>
                <option>Project Based Learning</option>
                <option>Questioning</option>
                <option>Inquiry Learning</option>
            </select>
            <select class="top" id="strategy">
                <option selected>Tag</option>
                <option>Tag 1</option>
                <option>Tag 2</option>
            </select>
            <button class="top">Search</button>
        </div> -->
    <div class="sidenav">
        <div class="row">
            <?php
                include 'filter.php';
            ?>   
            <div class="col-sm-10">
                <div class="card-columns">
                    <div class="card">
                        <div class="card-body text-center">
                            <video width ="400" height = "300" controls autoplay>
                                <source src="demo.MP4" type="video/mp4">
                            </video>
                            <!-- <a href="/Videocase/videocase.php" target="_blank" class="card-title">Video Title</a> -->
                            <a href="videocase.php" target="_blank" class="card-title">Video Case Title</a>
                            <p class="card-text">Some example text.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body text-center">
                            <video width ="400" height = "300" controls autoplay>
                                <source src="demo.MP4" type="video/mp4">
                            </video>
                            <h4 class="card-title">some heading</h4>
                            <p class="card-text">Some example text.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body text-center">
                            <video width ="400" height = "300" controls autoplay>
                                <source src="demo.MP4" type="video/mp4">
                            </video>
                            <h4 class="card-title">some heading</h4>
                            <p class="card-text">Some example text.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body text-center c">
                            <video width ="400" height = "300" controls autoplay>
                                <source src="demo.MP4" type="video/mp4">
                            </video>
                            <h4 class="card-title">some heading</h4>
                            <p class="card-text">Some example text.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body text-center">
                            <video width ="400" height = "300" controls autoplay>
                                <source src="demo.MP4" type="video/mp4">
                            </video>
                            <h4 class="card-title">some heading</h4>
                            <p class="card-text">Some example text.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body text-center">
                            <video width ="400" height = "300" controls autoplay>
                                <source src="demo.MP4" type="video/mp4">
                            </video>
                            <h4 class="card-title">some heading</h4>
                            <p class="card-text">Some example text.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body text-center">
                            <video width ="400" height = "300" controls autoplay>
                                <source src="demo.MP4" type="video/mp4">
                            </video>
                            <h4 class="card-title">some heading</h4>
                            <p class="card-text">Some example text.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body text-center">
                            <video width ="400" height = "300" controls autoplay>
                                <source src="demo.MP4" type="video/mp4">
                            </video>
                            <h4 class="card-title">some heading</h4>
                            <p class="card-text">Some example text.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html> 
