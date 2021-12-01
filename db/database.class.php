<?php

class Database{

    // Local 
    public $servername = "127.0.0.1";
    public $username = "root";
    public $password = "123456";
    public $dbname = "videocase";

    // Test 
    // private $servername = 'mysql-test.uits.iu.edu';
    // private $username = 'pbltec_root';
    // private $password = '$qZvcjvuM>7Tc$8rU=89sKE4XFL5ug';
    // private $dbname = 'pbltec_videocase';

    protected function connect(){
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
       }
       return $conn;
    }
}