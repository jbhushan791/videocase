<?php

/**
 * Data Model for Tag
 */
class Tag {

    private $tagId;
    private $name;
    private $category;
    private $parentTagId;
    private $childTags = [];

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

    function set_child_tags($childTags) {
       $this->childTags = $childTags;
    }

    function get_child_tags() {
        return $this->childTags;
    }
}
?>