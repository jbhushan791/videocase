<?php

class Tag {

    private $tagId;
    private $name;
    private $category;
    private $parentTagId;

    function __construct($name, $tagId, $category, $parentTagId) {
        $this->name = $name;
        $this->tagId = $tagId;
        $this->category = $category;
        $this->parentTagId = $parentTagId;
      }

    function get_name() {
        return $this->name;
    }

    function get_tagId() {
        return $this->tagId;
    }

    function get_category() {
        return $this->category;
    }

    function get_parentTagId() {
        return $this->parentTagId;
    }
}
?>