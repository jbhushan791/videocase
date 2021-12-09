<?php

  include_once 'db/TagDao.class.php';
  include_once 'model/Tag.php';

  $tagDao = new TagDao();

  $tags = $tagDao->searchTagsByName($_GET['query']);

  $json = array();
  foreach($tags as $tag){
    $json[] = $tag->get_name();
  }
  echo json_encode($json);

?>