<!DOCTYPE html>
<html>
  <?php require '../core/head.php'; ?>
  <head>
    <style media="screen">
      table, th, tr, td {
        margin-left: 15%;
        margin-top: 100px;
        border: 2px solid black;
        text-align: center;
        font-size: 17px;
      }
    </style>
  </head>
  <body>
    <?php

      include '../core/admin_navbar.php';
      include 'connecttk.php';
      $sql = 'select * from register';
      $result = mysql_query($sql, $conn);
      echo '<table>';
      echo '<tr>';
      echo '<th>No.</th><th>ID</th><th>NAME</th><th>USERNAME</th><th>EMAIL</th><th>PASSWORD</th><th>ADDRESS</th><th>DOB</th>';
      echo '</tr>';
      $i = 1;
      while ($row = mysql_fetch_row($result)) {
          echo '<tr>';
          echo "<td>$i</td>";
          echo "<td>$row[0]</td>";
          echo "<td>$row[1]</td>";
          echo "<td>$row[2]</td>";
          echo "<td>$row[3]</td>";
          echo "<td>$row[4]</td>";
          echo "<td>$row[5]</td>";
          echo "<td>$row[6]</td>";
          echo '</tr>';

          ++$i;
      }
      echo '</table>';
    ?>
  </body>
</html>
