<?php
use BugApp\Models\bugManager;
if (!empty($_POST)) {

  foreach ($_POST as $key => $value) {
    $data[$key] = htmlspecialchars($value, ENT_QUOTES);
    //echo $data;
  }

  // Save BDD
  $manager = new BugManager();
  $manager->add($data);

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
  <center><a href="../tp1">Retour</a>          </center>

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
            <input type="text" name="createdAt" value="" placeholder="YYYY-MM-JJ"/>
            <p></p>
            <input type="radio" name="closed" value="1"/> Bug fermer
            <input type="radio" name="closed" value="0" />Bug ouvert
            <input type="submit" value="Enregistrer"/>




          </form>

        </td>

      </tr>

    </table>

    </html>
