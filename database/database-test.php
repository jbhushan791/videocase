<?php

     // include_once 'parent-database.php';

     // class DB extends Database{
     //      //private $con;
     //      private  $username = 'pbltec_root';
     //      private $servername = 'mysql-test.uits.iu.edu';
     //      private $password = '$qZvcjvuM>7Tc$8rU=89sKE4XFL5ug';
     //      private $dbname = 'pbltec_videocase';
          
     //      public function __construct(){
     //           $con = new mysqli($servername, $username, $password,$dbname);
     //           // Check connection
     //           if ($con->connect_error) {
     //                die("Connection failed: " . $con->connect_error);
     //           }
     //           // try{
     //           //      $this->con = new PDO($dsn, $this->user, $this->password);
     //           //      $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     //           // } catch(PDOException $e){
     //           //      echo "Connection Failed: " . $e.getMessage();
     //           // }
     //      }
     // }

    // Create connection
     $servername = 'mysql-test.uits.iu.edu';
     $username = 'pbltec_root';
     $password = '$qZvcjvuM>7Tc$8rU=89sKE4XFL5ug';
     $dbname = 'pbltec_videocase';
     $conn = mysqli_connect($servername, $username, $password);
     // Check connection
     if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
     }

     mysqli_select_db($conn, $dbname) or die("Could not open the db '$dbname'");
 

?>