<?php
     class Database {

          public $con;
        // public  $username = 'pbltec_root';
        // public $servername = 'mysql-test.uits.iu.edu';
        // public $password = '$qZvcjvuM>7Tc$8rU=89sKE4XFL5ug';
        // public $dbname = 'pbltec_videocase';
        // public function __construct($host,$dbname, $user,$password ) {
        //     $dsn = "msql:host=" . $host . ";dbname=" .$dbname;
        //     try{
        //         $this->con = new PDO($dsn, $user, $password);
        //         $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //     } catch(PDOException $e){
        //         echo "Connection Failed: " . $e.getMessage();
        //     }
        //   }


        public function login($email, $pass){
            $query = "SELECT FIRST_NAME, LAST_NAME, EMAIL FROM User WHERE EMAIL = '$email' AND PASSWORD = $pass";
            $result = $conn->query($sql);
            // $stmt = $this->con->prepare($query);
            // $stmt.execute();
            // $data = $stmt->fetch(PDO::FETCH_ASSOC);
            // echo $data;
            return $result;
        }

        public function register($email, $pass){
            $query = "SELECT FIRST_NAME, LAST_NAME, EMAIL FROM User WHERE EMAIL = '$email' AND PASSWORD = $pass";
            $stmt = $this->con->prepare($query);
            $stmt.execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }


        public function searchByTitle($con){
            $query = "SELECT * FROM VIDEOCASE";
            $stmt = $this->con->prepare($query);
            $stmt.execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getAllTags($con){
            $query = "SELECT * FROM VIDEOCASE";
            $stmt = $con->prepare($query);
            $stmt.execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>