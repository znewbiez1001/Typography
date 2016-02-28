<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <?php
        if (isset($_POST['ADD'])) {
            include 'connecttk.php';

            $name = $_POST['SUB_NAME'];
            $email = $_POST['SUB_EMAIL'];
            $message = $_POST['SUB_MESS'];

            if (empty($name) || empty($email) || empty($message)) {
              ?>
            <script type="text/javascript">
              alert("FAILED");
            </script>
          <?php
            }

            $result = mysql_query("SELECT * FROM subscribers WHERE SUB_EMAIL ='$email'", $conn);
            if (mysql_num_rows($result) > 0) {
                while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                    if ($row['SUB_EMAIL'] == $email) {
                        ?>
											<script type="text/javascript">
												alert("EMAIL EXISTS");
											</script>
										<?php

                    }
                }
            } else {
              $str = "insert into subscribers values ('','$name','$email','$message')";
              mysql_query($str, $conn);
              ?>
              <script type="text/javascript">
                alert("Thank you");
              </script>
              <?php
            }



        }
    ?>
  <body>
    <div class="page-container">

<!-- bloc-0 -->
<div class="bloc l-bloc bgc-white" id="bloc-0">
    	<div class="container bloc-lg">
    		<div class="row">
    			<div class="col-sm-4">
    				<span class="empty-column"></span>
    			</div>
    			<div class="col-sm-4">
    				<form id="form-1" method="post" class="animated fadeInDownShort">
    					<div class="form-group ">
    						<label>
    							Name
    						</label>
    						<input id="name" class="form-control "  name="SUB_NAME" />
    					</div>
    					<div class="form-group">
    						<label>
    							Email
    						</label>
    						<input id="email" class="form-control " type="email" name="SUB_EMAIL" />
    					</div>
    					<div class="form-group">
    						<label>
    							Message
    						</label><textarea id="message" class="form-control "  rows="4" cols="50" name="SUB_MESS"></textarea>
    					</div>
    					<div class="text-center">
                <button name="ADD" class="btn btn-danger " type="submit">
      						Submit
      					</button>
    					</div>
    				</form>
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
