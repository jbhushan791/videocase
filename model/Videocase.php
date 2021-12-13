<?php

/**
 * Data Model for Videocase
 */
class Videocase{

    private $videocaseId;
    private $title;
    private $description;
    private $presenter_id;
    private $tags = [];

    function __construct($title, $description) {
        $this->title = $title;
        $this->description = $description;
    }

    function get_title() {
        return $this->title;
    }

    function get_description() {
        return $this->description;
    }

    function set_videocaseId($videocaseId) {
        $this->videocaseId = $videocaseId;
    }
    
    function get_videocaseId() {
        return $this->videocaseId;
    }

    
}

?>