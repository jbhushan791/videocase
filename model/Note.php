<?php

/**
 * Data Model for Note
 */
class Note{

    private $noteId;
    private $videoId;
    private $text;
    private $userId;

    function __construct($noteId, $videoId, $text, $userId) {
        $this->noteId = $noteId;
        $this->videoId = $videoId;
        $this->text = $text;
        $this->userId = $userId;
    }

    function get_noteId() {
        return $this->noteId;
    }

    function get_videoId() {
        return $this->videoId;
    }

    function get_text() {
        return $this->text;
    }

    function get_userId() {
        return $this->userId;
    }
}

?>