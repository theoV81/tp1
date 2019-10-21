<?php


        
        
if (!empty($_POST)) {
    
    foreach ($_POST as $data) {
        $data = htmlspecialchars($data, ENT_QUOTES);
        echo $data;
    }

    // Save BDD
    require('BugManager.php');
    $manager = new BugManager();
    $manager->add($_POST);

    // Redirection vers list.php
     header("Location:list.php");
    //echo '<meta http-equiv="refresh" content="0; URL=list.php" />';
}
?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
    </head>
    <body>
            <center><a href="javascript:history.go(-1)">Retour</a>          </center>

        <table class="table-fill">
            <thead>
                <tr>
                    <th class="text-left">Ajouter un bug</th>

                </tr>    
            </thead> 
            <tbody class="table-hover">
                <tr>
                    <td>       

                        <form action="" method="post">
                            <input type="text" name="titre" value="" placeholder="Titre du bug"/>
                            <input type="text" name="description" value="" placeholder="Description du bug"/>
                              <input type="text" name="createdAt" value="date" placeholder="JJ-MM-YYYY"/>
                              <p></p>
                              <input type="radio" name="closed" value="1"/> Bug fermer
                              <input type="radio" name="closed" value="0" />Bug ouvert 
                            <input type="submit" value="Enregistrer"/>




                        </form>

                    </td>
                   
                </tr>
              
        </table>     

</html>

