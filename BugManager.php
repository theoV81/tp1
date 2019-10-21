
<?php

include('Bugs.php');
require('Manager.php');

class BugManager extends Manager {

    private $bugs = [];

    //charger en memoire notre source de donnée
   

    function findAll() {
                $dbh = $this->connectDB();


        $bugs = $dbh->query('SELECT * FROM `bug` ORDER BY `id`', PDO::FETCH_ASSOC);

        while ($donnee = $bugs->fetch()) {
            $donnee['Id'];
            $bug = new Bug($donnee['Id'], $donnee['titre'], $donnee['Description'], $donnee['status'],$donnee['createdAt'],$donnee['closed']);
            array_push($this->bugs, $bug);
        }
        return $this->bugs;
    }

    function find($id) {
        
        $dbh = $this->connectDB();

        $bugs = $dbh->query("SELECT * FROM bug WHERE Id =" . $id, PDO::FETCH_ASSOC);

        while ($donnees = $bugs->fetch()) {
            $bug = new bug($donnees["Id"], $donnees["titre"], $donnees["Description"], $donnees["status"],$donnees["createdAt"],$donnees["closed"]);
        }
        return $bug;
    }

    function add($post) {
        
       $dbh = $this->connectDB();

        // var_dump($post); die();

        //var_dump($_POST);
        $req = $dbh->prepare('INSERT INTO bug (titre,Description,createdAt,closed) VALUE (:titre,:Description,:createdAt,:closed)');
        $req->execute(array(
            'titre' => $post['titre'],
            'Description' => $post['description'],
        'createdAt' => $post['createdAt'],
        'closed' => $post['closed']));
        $req->closeCursor();
    }


}
?>

