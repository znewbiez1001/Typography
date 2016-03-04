<?php
session_start();
?>
<html>
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

  <head>
    <link rel="stylesheet" href="../css/login.css" media="screen" title="no title" charset="utf-8">

    <style media="screen">
        body{
          background: url(../img/register.jpg);
          background-size: cover;
        }
        .panel-default {

        margin: auto;
        margin-top: 200px;
        width: 450px;
        padding-left: 20px;
        padding-right: 20px;
        }
    </style>
  </head>

  <body>
    <?php include '../core/navbar.php'; ?>


    <div class="animatedParent" data-sequence='500'>
      <div class="panel panel-default animated fadeInDownShort">
        <div class="panel-heading">
          <strong>Welcome back</strong>
        </div>
        <div class="panel-body">
          <form class="form-horizontal" role="form" method="post" name="Login_Form" action="login.php">
            <div class="form-group">
              <label>
                Username
              </label>
              <input type="text" class="form-control" name="USERNAME" placeholder="Username"  />
            </div>
            <div class="form-group">
              <label>
                Password
              </label>
              <input type="password" class="form-control" name="PASSWORD" placeholder="Password"  />
            </div>
            <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit" onclick="validate()">Login</button>
          </form>
        </div>
      </div>
    </div>
	</div>
</div>
  </body>
</html>
