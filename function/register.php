<!doctype html>
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

            $name = mysql_escape_string($_POST['NAME']);
            $username = mysql_escape_string($_POST['USERNAME']);
            $email = $_POST['EMAIL'];
            $vemail = $_POST['VEMAIL'];
            $pass = SHA1($_POST['PASSWORD']); //SHA1: PASSWORD ENCRYPTION
            $vpass = SHA1($_POST['VPASSWORD']);
            $add = $_POST['ADDRESS'];
            $dob = $_POST['DOB'];

            if (empty($_POST['NAME']) || empty($_POST['USERNAME']) || empty($_POST['EMAIL']) || empty($_POST['PASSWORD']) || empty($_POST['VPASSWORD']) || empty($_POST['ADDRESS']) || empty($_POST['DOB'])) {
                ?>
								<script type="text/javascript">
								alert("DON'T LEAVE ANY BLANK IN THE FORM");

								</script>
								<?php

            }

            $result = mysql_query("SELECT * FROM register WHERE USERNAME ='$username'", $conn);
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
            } elseif ($email != $vemail) {
                ?>
								<script type="text/javascript">
									alert("EMAIL DID NOT MATCH");
								</script>
								<?php

            } elseif ($pass != $vpass) {
                ?>
								<script type="text/javascript">
									alert("PASSWORD DID NOT MATCH!! RE-ENTER");
								</script>
								<?php

            } else {
                $str = "insert into register values ('','$name','$username','$email','$pass','$add','$dob')";
                mysql_query($str, $conn);
                ?>
								<script type="text/javascript">
								alert("Insert successful to database");
								</script>
								<?php

            }

                        /*$query = mysql_query("SELECT * FROM register WHERE USERNAME ='$username'");
                        if(mysql_num_rows($query) > 0){
                            ?>
                            <script type="text/javascript">
                            alert("USERNAME EXISTS! TRY ANOTHER ONE");

                            </script>
                            <?php
                        }

                        if ($pass != $vpass) {
                                ?>
                                <script type="text/javascript">
                                alert("PASSWORD DID NOT MATCH");

                                </script>
                                <?php
                        }

                        if ($email != $vemail) {
                                ?>
                                <script type="text/javascript">
                                alert("EMAIL DID NOT MATCH");

                                </script>
                                <?php
                        } else {
                            $str = "insert into register values ('','$name','$username','$email','$pass','$add','$dob')";
                            mysql_query($str, $conn);
                            ?>
                            <script type="text/javascript">
                            alert("SUCCESS");
                            </script>
                            <?php
                        }





            /*$check_username = mysql_query("SELECT * FROM 'register' WHERE 'USERNAME' = '$username'");
            if (mysql_num_rows($check_username) > 0) {
                ?>
                            <script type="text/javascript">
                            alert("USERNAME EXISTS");

                            </script>
                            <?php

            } else {
                $str = "insert into register values ('','$name','$username','$email','$pass','$add','$dob')";
                mysql_query($str, $conn);
                ?>
                                <script type="text/javascript">
                                alert("SUCCESS");
                                </script>
                                <?php

            }*/

            /*if ($pass != $vpass) {
                ?>
                                <script type="text/javascript">
                                alert("PASSWORD DID NOT MATCH");

                                </script>
                                <?php

            } elseif ($email != $vemail) {
                ?>
                            <script type="text/javascript">
                            alert("EMAIL DID NOT MATCH");

                            </script>
                            <?php

            } else {


            }*/
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
									Name
								</label>
								<input name="NAME"  class="form-control"  />
							</div>

							<div class="form-group">
								<label>
									Username
								</label>
								<input name="USERNAME"  class="form-control"  />
							</div>

							<div class="form-group">
								<label>
									Email
								</label>
								<input name="EMAIL"  class="form-control" type="email"  />
							</div>

							<div class="form-group">
								<label>
									Verify Email
								</label>
								<input name="VEMAIL"  class="form-control" type="email"  />
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
								<label>
									Address
								</label>
								<input name="ADDRESS"  class="form-control" type="text"  />
							</div>

							<div class="form-group">
								<label>
									Date of birth
								</label>
								<input name="DOB"  class="form-control" type="date"  />
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
