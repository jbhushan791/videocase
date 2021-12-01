<?php

include_once 'database.class.php';
include_once 'model/Tag.php';

class Tags extends Database{

    public function getAllCategories(){

        $sql = "SELECT distinct category FROM Tag";

        $result = $this->connect()->query($sql);

        $json = [];
        while($row = $result->fetch_assoc()){
            $json[] = $row["category"];
        }
        return $json;
    }

    public function getAll(){

        $sql = "SELECT * FROM Tag";

        $result = $this->connect()->query($sql);

        $json = [];
        while($row = $result->fetch_assoc()){
            echo $row["Name"];
            $json[] = $row["Name"];
        }
    }

    public function getTagsByCategory($category){

        $sql = "SELECT * FROM Tag WHERE category = '$category'";

        $result = $this->connect()->query($sql);

        $json = [];
        while($row = $result->fetch_assoc()){
            $json[] = $row["Name"];
        }
        //return $json;
        return $result->fetch_assoc();
    }


    public function getTags($category){

        $sql = "SELECT * FROM Tag WHERE category = '$category'";

        $result = $this->connect()->query($sql);

        $tags = [];
        while($row = $result->fetch_assoc()){
            $tag = new Tag($row["Name"], $row["TagId"], $row["Category"], $row["ParentTagId"]);
            array_push($tags,$tag);
        }
        //return $json;
        return $tags;
    }

    public function getChildTags($parentTagId){

        $sql = "SELECT name from Tag where ParentTagId = '$parentTagId'";

       // $sql = "SELECT tagId FROM Tag WHERE name = '$parentTag'";

        $result = $this->connect()->query($sql);

        $tags = [];
        while($row = $result->fetch_assoc()){
            $tag = new Tag($row["Name"], $row["TagId"], $row["Category"], $row["ParentTagId"]);
            array_push($tags,$tag);
        }
        return $tags;
    }

    public function searchTagsByName($search_str){

        $sql = "SELECT * FROM Tag WHERE Name '%.?.%'";

        $result = $this->connect()->prepare($sql);

        $result->execute([$search_str]);

        $tags = $result->fetchAll();

        $json = [];
        while($row = $tags->fetch_assoc()){
            echo $row["Name"];
            $json[] = $row["Name"];
        }
    }
}