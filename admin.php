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
        <div>
            <div class="hcreate">
                <h3>Videocases</h3>
                <a href="createvideocase.php" target="_blank" class="card-title"><button>Add new</button></a>
                <!-- <button onClick="href='createvideocase.php'" class="btn btn-light">Add new</button> -->
            </div>
            <input class="form-control" id="myInput" type="text" placeholder="Search for videocases..">
            <br>
            <table class="table table-bordered table-striped">
                <tbody id="myTable">
                <tr>
                    <td>VideoCase 1</td>
                    <td>Sept 2021</td>
                    <td>
                        <i class="material-icons" style="color:blue">mode_edit</i>
                        <i class="material-icons" style="color:blue">delete</i>
                    </td>
                </tr>
                <tr>
                    <td>VideoCase 2</td>
                    <td>Sept 2021</td>
                    <td>
                        <i class="material-icons" style="color:blue">mode_edit</i>
                        <i class="material-icons" style="color:blue">delete</i>
                    </td>
                </tr>
                <tr>
                    <td>VideoCase 3</td>
                    <td>Sept 2021</td>
                    <td>
                        <i class="material-icons" style="color:blue">mode_edit</i>
                        <i class="material-icons" style="color:blue">delete</i>
                    </td>
                </tr>
                <tr>
                    <td>VideoCase 4</td>
                    <td>Sept 2021</td>
                    <td>
                        <i class="material-icons" style="color:blue">mode_edit</i>
                        <i class="material-icons" style="color:blue">delete</i>
                    </td>
                </tr>
                <tr>
                    <td>VideoCase 5</td>
                    <td>Sept 2021</td>
                    <td>
                        <i class="material-icons" style="color:blue">mode_edit</i>
                        <i class="material-icons" style="color:blue">delete</i>
                    </td>
                </tr>
                <tr>
                    <td>VideoCase 6</td>
                    <td>Sept 2021</td>
                    <td>
                        <i class="material-icons" style="color:blue">mode_edit</i>
                        <i class="material-icons" style="color:blue">delete</i>
                    </td>
                </tr>
                <tr>
                    <td>VideoCase 7</td>
                    <td>Sept 2021</td>
                    <td>
                        <i class="material-icons" style="color:blue">mode_edit</i>
                        <i class="material-icons" style="color:blue">delete</i>
                    </td>
                </tr>
                <tr>
                    <td>VideoCase 8</td>
                    <td>Sept 2021</td>
                    <td>
                        <i class="material-icons" style="color:blue">mode_edit</i>
                        <i class="material-icons" style="color:blue">delete</i>
                    </td>
                </tr>
                </tbody>
            </table>
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