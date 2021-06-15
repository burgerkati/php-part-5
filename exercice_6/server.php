<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP pt. 5 exercice_6</title>
  </head>
  <body>
    <?php
      if (isset($_GET['server']) && isset($_GET['language'])) {
        echo htmlspecialchars('You\'re on the ' . $_GET['server'] . ' server and you like the ' . $_GET['language'] . ' language.');
      } else {
        echo 'What do you mean you don\'t like spam?!';
      }
    ?>
    <a href="index.php?">Return to index</a>
  </body>
</html>
