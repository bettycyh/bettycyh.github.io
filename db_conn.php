<?php  

$sname = "127.0.0.1";
$uname = "root";
$password = "900603betty";

$db_name = "ALL_CLOTHES_SQL";

$conn = mysqli_connect($sname, $uname, $password, $db_name);



if (!$conn) {
	echo "Connection failed!";
	exit();
}
