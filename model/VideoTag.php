<?php

/**
 * Data Model for Tag
 */
class VideoTag {

    private $id;
    private $tagId;
    private $videoId;


    function __construct($tagId, $videoId) {
        $this->tagId = $tagId;
        $this->videoId = $videoId;
    }

    function get_tagId() {
        return $this->tagId;
    }

    function get_videoId() {
        return $this->videoId;
    }

    function set_id($id) {
        $this->id = $id;
    }

    function get_d() {
        return $this->videoId;
    }

}

?>