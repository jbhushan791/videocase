<?php

class VideoInfo {

    private $video;
    private $notes = [];
    private $tags = [];

    function __construct($video, $notes, $tags) {
        $this->video = $video;
        $this->notes = $notes;
        $this->tags = $tags;
    }

    function get_video() {
        return $this->video;
    }

    function get_notes() {
        return $this->notes;
    }

    function get_tags() {
        return $this->tags;
    }

}

?>