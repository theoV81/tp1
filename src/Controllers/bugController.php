<?php
namespace BugApp\Controllers;
use BugApp\Models\bugManager;
use GuzzleHttp\Client;
use BugApp\Models\bug;
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
    //var_dump($_POST);
    if (isset($_POST['titre']))
    {
      if (!empty($_POST)) {

        foreach ($_POST as $key => $value) {
          $data[$key] = htmlspecialchars($value, ENT_QUOTES);
          //echo $data;
        }
      }
      $bugManager = new BugManager();
      $bug = new bug("","","","","","","","");
      $bug->setTitre($_POST['titre']);
      $bug->setDescription($_POST['Description']);
     if(empty($_POST['createdAt'])){
       $date = new \DateTime();
       $datetim = $date->Format("yy-m-d");
         $bug->setCreatedAt($datetim);
      }else {
        $bug->setCreatedAt($_POST['createdAt']);
      }
      $bug->setClosed($_POST['closed']);
      $responseApi = $this->Recup_IP_URL($_POST['URL']);
      $IP = $responseApi->query;
      $bug->setURL($_POST['URL']);
      $bug->setIP($IP);
      $bugManager->add($bug);
      //header ('Location: /works/tp1/list');


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

    function Recup_IP_URL($URL) {
      echo 'Recup NDD :     ';
      $parse = parse_url($URL);
      $nomDeDomaine = $parse['host'];
      echo $nomDeDomaine;
      $client = new Client();
      $response = $client->request('GET', "http://ip-api.com/json/$nomDeDomaine");
      $body = $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}
      $remainingBytes = $body->getContents();
      $responseAPI = json_decode($remainingBytes); 
      return $responseAPI; 
      
    }
  }
