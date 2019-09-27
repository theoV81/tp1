
<?php

include('Bugs.php');
include('connexion.php');

class BugManager {

    private $bugs = [];

    function getBugs() {
        return $this->bugs;
    }

    function setBugs($bugs) {
        $this->bugs = $bugs;
    }

    //charger en memoire notre source de donnée
    function loadCsv() {
        //récupéré le csv, parser(copier) le csv et pour chaque ligne
        //crée un nouveau bug et inserer le bug dans $this->bugs
        $fichier = 'datas.csv';

        $csv = new SplFileObject($fichier);
        $csv->setFlags(SplFileObject::READ_CSV);
        $csv->setCsvControl(';');

        foreach ($csv as $ligne) {

            if ($ligne[0] != null) {
                $bug = new bug($ligne[0], $ligne[1]);
                array_push($this->bugs, $bug);
            }
        }
    }

    function load() {
        $dbh = connexionBDD();

        $bugs = $dbh->query('SELECT * FROM `bug` ORDER BY `id`', PDO::FETCH_ASSOC);

        while ($donnee = $bugs->fetch()) {
            $donnee['Id'];
            $bug = new Bug($donnee['Id'], $donnee['titre'], $donnee['Description'], $donnee['status']);
            array_push($this->bugs, $bug);
        }
        return $this->bugs;
    }

    function find($id, $dbh) {

        $bugs = $dbh->query("SELECT * FROM bug WHERE Id =" . $id, PDO::FETCH_ASSOC);

        while ($donnees = $bugs->fetch()) {
            $bug = new bug($donnees["Id"], $donnees["titre"], $donnees["Description"], $donnees["status"]);
        }
        return $bug;
    }

    function save($post) {
        
        // var_dump($post); die();

        $bdd = connexionBDD();
        //var_dump($_POST);
        $req = $bdd->prepare('INSERT INTO bug (titre,Description) VALUE (:titre,:Description)');
        $req->execute(array(
            'titre' => $post['titre'],
            'Description' => $post['description']));
        $req->closeCursor();
    }

    /**

     * @param Bug $bugs
     * ajouter un bug à la liste
     */
    function add(Bug $bug) {
        $this->bugs[$bug->getId()] = $bug;
    }

    /**
     * supprimer un bug de la liste
     * @param Bug $bugs 
     */
    function remove(Bug $bug) {

        if (in_array($bug, $this->bugs)) {
            unset($this->bugs[$bug->getId()]);
        }
    }

}
?>

