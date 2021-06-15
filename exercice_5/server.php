<?php
function triggerError() {
  $server = $_GET['server'];
    if (isset($_GET['language']) && isset($_GET['server'])) {
      return 'language: ' . $_GET['language'] . ' server: ' . $server;
    } else 'You don\'t like spam?';
}
  echo triggerError();
?>
