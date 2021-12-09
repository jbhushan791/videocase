<?php

include_once 'database.class.php';
include_once 'model/Tag.php';
include_once 'model/VideoTag.php';
include_once 'db/TagDao.class.php';

/**
 * This class deals with all database operation related to Tag
 */
class VideoTagDao extends Database {

    // public function create($tagId, $videoId){

    //     $sql = "INSERT INTO VideoTag(video_id, tag_is)
    //     VALUES('$videoId', '$tagId')";

    //     $result = $this->getConnection()->query($sql);
    //     $last_id = $this->getConnection()->insert_id;
    //     return $last_id;
    // }

    public function create($tagName, $videoId){

        $tagDao = new TagDao();
        $tag = $tagDao->getTagByName($tagName);
        $tagId = $tag->get_tagId();

        $sql = "INSERT INTO VideoTag(video_id, tag_id)
        VALUES('$videoId', '$tagId')";

        $result = $this->getConnection()->query($sql);
        $last_id = $this->getConnection()->insert_id;
        return $last_id;
    }

}

?>