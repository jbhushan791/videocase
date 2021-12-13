<?php

include_once 'database.class.php';
include_once 'model/Video.php';
include_once 'model/Tag.php';
include_once 'db/VideoTagDao.class.php';
include_once 'db/TagDao.class.php';
include_once 'model/VideoInfo.php';
include_once 'model/Note.php';
include_once 'db/NoteDao.class.php';


/**
 * This class deals with all database operation related to Video
 */
class VideoDao extends Database {

    /**
     * This function returns all videos for given videocase
     */
    public function getAll($videocaseId){

        $sql = "SELECT * FROM VIDEO WHERE videocase_id = $videocaseId";

        $result = $this->getConnection()->query($sql);

        $videos = [];
        while($row = $result->fetch_assoc()){
            $video = new Video($row["Title"], $row["type"], $row["Description"], $row["url"]);
            $video->set_videoId($row["video_id"]);
            $video->set_likes($row["Likes"]);
            $video->set_sequence($row["Sequence"]);
            $video->set_videocaseId($row["videocase_id"]);
            array_push($videos,$video);
        }
        return $videos;
    }

    /**
     * This function returns video details for given video id
     */
    public function get_details( $userId, $videoId){

        $sql1 = "SELECT * FROM VIDEO WHERE video_id = $videoId";

        $result = $this->getConnection()->query($sql1);

        $videos = [];
        while($row = $result->fetch_assoc()){
            $video = new Video($row["Title"], $row["type"], $row["Description"], $row["url"]);
            $video->set_videoId($row["video_id"]);
            $video->set_likes($row["Likes"]);
            $video->set_sequence($row["Sequence"]);
            $video->set_videocaseId($row["videocase_id"]);
        }

        
        // get tag information
        $tagDao = new TagDao();
        $tags = $tagDao->getVideoTags($videoId);

        // get note information
        $noteDao = new NoteDao();
        $notes = $noteDao->getAll($userId, $videoId);

        $videoInfo = new VideoInfo($video, $notes, $tags);

        return $videoInfo;
    }

    /**
     * This function returns all videos for given videocase
     */
    public function getAllByType($videocaseId, $type){

        $sql = "SELECT * FROM VIDEO WHERE videocase_id = '$videocaseId' and type = '$type";

        $result = $this->getConnection()->query($sql);

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

         // check if this video has tags
         if(sizeof($video->get_tags())>0){
             $tags = $video->get_tags();
            $videoTagDao = new VideoTagDao();
            foreach($tags as $tagName){
                $videoTagDao->create($tagName, $last_id);
            }
        }
        return $last_id;
    }

   
}