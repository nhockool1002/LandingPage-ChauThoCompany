<?php
  ob_start();
  session_start();
  require_once('../config.php');
  if(isset($_POST['submit'])){
    $name = $_POST['hoten'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];
    $sql = "INSERT INTO data(name, phone, email) 
              VALUES ('$name','$sdt','$email')";
    if($conn->query($sql)){
        $_SESSION['flash'] = "<br><div class='alert alert-success text-center'>Thông tin đã được gửi đi</div>";
        header("Location:../index.php#footer");
    }
    else{
        $_SESSION['flash'] = "<br><div class='alert alert-danger text-center'>Có lỗi trong quá trình gửi đi</div>";
        header("Location:../index.php#footer");
    }
  }
