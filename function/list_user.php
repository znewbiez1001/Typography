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
    ?>
      <table>
      <tr>
      <th>No.</th>
      <th>ID</th>
      <th>NAME</th>
      <th>USERNAME</th>
      <th>EMAIL</th>
      <th>PASSWORD</th>
      <th>ADDRESS</th>
      <th>DOB</th>
      <th>DELETE</th>
      </tr>;
    <?php
      $i = 1;
      while ($row = mysql_fetch_row($result)) {
    ?>
      <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $row[0] ?></td>
      <td><?php echo $row[1] ?></td>
      <td><?php echo $row[2] ?></td>
      <td><?php echo $row[3] ?></td>
      <td><?php echo $row[4] ?></td>
      <td><?php echo $row[5] ?></td>
      <td><?php echo $row[6] ?></td>
      <td><button style="color:red" class="js-delete" data-id="<?php echo $row[0] ?>">Xóa</button></td>
      </tr>
      <?php
        ++$i;
        }
      echo '</table>';
      ?>

    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript">
        $(document).on('click', '.js-delete', function(e){
            e.preventDefault();

            var id = $(this).attr('data-id');
            var tr = $(this).parent().parent();
            tr.remove();

            $.ajax({
                type: 'POST',
                url: "xoakh.php",
                data: {
                  makh: id,
                },
            }).done(function() {
                //console.log(data);
                //tr.remove();
                //alert('Da xoa phong ban');
                //window.location.href = 'xoaphongban.php';
            });
        });
    </script>
  </body>
</html>
