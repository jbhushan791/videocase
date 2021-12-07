<?php

include_once 'database.class.php';
include_once 'model/Videocase.php';

/**
 * This class deals with all database operation related to Videocase
 */
class VideocaseDao extends Database{

    /**
     * This function is responsible for retrieving all 
     */
    public function getAll($videocaseId){

        $sql = "SELECT * FROM VIDEOCASE";

        $result = $this->connect()->query($sql);

        $videocases = [];
        while($row = $result->fetch_assoc()){
            $videocase = new Videocase($row["video_id"], $row["title"], $row["type"], $row["description"], $row["videocase_id"], $row["likes"], $row["sequence"]);
            array_push($videocases,$videocase);
        }
        return $videocases;
    }


    // public function create($videocaseId){

    //     $sql = "SELECT * FROM VIDEOCASE";

    //     $result = $this->connect()->query($sql);

    //     $videocases = [];
    //     while($row = $result->fetch_assoc()){
    //         $videocase = new Videocase($row["video_id"], $row["title"], $row["type"], $row["description"], $row["videocase_id"], $row["likes"], $row["sequence"]);
    //         array_push($videocases,$videocase);
    //     }
    //     return $videocases;
    // }

   
}