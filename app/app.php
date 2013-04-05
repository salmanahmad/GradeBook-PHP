<?php

session_start();

function template($layout, $vars) {
  ob_start();
  if(count($vars) > 0) { extract($vars); }
  // Note, if you do not want to include the php extension add this snippet ".'.php';"
  include 'views/'.strtolower($layout);
  return ob_get_clean();
}

function current_user() {
  
}

function flash($name) {
  
}

function render($vars = null) {
  echo template('layout.php', array( 'content' => template($_SERVER['PHP_SELF'], $vars)));
}

?>

