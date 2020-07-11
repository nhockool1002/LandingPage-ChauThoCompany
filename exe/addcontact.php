<?php
ob_start();
session_start();
require_once('../config.php');
if (isset($_POST['submit'])) {
  $name = $_POST['hoten'];
  $sdt = $_POST['sdt'];
  $email = $_POST['email'];
  $ids = "SELECT COUNT(*) FROM data";
  $dd = pg_query($conn, $ids);
  $sql = "INSERT INTO data(id, name, phone, email) 
              VALUES (" . $dd + 1 . ", $name','$sdt','$email')";
  pg_query($conn, $sql);
  if ($conn->query($sql)) {
    $_SESSION['flash'] = "<br><div class='alert alert-success text-center'>Thông tin đã được gửi đi</div>";
    header("Location:../index.php#footer");
  } else {
    $_SESSION['flash'] = "<br><div class='alert alert-danger text-center'>Có lỗi trong quá trình gửi đi</div>";
    header("Location:../index.php#footer");
  }
}
