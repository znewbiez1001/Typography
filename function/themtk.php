<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <table width="500" border="1" align="center">
        <tbody>
          <tr align="center">
            <td colspan="2">CREATE A NEW ACOUNT</td>
          </tr>
          <tr>
            <td width="150">Username</td>
            <td width="313"><input type="text" name="nametk" value="" placeholder="Input your username" size="50px"></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" name="passtk" value="" placeholder="Input your password" size="50px"></td>
          </tr>
          <tr>
            <td>Full Name</td>
            <td><input type="text" name="yourname" value="" placeholder="Input your full name" size="50px"></td>
          </tr>
          <tr>
            <td>Address</td>
            <td><input type="text" name="youradd" value="" placeholder="Input your address" size="50px"></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input type="text" name="youremail" value="" placeholder="Input your email" size="50px"></td>
          </tr>
          <tr>
            <td>Date of Birth</td>
            <td><input type="date" name="yourdob" value=""></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><input type="submit" name="add" value="Create"></td>
          </tr>
        </tbody>
      </table>
    </form>
    <?php
      if(isset($_POST['add']))
      {
        include("connecttk.php");
        $username=$_POST['nametk'];
        $pass=$_POST['passtk'];
        $name=$_POST['yourname'];
        $add=$_POST['youradd'];
        $email=$_POST['youremail'];
        $dob=$_POST['yourdob'];
        $str="insert into dangky values('$username','$pass','$name','$add','$email','$dob')";
        mysql_query($str,$conn);
        echo "SUCCESSFUL!!!";
      }
    ?>
  </body>
</html>
