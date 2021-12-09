<?php
    session_start();
    session_unset();
    session_destroy();
    header("location: /videocase/home.php");
?>