<?php

     // Create connection
     $servername = "127.0.0.1";
     $username = "root";
     $password = "123456";
     $dbname = "videocase";
     $conn = new mysqli($servername, $username, $password,$dbname);
     // Check connection
     if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
     }

     // class DB extends Database{
     //      //private $con;
     //      private  $username = "127.0.0.1";
     //      private $servername = "root";
     //      private $password = "123456";
     //      private $dbname = 'videocase';
          
     //      public function __construct(){
     //           $con = new mysqli($this->servername, $this->username, $this->password,$this->dbname);
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
 

?>