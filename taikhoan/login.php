<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include('./connect.php');
$user = $_POST['user'];//name của cột username trong login.html
$pass = $_POST['pass'];//name của cột password trong login.html
$sql= "SELECT * FROM login WHERE username = '". $user ."' and password = '". $pass ."' and rule ='admin' ";
$result = mysqli_query ($conn, $sql);
$sql1= "SELECT * FROM login WHERE username = '". $user ."' and password = '". $pass ."' and rule ='teacher' ";
$result1 = mysqli_query ($conn, $sql1);
if (mysqli_num_rows ($result)>0)
 		header ("Location: adminpage.html");
	elseif (mysqli_num_rows ($result1)>0)
		header ("Location: codeweb.html");
	else
		header("Location: homepage.html");
?>
</body>
</html>

