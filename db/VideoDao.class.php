<?php

include_once 'database.class.php';
include_once 'model/Video.php';


/**
 * This class deals with all database operation related to Video
 */
class VideoDao extends Database{

    /**
     * This function returns all videos for given videocase
     */
    public function getAll($videocaseId){

        $sql = "SELECT * FROM VIDEO WHERE videocase_id = '$videocaseId'";

        $result = $this->connect()->query($sql);

        $videos = [];
        while($row = $result->fetch_assoc()){
            $video = new Video($row["video_id"], $row["title"], $row["type"], $row["description"], $row["videocase_id"], $row["likes"], $row["sequence"]);
            array_push($videos,$video);
        }
        return $videos;
    }

     /**
     * This function returns all videos for given videocase
     */
    public function create($title){

        $sql = "CREATE * FROM VIDEO WHERE videocase_id = '$videocaseId'";

        $result = $this->connect()->query($sql);

        $videos = [];
        while($row = $result->fetch_assoc()){
            $video = new Video($row["video_id"], $row["title"], $row["type"], $row["description"], $row["videocase_id"], $row["likes"], $row["sequence"]);
            array_push($videos,$video);
        }
        return $videos;
    }

   
}