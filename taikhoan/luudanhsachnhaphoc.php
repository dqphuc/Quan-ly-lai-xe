<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	
<?php
    $id = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$rule = $_POST['rule'];
	
	include("connect.php");
	$update = "UPDATE login  SET username='$username', password ='$password', email='$email', rule='$rule' WHERE id='$id'";
	$rs = mysqli_query($conn,$update);
	if($rs){
	    header("location:dstaikhoan.php");
    }
	else
		echo "Bạn đã sửa thất bại";
	
?>

</head>
<body>

</body>

</html>
