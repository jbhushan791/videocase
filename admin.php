<?php
//include_once 'database/database-test.php';
include_once 'database/database-local.php';


$sql = "SELECT * FROM Videocase ";
$searchStr = $_POST["searchStr"];
if($searchStr != ""){
    $sql = $sql + "where TITLE LIKE '%" .$searchStr. "%'";
}
$result = mysqli_query($conn,$sql);
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
    </head>
    <body>
        <!-- <div class="create">
            <button type="button" class="btn btn-primary">Create Videocase</button>
        </div> -->
        <div class="service-section section-tb-padd-100" style="background: #red">
            <div class="hcreate">
                <h3>Videocases</h3>
                <a href="createvideocase.php" target="_blank" class="card-title"><button>Add new</button></a>
                <!-- <button onClick="href='createvideocase.php'" class="btn btn-light">Add new</button> -->
            </div>
            <input name="searchStr" class="form-control" id="myInput" type="text" placeholder="Search by title..">
            <br>

            <!-- <div class="service-section section-tb-padd-100" style="background: #red"> -->
            <div>
                <?php
                echo "$ip";
                while($row = mysqli_fetch_array($result)) {
                ?>
                    <!-- <div class="row tv-service-section-row"> -->
                        <div class="col-xl-4 col-md-6 tv-sm-center">
                            <article class="tv-icon-box">
                                <div class="tv-box-top">
                                    <div class="tv-box-icon"><span class="ti-user"></span></div>
                                    <div class="tv-box-header">
                                        <h5><a href="#"><?php echo $row["Title"]; ?></a></h5>
                                    </div>
                                </div>
                                <div class="tv-divider"></div>
                                <div class="tv-box-body">
                                    <p><?php echo $row["Description"]; ?></p>
                                </div>
                            </article>
                        </div>
                    <!-- </div> -->
                <?php
                }
                ?>
            </div>
            
        </div>
        <script>
            $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            });
        </script>
    </body>
</html>