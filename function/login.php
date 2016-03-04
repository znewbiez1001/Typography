<?php
session_start();
?>
<?php include 'check_login.php'; ?>
<html>

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
