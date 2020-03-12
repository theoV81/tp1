<?php
namespace BugApp\Models;
use BugApp\Models\bug;
use BugApp\Models\Manager;

//require('./Manager.php');

class BugManager extends Manager {

  private $bugs = [];

  //charger en memoire notre source de donnée


  function findAll() {
    $dbh = $this->connectDB();


    $bugs = $dbh->query('SELECT * FROM `bug` ORDER BY `id`', \PDO::FETCH_ASSOC);

    while ($donnees = $bugs->fetch()) {
      $donnees['Id'];
      $bug = new Bug($donnees['Id'], $donnees['titre'], $donnees['Description'], $donnees['status'],$donnees['createdAt'],$donnees['closed'], $donnees["URL"],$donnees["IP"]);
      array_push($this->bugs, $bug);
    }
    return $this->bugs;
  }

  function find($id) {

    $dbh = $this->connectDB();
    $bugs = $dbh->query("SELECT * FROM bug WHERE Id =" . $id, \PDO::FETCH_ASSOC);

    while ($donnees = $bugs->fetch()) {
      $bug = new bug($donnees["Id"], $donnees["titre"], $donnees["Description"], $donnees["status"],$donnees["createdAt"],$donnees["closed"], $donnees["URL"],$donnees["IP"]);
    }
    return $bug;
  }

  function findByClosed ($id) {
    $dbh = $this->connectDB();

    $bugs = $dbh->query("SELECT * FROM bug WHERE closed=1 ", \PDO::FETCH_ASSOC);

    while ($donnees = $bugs->fetch()) {
      $bug = new bug($donnees["Id"], $donnees["titre"], $donnees["Description"], $donnees["status"],$donnees["createdAt"],$donnees["closed"], $donnees["URL"],$donnees["IP"]);
    }
    return $bug;


  }


  function add($bug) {

    $dbh = $this->connectDB();

    var_dump($bug);

    //var_dump($_POST);
    $req = $dbh->prepare('INSERT INTO bug (titre,Description,createdAt,closed,URL,IP) VALUE (:titre,:Description,:createdAt,:closed,:URL,:IP)');
    $req->execute(array(
      'titre' => $bug->getTitre(),
      'Description' => $bug->getDescription(),
      'createdAt' => $bug->getCreatedAt(),
      'closed' => $bug->getClosed(),
      'URL' => $bug->getURL(),
      'IP' => $bug->getIP()
    ));
      

      $req->closeCursor();
    }

    function update ($bug) {

      $dbh = $this->connectDB();
      echo "test";

      $sqlupdate = "update bug set titre =:titre, Description =:Description, closed =:closed, URL =:URL  where id=:id";
      $req = $dbh->prepare($sqlupdate);
      $req->execute([
        'titre' => $bug->getTitre(),
        'Description' => $bug->getDescription(),
        'closed' => $bug->getClosed(),
        'id' => $bug->getId(),
        'URL' => $bug->getURL(),
      ]);
      echo($bug->getClosed());
      $req->closeCursor();
    }


    function delete () {
      $sqldelete = "delete from bug where id=:id";
      $req = $dbh ->prepare ($sqldelete);
      $req->execute(['id' => $id]);
      $req->closeCursor();
    }

  }
