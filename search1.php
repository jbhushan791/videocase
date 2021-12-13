<?php
include_once 'db/VideocaseDao.class.php';
include_once 'model/Videocase.php';

$videcaseDao = new VideocaseDao();
$result = $videcaseDao->getAllByTitle($_POST['searchStr']);

?>

<!DOCTYPE html>
<html>
<head>
<style>
*{
    padding:0;
    margin:0;
    box-sizing: border-box;
}

body{
    display: flex;
    align-items: center;
    flex-direction: column;
    font-family: "Raleway", sans-serif;
    background: 
}
#searchBox{
    height: 48px;
    width: 600px;
    /* border: none; */
    font-family: "Raleway", sans-serif;
    font-size: 16px;
    padding: 8px 32px;
}

#dataviewer{
    padding: 32px;
    list-style: none;
    width:600px;
    height: 200px;
    overflow-y: scroll;
}

#dataviewer li{
    padding: 8px 0;
    border-left: 1px solid #635f5f;
    padding-left: 24px;
}
</style>
</head>
<body>
    <input type="text" name="search" placeholder="Search by title.." id="searchBox" oninput=search(this.value)>
    <ui id="dataviewer">
        <?php foreach($result as $case) { ?>
            <li> <?php echo $case['title'] ?></li>
        <?php } ?>
    </ul>
    <script src="search.js"></script>
</body>
</html>