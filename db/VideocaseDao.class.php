<?php

include_once 'database.class.php';
include_once 'PresenterDao.class.php';
include_once 'VideoDao.class.php';
include_once 'model/Videocase.php';
include_once 'model/Presenter.php';
include_once 'model/Video.php';

/**
 * This class deals with all database operation related to Videocase
 */
class VideocaseDao extends Database {

    /**
     * This function is responsible for retrieving all 
     */
    public function getAll(){

        $sql = "SELECT * FROM VIDEOCASE";

        $result = $this->getConnection()->query($sql);

        $videocases = [];
        while($row = $result->fetch_assoc()){
            $videocase = new Videocase($row["Title"], $row["Description"]);
            array_push($videocases,$videocase);
        }
        return $videocases;
    }

    public function getAllByTitle($searchStr){
        $videocases = [];
        if($searchStr != ""){
            $sql = "SELECT * FROM VIDEOCASE WHERE TITLE LIKE '%$searchStr%'";
        } else {
            $sql = "SELECT * FROM VIDEOCASE";
        }
        $result = $this->getConnection()->query($sql);  
        while($row = $result->fetch_assoc()){
            $videocases[] = $row;
            // $videocase = new Videocase($row["Title"], $row["Description"]);
            // array_push($videocases,$videocase);
        }
        return $videocases;
    }


    public function create($videocase, $presenter, $videos){

        $presenterDao = new PresenterDao();
        $presenterId = $presenterDao->create1($presenter);
        
        $current_date = date("Y-m-d");
        $title = $videocase->get_title();
        $description = $videocase->get_description();


        $sql = "INSERT INTO Videocase (Title, Description, Created_Date, Modified_Date, Presenter_id)
        VALUES ('$title', '$description', '$current_date' ,'$current_date', '$presenterId')";

        $result = $this->getConnection()->query($sql);
        $videocaseId = $this->getConnection()->insert_id;

        $videoDao = new VideoDao();
        foreach($videos as $v) {
            $v->set_videocaseId($videocaseId);
            $videoDao->create($v);
        }

        return $videocaseId;
    }

   
}