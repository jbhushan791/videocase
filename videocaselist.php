<?php
include_once 'db/VideocaseDao.class.php';
include_once 'model/Videocase.php';

$videcaseDao = new VideocaseDao();
$result = $videcaseDao->getAll();

?>

<!DOCTYPE html>
<style>
    <?php include 'style/admin.css'; ?>
</style>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        #searchBox{
            height: 48px;
            width: 100%;
            /* border: none; */
            font-family: "Raleway", sans-serif;
            font-size: 16px;
            padding: 8px 32px;
        }

        #dataviewer{
            /* height: 48px; */
            width: 100%;
            display: flex;
            flex-direction:row;
            flex-wrap: wrap;
            justify-content: space-around;
        }
    </style>
    </head>
    <body>
        <div class="service-section section-tb-padd-100" style="background: #red">
            <div class="hcreate">
                <h3>Videocases</h3>
                <?php
                if(isset($_SESSION["user"])) {
                    $user = unserialize($_SESSION["user"]);
                    if($user->get_role() == "Admin"){
                ?>
                <a href="Createvideocase.php" target="_blank" class="card-title"><button>Add new</button></a>
                <?php }}?>
            </div>
            <input type="text" name="search" placeholder="Search by title.." id="searchBox" oninput=search(this.value)>
            <br>
                <div id="dataviewer" class="col-xl-4 col-md-6 tv-sm-center" >
                    <?php
                    foreach($result as $case) {
                    ?>
                    
                        <article class="tv-icon-box">
                            <div class="tv-box-top">
                                <div class="tv-box-icon"><span class="ti-user"></span></div>
                                <div class="tv-box-header">
                                    <h5><a href="Videcasedetail.php?id=<?php echo $case->get_videocaseId();?>"><?php echo $case->get_Title(); ?></a></h5>
                                </div>
                            </div>
                            <div class="tv-divider"></div>
                            <div class="tv-box-body">
                                <p><?php echo $case->get_description(); ?></p>
                            </div>
                        </article>
                    <?php
                    }
                    ?>
                </div>         
        </div>
        <script src="search.js"></script>
    </body>
</html>