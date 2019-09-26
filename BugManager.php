
        <?php
include 'Bugs.php';
class BugManager{
    
    private $bugs;

    function getBugs() 
    {
        return $this->bugs;
    }

    function setBugs($bugs) 
    {
        $this->bugs = $bugs;
    }
    //charger en memoire notre source de donnée
    function  load()
    {
        //récupéré le csv, parser(copier) le csv et pour chaque ligne
        //crée un nouveau bug et inserer le bug dans $this->bugs
            $fichier = 'datas.csv';

            $csv = new SplFileObject($fichier);
            $csv->setFlags(SplFileObject::READ_CSV);
            $csv->setCsvControl(',');

            foreach($csv as $ligne){
                    print_r($ligne);
}
 
        
    }
    /** 
     
     * @param Bug $bugs
     * ajouter un bug à la liste
     */
    function add(Bug $bug)
    {
        $this->bugs[$bug->getId()] = $bug;
    }
    /**
     * supprimer un bug de la liste
     * @param Bug $bugs 
     */
    function remove(Bug $bug) 
    {
        
        if(in_array( $bug, $this->bugs)){
            unset($this->bugs[$bug->getId()]);
        }
                
    }
    
}


        ?>

