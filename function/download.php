<html>
<!-- <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/jquery.fullPage.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="css/zoom.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="css/animations.css" media="screen" title="no title" charset="utf-8">
  <script src="./vendors/jquery.easings.min.js" charset="utf-8"></script>
  <script src="./js/jquery-2.1.0.min.js" charset="utf-8"></script>
  <script src="./js/jquery.fullPage.js" charset="utf-8"></script>

</head> -->
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
