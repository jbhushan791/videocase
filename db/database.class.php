<?php

/**
 * This class is responsible for connecting to database.
 */
class Database{

    // Local 
    public $servername = "127.0.0.1";
    public $username = "root";
    public $password = "123456";
    public $dbname = "videocase";

    public $conn;

    // Test 
    // private $servername = 'mysql-test.uits.iu.edu';
    // private $username = 'pbltec_root';
    // private $password = '$qZvcjvuM>7Tc$8rU=89sKE4XFL5ug';
    // private $dbname = 'pbltec_videocase';

    // Prod 
    // private $servername = 'mysql.uits.iu.edu';
    // private $username = 'pbltec_root';
    // private $password = '';
    // private $dbname = 'pbltec_videocase';

    function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
       }
    }

    protected function getConnection(){
        return $this->conn;
    }
}