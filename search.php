<?php

include_once 'db/VideocaseDao.class.php';
include_once 'model/Videocase.php';

$videcaseDao = new VideocaseDao();
$result = $videcaseDao->getAllByTitle($_POST['searchStr']);

 echo json_encode($result);
?>