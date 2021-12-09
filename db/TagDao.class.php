<?php

include_once 'database.class.php';
include_once 'model/Tag.php';

/**
 * This class deals with all database operation related to Tag
 */
class TagDao extends Database {

    // public function createTag($name){

    // }

    public function getTagByName($name){

        $sql = "SELECT * FROM Tag WHERE Name = '$name'";
        $result = $this->getConnection()->query($sql);

        while($row = $result->fetch_assoc()){
            $tag = new Tag($row["Name"], $row["Tag_id"], $row["Category"], $row["Parent_Tag_Id"]);
        }
        return $tag;

    }

    public function getAllCategories(){

        $sql = "SELECT distinct category FROM Tag";

        $result = $this->getConnection()->query($sql);

        $json = [];
        while($row = $result->fetch_assoc()){
            $json[] = $row["category"];
        }
        return $json;
    }

    public function getAll(){

        $sql = "SELECT * FROM Tag";

        $result = $this->getConnection()->query($sql);

        $json = [];
        while($row = $result->fetch_assoc()){
            echo $row["Name"];
            $json[] = $row["Name"];
        }
    }

    public function getAllTags(){

        $sql = "SELECT * FROM Tag";

        $result = $this->getConnection()->query($sql);

       // $tags = [];
        $json = [];
        while($row = $result->fetch_assoc()){
            $json[] = $row;
            // $tag = new Tag($row["Name"], $row["TagId"], $row["Category"], $row["ParentTagId"]);
            // array_push($tags,$tag);
        }
        return $json;
    }

    public function getTagsByCategory($category){

        $sql = "SELECT * FROM Tag WHERE category = '$category'";

        $result = $this->getConnection()->query($sql);

        $json = [];
        while($row = $result->fetch_assoc()){
            $json[] = $row["Name"];
        }
        //return $json;
        return $result->fetch_assoc();
    }


    public function getTags($category){

        $sql = "SELECT * FROM Tag WHERE category = '$category'";

        $result = $this->getConnection()->query($sql);

        $tags = [];
        while($row = $result->fetch_assoc()){
            $tag = new Tag($row["Name"], $row["Tag_id"], $row["Category"], $row["Parent_Tag_Id"]);
            array_push($tags,$tag);
        }
        //return $json;
        return $tags;
    }

    public function getChildTags($parentTagId){

        $sql = "SELECT name from Tag where Parent_Tag_Id = '$parentTagId'";

       // $sql = "SELECT tagId FROM Tag WHERE name = '$parentTag'";

        $result = $this->getConnection()->query($sql);

        $tags = [];
        while($row = $result->fetch_assoc()){
            $tag = new Tag($row["Name"], $row["Tag_id"], $row["Category"], $row["Parent_Tag_Id"]);
            array_push($tags,$tag);
        }
        return $tags;
    }

    public function searchTagsByName($search_str){

        $sql = "SELECT * FROM Tag WHERE Name like '%$search_str%'";
        $result = $this->getConnection()->query($sql);

        // $result = $this->getConnection()->prepare($sql);

        // $result->execute([$search_str]);

        // $tags = $result->fetchAll();

        $tagList = [];

        while($row = $result->fetch_assoc()){
            $tag = new Tag($row["Name"], $row["Tag_id"], $row["Category"], $row["Parent_Tag_Id"]);
            array_push($tagList,$tag);
        }

        return $tagList;
    }
}