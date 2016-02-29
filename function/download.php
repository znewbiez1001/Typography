<html>

<?php include_once "core/head.php"; ?>
  <body>
    <?php
    mysql_connect("localhost","root","");
    mysql_select_db("project");
    $res=mysql_query("select * from download");


      while ($row=mysql_fetch_array($res)) {

        echo "<tr>";?> <a href="<?php echo $row["path"];?>" class="btn btn-success">Download</a> <?php echo "<tr>";

      }


    ?>
  </body>

</html>
