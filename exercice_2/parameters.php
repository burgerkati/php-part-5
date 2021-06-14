<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP pt. 5 exercice_2</title>
  </head>
  <body>
    <a href="index.php?">Return to</a>
    <?php
      echo 'Bonjour ' . $_GET['name'] . ' ' . $_GET['surname'] . '. Vous avez ' . $_GET['age'] . ' ' . 'ans.';
    ?>
  </body>
</html>
