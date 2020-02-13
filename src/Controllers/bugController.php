<?php
namespace BugApp\Controllers;
use BugApp\Models\bugManager;
//require_once ('Models/bugManager.php');
class bugController {

  function list() {
    $headers = apache_request_headers();

    $bugManager = new BugManager();

    if( isset($headers['XMLHttpRequest'])){

      if( isset($_GET["closed"])){

        $bugs = $bugManager->findByClosed();

      }else{

        $bugs = $bugManager->findAll();
      }

      $response = [
        'success' => true,
        'bugs' => $bug ->getID()];
        $json = json_encode($response);
        echo $json;


    } else{
      $bugs = $bugManager->findAll();
      $content = $this->render('src/Views/list', ['bugs' =>$bugs]);
      return $this->sendHttpResponse($content, 200);
    }
  }

  function add()
  {
    if (isset($_POST['submit']))
    {
      $bugManager = new BugManager();
      $bug = new bug();
      $bug->setTitre($_POST['titre']);
      $bug->setDescription($_POST['Description']);
      $bugManager->add($bug);
      header ('Location: /tp1/list');


    } else {

      $content = $this->render('src/Views/add',[]);
      return $this->sendHttpResponse($content, 200);
    }

  }


  function show($id) {
    $manager = new BugManager();
    $bug = $manager->find($id);
    $content = $this->render('src/Views/show', ['bug' =>$bug]);
    $this->sendHttpResponse($content);

  }


  function update($id) {
    $manager = new BugManager();
    $bug = $manager->find($id);

    if(isset ($_POST['closed'])){
      $bug->setClosed($_POST['closed']);

    }
    var_dump($bug);
    $manager->update($bug);

    http_response_code(200);

    header('Content-type: application/json');

    $response = [
      'success' => true,
      'id' => $bug ->getID()];
      $json = json_encode($response);
      echo $json;

    }

    public function render($templatePath, $parameters){
      $templatePath = $templatePath. '.php';
      ob_start();
      $parameters;
      require($templatePath);
      return ob_get_clean();
    }

    public function  sendHttpResponse($content, $code = 200)  {
      http_response_code($code);
      header('Content-Type: text/html');
      echo $content;

    }
  }
