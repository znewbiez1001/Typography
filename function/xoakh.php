<?php
  if (isset($_POST['makh'])) {
    include "connecttk.php";
    $makh = $_POST['makh'];
    $query = "delete from register where ID = '$makh'";
    mysql_query($query, $conn);

    $result = array(
      'success' => true,
      'message' => 'Đã xoá người dùng',
    );

    header('Content-type: application/json');
    echo json_encode($result);
  } else {
    $result = array(
      'success' => false,
      'message' => 'Không có mã người dùng',
      //'abc' => 'xyz'
    );

    header('Content-type: application/json');
    echo json_encode($result);
  }
?>
