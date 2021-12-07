<?php

/**
 * Data Model for User
 */
class User {

    private $user_id;
    private $first_name;
    private $last_name;
    private $email;
    private $passwd;
    private $role;
    private $affiliation;
    private $description;

    function __construct($user_id, $first_name, $last_name, $email,  $role, $affiliation, $description) {
        $this->user_id = $user_id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->role = $role;
        $this->affiliation = $affiliation;
        $this->description = $description;
    }

    function get_first_name() {
        return $this->first_name;
    }

    function get_last_name() {
        return $this->last_name;
    }

    function get_email() {
        return $this->email;
    }

    function get_passwd(){
        return $this->passwd;
    }

    function get_role(){
        return $this->role;
    }

    function get_affiliation(){
        return $this->affiliation;
    }

    function get_description() {
        return $this->description;
    }

}

?>