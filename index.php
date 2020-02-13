<?php
ini_set('display_errors', 1);
require "vendor/autoload.php";
use BugApp\Controllers\bugController;
//require('./Controllers/bugController.php');

$url = explode("/",$_SERVER['REQUEST_URI']);
//var_dump($url);
switch($url[3]){

  case "":


  case "list":
  return (new bugController())->list();
  break;


  case "show":
  $id = $url[4];
  return (new bugController())->show($id);
  break;


  case "add" :

  return (new bugController())->add();
  break;

  case "update" :
  $id = $url[4];
  return (new bugController())->update($id);
  break;


  default :

  http_response_code(404);
  echo 'Page non trouvé';

}

?>
