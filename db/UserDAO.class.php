<?php

include_once 'database.class.php';
include_once 'model/User.php';

class UserDAO extends Database{

    public function register($first_name, $last_name, $email, $passwd, $role, $affiliation, $description){

        $sql = "INSERT INTO User (FIRST_NAME, LAST_NAME, EMAIL, PASSWORD, DESCRIPTION, AFFILIATION, ROLE)
                VALUES ('$first_name', '$last_name','$email','$passwd','$description','$affiliation','$role')";

        $result = $this->connect()->query($sql);
        return $result;
    }

    public function login($email,$passwd){

        $sql = "SELECT FIRST_NAME, LAST_NAME, EMAIL FROM User WHERE EMAIL = '$email' and PASSWORD = '$passwd'";

        $result = $this->connect()->query($sql);

        while($row = $result->fetch_assoc()){
            $user = new User($row["USER_ID"], $row["FIRST_NAME"], $row["LAST_NAME"], $row["EMAIL"], $row["ROLE"], $row["AFFILIATION"], $row["DESCRIPTION"]);
            return $user;
        }
        //return $json;
        return "";
    }

   
}