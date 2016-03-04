<?php session_start();
error_reporting(0);
 ?>
<!DOCTYPE html>
<html>
  <?php require_once "head.php"; ?>
  <body>


    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">

        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Typogit</a>
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="function/register.php">New account</a></li>
                <li><a href="function/login.php">Sign in</a></li>
              </ul>

            </li>
          </ul>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <!-- Display username with session -->
              <?php echo"<a class='navbar-brand' disable='' href='function/logout.php'>Logout <span class='spanclass'>" .$_SESSION['USERNAME']. "</span></a>" ?>
          </ul>
        </div>
      </div>
    </nav>

  </body>
</html>
