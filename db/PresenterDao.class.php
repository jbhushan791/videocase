<?php

include_once 'database.class.php';
include_once 'model/Presenter.php';

/**
 * This class deals with all database operation related to Presenter
 */
class PresenterDao extends Database{

    public function create($name, $email, $biography, $school){

        $sql = "INSERT INTO Presenter (NAME, EMAIL, BIOGRAPHY, SCHOOL)
                VALUES ('$name', '$email', '$biography', '$school')";

        $result = $this->getConnection()->query($sql);
        return $result;
    }

    public function create1($presenter){

        $name = $presenter->get_name();
        $email = $presenter->get_email();
        $biography = $presenter->get_biography();
        $school = $presenter->get_school();

        $sql = "INSERT INTO Presenter (NAME, EMAIL, BIOGRAPHY, SCHOOL)
                VALUES ('$name', '$email', '$biography', '$school')";

        $result = $this->getConnection()->query($sql);
        $last_id = $this->getConnection()->insert_id;
        return $last_id;
    }

   
}