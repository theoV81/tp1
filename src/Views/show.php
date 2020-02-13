<?php
$bug=$parameters["bug"];
?>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="../style.css" />
  <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
</head>
<body >
  <center><a href="javascript:history.go(-1)">Retour</a>          </center>
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
      <tr>
      </tr>
    </table>
