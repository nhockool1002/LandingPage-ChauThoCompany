<?php
  ob_start();
  session_start();
  require_once('config.php');
  $sql = "SELECT * FROM data";
  $rows = $conn->query($sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Xem Data Khách hàng</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <div class="col-sm-12 col-md-12 col-xs-12">
    <h1 style="text-align:center">Xem dữ liệu khách hàng</h1>
    <table class="table table-striped table-sm table-bordered table-hover table-inverse">
        <thead class="thead-inverse">
            <tr>
                <th>ID</th>
                <th>Họ Tên</th>
                <th>Số điện thoại</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            <?php while($row = $rows->fetch_assoc()){ ?>
                <tr>
                    <td scope="row"><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                </tr>
            <?php } ?>
            </tbody>
    </table>
    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>