<?php

/**
 * Data Model for Presenter
 */
class Presenter {

    private $id;
    private $name;
    private $email;
    private $biography;
    private $school;

    function __construct($name, $email, $biography, $school) {
        $this->name = $name;
        $this->email = $email;
        $this->biography = $biography;
        $this->school = $school;
    }

    function get_name() {
        return $this->name;
    }

    function get_email() {
        return $this->email;
    }

    function get_school() {
        return $this->school;
    }

    function get_biography() {
        return $this->biography;
    }

    function get_id() {
        return $this->id;
    }
}

?>