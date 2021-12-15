<?php
    session_start();
    session_unset();
    session_destroy();
    /**
     * Enable following in non dev env (test and prod)
     */
    header("location: /videocase/landing.php");
    //header("location: /landing.php");
?>