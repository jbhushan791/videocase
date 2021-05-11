<!DOCTYPE html>
<style>
    <?php include 'style/video.css'; ?>
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
    <div class="row">
        <div class="col-sm-2" >
            <div id="filter-1" class="card">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#subject">Subject</a>
                </div>
                <div id="subject" class="collapse">
                    <!-- <ul>  -->
                        <!-- <li class="par"> -->
                           <div data-toggle="collapse" data-target="#math"> <input type="checkbox">
                            <label>Mathematics</label></div>
                            <ul id="math" class="collapse">
                                <?php
                                    $maths =  [
                                        "Algebra",
                                        "Calculus",
                                        "Finite",
                                        "Geometry",
                                        "Measurement",
                                        "Number Sense",
                                        "Probability and Statistics",
                                        "Quantitative Reasoning"
                                    ];
                                    foreach ($maths as $key => $val) {
                                        echo "<li><input type=checkbox id=math+$x name=math+$x value=$x><label for=math+$x> $val</label></li>";
                                    }   
                              ?>
                                <!-- <li>
                                    <input type="checkbox" name="math-1" id="math-1">
                                    <label for="math-1">Algebra</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="math-2" id="math-2">
                                    <label for="math-2">PCalculus</label>
                                </li> -->
                            </ul>
                        <!-- </li>  -->
                        <!-- <li> -->
                            <div data-toggle="collapse" data-target="#science">  <input type="checkbox">
                            <label for="short">Science</label></div>
                            <ul id="science" class="collapse">
                                <?php
                                    $science =  [
                                        "Biology",
                                        "Chemistry",
                                        "Earth and Space Science",
                                        "Environmental Science",
                                        "Engineering"
                                    ];
                                    foreach ($science as $key => $val) {
                                        echo "<li><input type=checkbox id=s+$x name=s+$x value=$x><label for=s+$x> $val</label></li>";
                                    }   
                              ?>
                            </ul>
                            <div data-toggle="collapse" data-target="#cs">  <input type="checkbox">
                            <label>Computer Science</label></div>
                            <ul id="cs" class="collapse">
                                <?php
                                    $cs =  [
                                        "Abstraction",
                                        "Algorithm",
                                        "Computational Thinking",
                                        "Debug",
                                        "Decomposition",
                                        "Java",
                                        "Python"
                                    ];
                                    foreach ($cs as $key => $val) {
                                        echo "<li><input type=checkbox id=cs+$x name=cs+$x value=$x><label for=cs+$x> $val</label></li>";
                                    }   
                              ?>
                            </ul>
                            <div data-toggle="collapse" data-target="#ss">  <input type="checkbox">
                            <label>Social Studies</label></div>
                            <ul id="ss" class="collapse">
                                <?php
                                    $ss =  [
                                        "American History",
                                        "Economics",
                                        "Ethnic Studies",
                                        "Sociology",
                                        "World History & Civilization"
                                    ];
                                    foreach ($ss as $key => $val) {
                                        echo "<li><input type=checkbox id=ss+$x name=ss+$x value=$x><label for=ss+$x> $val</label></li>";
                                    }   
                              ?>
                            </ul>
                            <div data-toggle="collapse" data-target="#lang">  <input type="checkbox">
                            <label>Language Art</label></div>
                            <ul id="lang" class="collapse">
                                <?php
                                    $lang =  [
                                        "Chinese",
                                        "English",
                                        "Spanish"
                                    ];
                                    foreach ($lang as $key => $val) {
                                        echo "<li><input type=checkbox id=lang+$x name=lang+$x value=$x><label for=lang+$x> $val</label></li>";
                                    }   
                              ?>
                            </ul>
                            <div data-toggle="collapse" data-target="#arts">  <input type="checkbox">
                            <label>Fine Arts</label></div>
                            <ul id="arts" class="collapse">
                                <?php
                                    $arts =  [
                                        "Dance",
                                        "Music",
                                        "Theatre",
                                        "Visual Arts"
                                    ];
                                    foreach ($arts as $key => $val) {
                                        echo "<li><input type=checkbox id=a+$x name=a+$x value=$x><label for=a+$x> $val</label></li>";
                                    }   
                              ?>
                            </ul>
                            <div>
                                <input type="checkbox">
                                <label>Physical Education</label>
                           </div>
                           <div>
                                <input type="checkbox">
                                <label>Health and Wellness</label>
                            </div>
                            <div>
                                <input type="checkbox">
                                <label>Engineering</label>
                            </div>
                           <div>
                                <input type="checkbox">
                                <label>Technology</label>
                            </div>
                        <!-- </li> -->
                    <!-- </ul> -->
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#grade">Grade</a>
                </div>
                <div id="grade" class="collapse">
                    <?php
                        $grade =  [
                            "Pre-K","K", "1","2","3","4","5","6","7","8","9","10","11","12","Undergraduate","Graduate"
                        ];
                        foreach ($grade as $key => $val) {
                            echo "<li><input type=checkbox id=g+$x name=g+$x value=$x><label for=g+$x> $val</label></li>";
                        }   
                    ?>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#strategy">Strategy</a>
                </div>
                <div id="strategy" class="collapse">
                    <?php
                        $strategy =  [
                            "Direct instruction","Discovery/Inquiry-based learning", 
                            "Problem-based learning","Project-based learning",
                            "Cooperative/collaborative learning","Peer teaching","Questioning",
                            "Modeling",
                            "Formative assessment",
                            "Feedback","Journaling","Reflection","Graphic organizers",
                            "Hands-on learning","Jigsaw","Mastery learning","Role play"
                        ];
                        foreach ($strategy as $key => $val) {
                            echo "<li><input type=checkbox id=s+$x name=s+$x value=$x><label for=s+$x> $val</label></li>";
                        }   
                    ?>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#topic">Topic</a>
                </div>
                <div id="topic" class="collapse">
                    <?php
                        $topic =  [
                            "Civil rights","Freedom of Association", 
                            "Gerrymandering","Use of genetic information",
                            "The children’s march","Chief White Oak",
                            "Indian removal",
                            "Cold War"
                        ];
                        foreach ($topic as $key => $val) {
                            echo "<li><input type=checkbox id=top+$x name=top+$x value=$x><label for=top+$x> $val</label></li>";
                        }   
                    ?>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#audience">Audience</a>
                </div>
                <div id="audience" class="collapse">
                    <?php
                        $audience =  [
                            "Teachers", 
                            "Pre-service Teachers",
                            "Teacher educators",
                            "Researchers",
                            "Administrators",
                            "Policymakers"
                        ];
                        foreach ($audience as $key => $val) {
                            echo "<li><input type=checkbox id=aud+$x name=aud+$x value=$x><label for=aud+$x> $val</label></li>";
                        }   
                    ?>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#types">Types</a>
                </div>
                <div id="types" class="collapse">
                    <?php
                        $types =  [
                            "Lesson Study Developing Instructional Units", 
                            "Case Use already developed units"
                        ];
                        foreach ($types as $key => $val) {
                            echo "<li><input type=checkbox id=type+$x name=type+$x value=$x><label for=type+$x> $val</label></li>";
                        }   
                    ?>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#inst">Institution/ORG</a>
                </div>
                <div id="inst" class="collapse">
                    <?php
                        $inst =  [
                            "Indiana University", 
                            "Auburn University",
                            "MCCSC"
                        ];
                        foreach ($inst as $key => $val) {
                            echo "<li><input type=checkbox id=i+$x name=i+$x value=$x><label for=i+$x> $val</label></li>";
                        }   
                    ?>
                </div>
            </div>
        </div>
        <div class="col-sm-10">
            <div class="card-columns">
                <div class="card">
                    <div class="card-body text-center">
                        <video width ="400" height = "300" controls autoplay>
                            <source src="demo.MP4" type="video/mp4">
                        </video>
                        <!-- <a href="/Videocase/videocase.php" target="_blank" class="card-title">Video Title</a> -->
                        <a href="videocase.php" target="_blank" class="card-title">Video Title</a>
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
</html> 
