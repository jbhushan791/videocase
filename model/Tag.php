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


    // Methods
    // function set_name($name) {
    //     $this->name = $name;
    // }
    function get_name() {
        return $this->name;
    }

    // function set_tagId($tagId) {
    //     $this->tagId = $tagId;
    // }
    function get_tagId() {
        return $this->tagId;
    }

    // function set_category($category) {
    //     $this->category = $category;
    // }
    function get_category() {
        return $this->category;
    }

    // function set_parentTagId($parentTagId) {
    //     $this->parentTagId = $parentTagId;
    // }
    function get_parentTagId() {
        return $this->parentTagId;
    }

}
?>