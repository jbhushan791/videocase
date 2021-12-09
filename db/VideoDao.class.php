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
    public function create($video){

        $title = $video->get_title();
        $description = $video->get_description();
        $url = $video->get_url();
        $videocaseid = $video->get_videocaseId();
        $type = $video->get_type();
        $current_date = date("Y-m-d");


        $sql = "INSERT INTO Video(Title, Description,type, videocase_id, Modified_Date,Created_Date,url)
        VALUES('$title', '$description', '$type', '$videocaseid', '$current_date', '$current_date', '$url')";

        $result = $this->getConnection()->query($sql);
        $last_id = $this->getConnection()->insert_id;
        return $last_id;
    }

   
}