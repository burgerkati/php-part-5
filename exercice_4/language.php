<?php
  if (isset($_GET['language'])) {
    echo 'You\'re on the ' . $_GET['language'] . ' server';
  } else {
    echo 'You don\'t like spam?';
  }
?>
