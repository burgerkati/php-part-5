<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP pt. 5 exercice_1</title>
</head>
<body>
  <!-- there is a limit of 256 characters in href to display in url -->
  <a href="index.php?surname=Doe&amp;name=Jane">display</a>
  <?php
  echo ' Nom : '. $_GET['surname'] . ' ' . 'Prénom : '. $_GET['name'];
  ?>
</body>
</html>
