<?php

error_reporting(0);
require '../core/head.php';
require 'connecttk.php';

if (isset($_POST['Submit'])) {
    $username = $_POST['USERNAME'];
    $password = SHA1($_POST['PASSWORD']);
    $username = strip_tags($username);
    $username = addslashes($username);
    $password = strip_tags($password);
    $password = addslashes($password);

    if ($username == '' || $password == '') {
        echo "<script>alert('DONT LEAVE ANY BLANK')</script>";
    } else {
        $result = mysql_query("SELECT * FROM register WHERE USERNAME ='$username' AND PASSWORD = '$password' AND LEVEL ", $conn);
        if (mysql_num_rows($result) > 0) {
            while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
              //if level = 1 -> goto admin.php
                if ($row['USERNAME'] == $username && $row['PASSWORD'] == $password && $row['LEVEL'] == '1') {
                    echo "<script>
                      alert('Logged in');
                    </script>";
                    $_SESSION['USERNAME'] = $username;
                    header("location: admin.php");

                } else {
                  echo "<script>
                    alert('Wrong password or username');
                  </script>";
                }
            }
        } $result = mysql_query("SELECT * FROM register WHERE USERNAME ='$username' AND PASSWORD = '$password' ", $conn);
        if (mysql_num_rows($result) > 0) {
            while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
              //if level = 0 -> goto index.php
                if ($row['USERNAME'] == $username && $row['PASSWORD'] == $password && $row['LEVEL'] == '0') {
                    echo "<script>
                      alert('Logged in');
                    </script>";
                    $_SESSION['USERNAME'] = $username;
                    header("location: ../index.php");

                }
            }

        } else {
          echo "<script>
            alert('Wrong password or username');
          </script>";
        }
    }
}

?>
