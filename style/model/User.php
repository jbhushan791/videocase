<?php
class User {

    private $first_name;
    private $last_name;
    private $email;

    function __construct($first_name, $last_name, $email) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
    }

    // Methods
    function set_first_name($first_name) {
        $this->first_name = $first_name;
    }

    function get_first_name() {
        return $this->first_name;
    }

    function set_last_name($last_name) {
        $this->last_name = $last_name;
    }

    function get_last_name() {
        return $this->last_name;
    }

    function set_email($email) {
        $this->email = $email;
    }

    function get_email() {
        return $this->email;
    }

}

?>