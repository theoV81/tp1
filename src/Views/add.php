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
            Titre<input type="text" name="titre" value="" placeholder="Titre du bug" style="margin : 10px"/>
            Description<input type="text" name="Description" value="" placeholder="Description du bug" style="margin : 13px"/>
            Date<input type="text" name="createdAt" value="" placeholder="YYYY-MM-JJ" style="margin : 10px"/>
            URL<textarea type="text" name="URL" value="" placeholder="ex: https://www.google.com/.../..." style="margin : 10px"></textarea>
            <p></p>
            <input type="radio" name="closed" value="1"/> Bug fermer
            <input type="radio" name="closed" value="0" />Bug ouvert
            <input type="submit" value="Enregistrer"/>




          </form>

        </td>

      </tr>

    </table>

    </html>
