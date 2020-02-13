<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <meta name="viewport" content="initial-scale=1.0;maximum-scale=1.0;width=device-width">
  <title> TpBug</title>
</head>

<body >

  <div class="table-title">
    <center><h1>Liste de bugs</h1></center>
  </div>

  <center> <a href="add"><button class="buttonAdd"> Add</button></a></center>
  <br></br>
  <center>filtre bug non résolue<input type="checkbox" class="trigger"> </input>  </center>
  <table class="table-fill">
    <thead>
      <tr>
        <th class="text-left">Id</th>
        <th class="text-left">Titre</th>
        <th class="text-left">Description</th>
        <th class="text-left">Date de creation</th>
        <th class="text-left">status</th>
        <th class="text-left">Résolue</th>


      </tr>
    </thead>
    <tbody class="table-hover">
      <tr>

        <?php
        $bugs = $parameters["bugs"];
        foreach($bugs as $bug){ ?>
          <tr class="bug" id="id_<?= $bug->getId()?>"><td><?php
          echo $bug->getId();?></td>
          <td><?php echo $bug->getTitre();?>

          </td>
          <td><a href="show/<?=$bug->getId()?>">voir plus</a></td>
          <td> <?php echo $bug->getCreatedAt();?></td>
          <td id="td_<?=$bug->getId() ?>"><center> <?php if(($bug->getClosed())==0) {
           echo '<img src="nvalider.png" border="0" class="imgstatus" height="30px" width="30px"   /></div>';
         }
            else{
              echo '<img src="valider.png" border="0" class="imgstatus" height="30px" width="30px" /></div>';
            }



            ?></center></td>
            <td>
              <center>   Oui<input type="checkbox" class="trigger"> </center>
            </td>
          </tr>

          <?php

        }
        ?>
      </tr>


    </table>
  </center>
  <script type="text/javascript" src="src/Ressources/app.js"></script>
</body>


</html>
