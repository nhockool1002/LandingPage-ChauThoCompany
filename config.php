<?php
// $hostname = 'ec2-52-204-232-46.compute-1.amazonaws.com';
// $username = 'gbfamrjewhkjds';
// $password = '3e51abc23d1f2393ef589620980c95e94116b281980d85259ecdbc6b584f44ea';
// $dbname = 'df1g2isvvr82lq';
$hostname = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'ct';
define('HOSTNAME',$hostname);
define('USERNAME',$username);
define('PASSWORD',$password);
define('DBNAME',$dbname);
$conn = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME);
// $conn = pg_connect("host=ec2-35-172-73-125.compute-1.amazonaws.com port=5432 dbname=d7eslihqbufe9g user=nztedufbgncvss password=e4b2f8f7092b5a49b3104c87dd3e89ca55b73e27a7b78c8176f2103bb7b6d844");
//require_once("../backup.php");
// Kiểm tra kết nối cơ sở dữ liệu
if (mysqli_connect_errno()){
  echo "Thất bại trong việc cơ sở dữ liệu " . mysqli_connect_error();
}
//mysqli_set_charset($conn,"utf8");
?>