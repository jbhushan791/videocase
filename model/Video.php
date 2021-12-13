<?php

/**
 * Data Model for Video
 */
class Video {

    private $videoId;
    private $title;
    private $type;
    private $description;
    private $videocaseId;
    private $likes;
    private $counts;
    private $sequence;
    private $url;
    private $tags=[];

    function __construct($title, $type, $description, $url) {
        $this->title = $title;
        $this->type = $type;
        $this->description = $description;
        $this->url = $url;
      }

    function set_videoId($videoId) {
        $this->videoId = $videoId;
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

    function set_videocaseId($videocaseId) {
        $this->videocaseId = $videocaseId;
    }


    function get_tags() {
        return $this->tags;
    }

    function set_tags($tags) {
        $this->tags = $tags;
    }

    function set_sequence($sequence) {
        $this->sequence = $sequence;
    }

    function get_sequence() {
        return $this->sequence;
    }

    function set_likes($likes) {
        $this->likes = $likes;
    }

    function get_likes() {
        return $this->likes;
    }

    function get_url() {
        return $this->url;
    }
}

?>