<?php
session_start();
if(!$_SESSION['PASSWORD'] = 'PASSWORD'){
  header("location: ../index.php");
}
?>

<!DOCTYPE html>
<html>
  <?php require "../core/head.php"; ?>
  <body>
    <?php include "../core/admin_navbar.php"; ?>
  </body>
</html>
