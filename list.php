<?php

require('BugManager.php');

$manager = new BugManager();
$manager->load();
?>


<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
       
    </head>
    <body>
    <center> <h1>Liste de bugs</h1>
        
        <table>  
           
      <?php  
            $bugs = [];
            $bugManager=new bugManager($bugs);
            $bugs = $bugManager->load();
            foreach($bugs as $bug){ ?>
             <tr><td><?php
            echo $bug->getId();?></td>
                <td><?php echo $bug->getDescription();?></td>
            </tr><?php
               
                       
            }
           ?>
           
</table>     
    </center>
    </body>
    
    
</html>


