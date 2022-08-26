<?php
$host='localhost';
$user='root';
$pass='';
$data='quanlylaixe';

$conn = mysqli_connect($host, $user, $pass) or die ("Không thể kết nối đến csdl");
mysqli_select_db($conn, $data) or die("Không thể kết nối database");
?>
