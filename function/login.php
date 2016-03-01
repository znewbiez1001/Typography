<html>
  <?php
  session_start();
  error_reporting(0);
  require '../core/head.php';
  $username = $_POST['USERNAME'];
  $password = $_POST['PASSWORD'];

  if (isset($_POST['Submit'])) {
      if ($username == ('admin') & $password == ('34779180')) {
          $_SESSION['USERNAME'] = 'USERNAME';
          $_SESSION['PASSWORD'] = 'PASSWORD';
         header('location: admin.php');
      }
  }



  ?>

  <head>
    <link rel="stylesheet" href="../css/login.css" media="screen" title="no title" charset="utf-8">
    <!-- <script type="text/javascript">
        var attempt = 3; // Variable to count number of attempts.
        // Below function Executes on click of login button.
        function validate(){
        var username = document.getElementById("uname").value;
        var password = document.getElementById("pass").value;
        if ( username == "admin" && password == "34779180"){
        alert ("Login successfully");
        window.location = "admin.php"; // Redirecting to other page.
        return false;
        }
        else{
        attempt --;// Decrementing by one.
        alert("You have left "+attempt+" attempt;");
        // Disabling fields after 3 attempts.
        if( attempt == 0){
        document.getElementById("uname").disabled = true;
        document.getElementById("pass").disabled = true;
        document.getElementById("Submit").disabled = true;
        return false;
        }
      }
    }
    </script> -->
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
    <!-- <div class = "container">
	<div class="wrapper">
		<form action="" method="post" name="Login_Form" class="form-signin">
		    <h3 class="form-signin-heading">Greeting! Please Sign In</h3>
			  <hr class="colorgraph"><br>

			  <input type="text" class="form-control" name="USERNAME" placeholder="Username" id="uname" />
			  <input type="password" class="form-control" name="PASSWORD" placeholder="Password" id="pass"/>

			  <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit" onclick="validate()">Login</button>
		</form> -->

    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>Welcome back</strong>
      </div>
      <div class="panel-body">
        <form class="form-horizontal" role="form" method="post" name="Login_Form">
          <div class="form-group">
            <label>
              Username
            </label>
            <input type="text" class="form-control" name="USERNAME" placeholder="Username" id="uname"  />
          </div>
          <div class="form-group">
            <label>
              Password
            </label>
            <input type="password" class="form-control" name="PASSWORD" placeholder="Password" id="pass"  />
          </div>
          <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit" onclick="validate()">Login</button>
        </form>
      </div>
    </div>
	</div>
</div>
  </body>
</html>
