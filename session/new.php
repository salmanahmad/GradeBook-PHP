<?php
  
  require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . '../app/app.php';
  $_SESSION['user'] = array(
    "id" => 1,
    "name" => "teacher@t.com",
    "type" => "teacher"
  );
  
?>