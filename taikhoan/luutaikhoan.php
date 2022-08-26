<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	
<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$rule = $_POST['rule'];
	
	include("connect.php");
	$ins = "INSERT INTO login (username, password, email, rule)";
	$ins .= " VALUES ('".$username ."', '".$password."', '".$email."', '".$rule."');";

	$rs = mysqli_query($conn,$ins);
	if($rs)
		echo "Bạn đã thêm tài khoản '".$username ."', mật khẩu '".$password."' thành công";

	else
		echo "Bạn đã lưu thất bại";
	
?>

</head>
<body>
<style>
	input#btn-yes{
            width:145px;
            background: rgb(36, 36, 212);
            color: white;
            cursor: pointer;
        }
        input#btn-yes:hover{/*Khi rê vào màu chỉ còn x%*/
            opacity: 0.85;
        }
        input#btn-no{
            width:145px;
            background: rgb(36, 36, 212);
            color: white;
            cursor: pointer;
        }
        input#btn-no:hover{/*Khi rê vào màu chỉ còn x%*/
            opacity: 0.85;
        }
	
</style>
</script>
<div>
	<p><h3><b>Bạn có muốn nhập thêm tài khoản khác?</b><h3></p>
	<form id="yes" action="themtaikhoan.php" method="post" role="form">
	<input type="submit" value= "Yes" id="btn-yes">
	</form>
	<form id="no" action="dstaikhoan.php" method="post" role="form">
	<input type="submit" value= "No" id="btn-no">
	</form>
</div>
</body>

</html>