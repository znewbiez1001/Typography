
<?php
session_start();

  if (isset($_SESSION['USERNAME']) == 'admin') {
    echo "welcome, ".$_SESSION['USERNAME']. "!";
  } else {
    die('You must be logged in');
  }


?>

<!DOCTYPE html>
<html>
  <?php require "../core/head.php"; ?>
  <?php include "../core/admin_navbar.php"; ?>
  <body>

  </body>
</html>
