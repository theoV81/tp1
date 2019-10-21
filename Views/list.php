<?php

require('../Models/BugManager.php');

$manager = new BugManager();
$manager->findAll();
?>


<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
       <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
    </head>
    <body >
           
        
       <div class="table-title">
           <center><h1>Liste de bugs</h1></center>
</div>
       
    <center> <a href="add.php"><button class="buttonAdd"> Add</button></a></center>
    <br></br>
        
<table class="table-fill">
<thead>
<tr>
<th class="text-left">Id</th>
<th class="text-left">Titre</th>
<th class="text-left">Description</th>
<th class="text-left">Date de creation</th>
<th class="text-left">closed</th>

</tr>
</thead>
<tbody class="table-hover">
<tr>
        
      <?php  
            $bugs = [];
            $bugManager=new bugManager($bugs);
            $bugs = $bugManager->findAll();
            foreach($bugs as $bug){ ?>
             <tr><td><?php
            echo $bug->getId();?></td>
                <td><?php echo $bug->getTitre();?>
            
                </td>
                <td><a href="show.php?id=<?=$bug->getId()?>">voir plus</a></td>
                <td> <?php echo $bug->getCreatedAt();?></td>
                 <td> <?php echo $bug->getClosed();?></td>
            </tr>
                
                <?php
               
                       
            }
           ?>
</tr>
   
           
</table>     
    </center>
    </body>
    
    
</html>


