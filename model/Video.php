<?php

/**
 * Data Model for Video
 */
class Video{

    private $videoId;
    private $title;
    private $type;
    private $description;
    private $videocaseId;
    private $likes;
    private $counts;
    private $sequence;

    function __construct($videoId, $title, $type, $description, $videocaseId, $likes, $sequence) {
        $this->videoId = $videoId;
        $this->title = $title;
        $this->type = $type;
        $this->description = $description;
        $this->videocaseId = $videocaseId;
        $this->sequence = $sequence;
        $this->likes = $likes;
      }

    function get_videoId() {
        return $this->videoId;
    }

    function get_title() {
        return $this->title;
    }

    function get_type() {
        return $this->type;
    }

    function get_description() {
        return $this->description;
    }

    // function set_child_tags($childTags) {
    //    $this->childTags = $childTags;
    // }

    function get_videocaseId() {
        return $this->videocaseId;
    }

    function get_sequence() {
        return $this->sequence;
    }

    function get_likes() {
        return $this->likes;
    }
}

?>