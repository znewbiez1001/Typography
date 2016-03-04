<?php
session_start();

  if (isset($_SESSION['USERNAME'])) {
    echo "welcome, ".$_SESSION['USERNAME']. "!";
  } else {
    die('You must be logged in');
  }


?>
<html>
<?php include '../core/head.php'; ?>

<style media="screen">
	#bloc-0{
		padding-top: 100px;
	}
	body{
		background: url(../img/register.jpg);
		background-size: cover;
	}
	.panel-default {
	margin: auto;
 	margin-top:30px;
 	width: 450px;
 	padding-left: 20px;
 	padding-right: 20px;
}
.form-group.last {
 margin-bottom:0px;
}
</style>
<body>
	<?php require '../core/navbar.php'; ?>
	<?php


        if (isset($_POST['ADD'])) {
            include 'connecttk.php';

            $username = mysql_escape_string($_POST['USERNAME']);
            $password = SHA1($_POST['PASSWORD']);
            $vpassword = SHA1($_POST['VPASSWORD']);
            $level = $_POST['LEVEL'];

            if (empty($_POST['USERNAME']) || empty($_POST['PASSWORD']) || empty($_POST['VPASSWORD']) || empty($_POST['LEVEL'])) {
                ?>
								<script type="text/javascript">
								alert("DON'T LEAVE ANY BLANK IN THE FORM");

								</script>
								<?php

            }

            $result = mysql_query("SELECT * FROM moderator WHERE USERNAME ='$username'", $conn);
            if (mysql_num_rows($result) > 0) {
                while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                    if ($row['USERNAME'] == $username) {
                        ?>
											<script type="text/javascript">
												alert("USERNAME EXISTS");
											</script>
										<?php

                    }
                }
            } elseif ($password != $vpassword) {
                ?>
								<script type="text/javascript">
									alert("PASSWORD DID NOT MATCH!! RE-ENTER");
								</script>
								<?php

            } else {
                $str = "insert into moderator values ('','$username','$password','$level')";
                mysql_query($str, $conn);
                ?>
								"<SCRIPT LANGUAGE='JavaScript'>
						    window.alert('Succesfully Registed')
						    window.location.href='login.php';
						    </SCRIPT>"
								<?php


            }
        }

    ?>


<div class="page-container">
<div class="bloc l-bloc bgc-white" id="bloc-0">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-4">
				<span class="empty-column"></span>
			</div>
			<div class="col-sm-4">
				<!-- FORM INPUT -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong>Register form</strong>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" onsubmit="return checkform()" name="reg">



							<div class="form-group">
								<label>
									Username
								</label>
								<input name="USERNAME"  class="form-control"  />
							</div>



							<div class="form-group">
								<label>
									Password
								</label>
								<input name="PASSWORD"  class="form-control" type="password"  />
							</div>

							<div class="form-group">
								<label>
									Verify Password
								</label>
								<input name="VPASSWORD"  class="form-control" type="password"  />
							</div>

              <div class="form-group">
								<label class="checkbox-inline"><input type="checkbox" value="1" name="LEVEL">Admin</label>
                <label class="checkbox-inline"><input type="checkbox" value="0" name="LEVEL">User</label>
							</div>






							<div class="text-center">
								<button class="btn btn-success" type="submit" name="ADD">
									Submit
								</button>
							</div>
						</form>
					</div>
				</div>
				<!--  -->
			</div>
			<div class="col-sm-4">
				<span class="empty-column"></span>
			</div>
		</div>
	</div>
</div>
</div>

</body>

</html>
