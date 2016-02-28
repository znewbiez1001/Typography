<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include 'connecttk.php';
      $sql = 'select * from dangky';
      $result = mysql_query($sql, $conn);
      echo "<table border=1 cellspacing='0'>";
      echo '<tr>';
      echo '<th>No.</th><th>Username</th><th>Password</th><th>Full Name</th><th>Address</th><th>Email</th><th>Date of Birth</th>';
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
          echo '</tr>';

          ++$i;
      }
      echo '</table>';
    ?>
  </body>
</html>
