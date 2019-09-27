<?php
include ('BugManager.php');
require_once ('connexion.php');
$dbh = connexionBDD();

$Id = $_GET['id'];
$bugManager = new BugManager();
$bug = $bugManager->find($Id,$dbh);

?>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
       <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
    </head>
    <body >
        <table class="table-fill">
<thead>
<tr>
<th class="text-left">Description</th>
    
</tr>    
</thead> 
<tbody class="table-hover">
<tr>
    <td>       
      <?php  
                      echo $bug->getDescription();
 
       
            
                
                
               
                   
           ?>
    </td>
</tr>
   
           
</table>     