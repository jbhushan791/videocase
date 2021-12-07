<?php

include_once 'database.class.php';
include_once 'model/User.php';

/**
 * This class deals with all database operation related to Note
 */
class NoteDao extends Database{


    public function create($userId, $text, $videoId){

        $sql = "INSERT INTO Note (user_id, video_id, text)
                VALUES ('$userId', '$videoId','$text')";

        $result = $this->connect()->query($sql);
        return $result;
    }

    public function getAll($userId, $videoId){

        $sql = "SELECT * FROM NOTE WHERE user_id = '$userId' and  video_id = '$videoId'";

        $result = $this->connect()->query($sql);

        $notes = [];
        while($row = $result->fetch_assoc()){
            $note = new Note($row["note_id"], $row["video_id"], $row["text"], $row["user_id"]);
            array_push($notes,$note);
        }
        return $notes;
    }

    public function update($noteId, $text){

        $sql = "UPDATE NOTE SET text = '$text' WHERE note_id = '$noteId'";

        $result = $this->connect()->query($sql);

        return $result;
    }



}
?>