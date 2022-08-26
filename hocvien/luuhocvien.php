<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	
<?php
	$mahv = $_POST['mahv'];
	$hohv = $_POST['hohocvien'];
	$tenhv = $_POST['tenhocvien'];
	$ngaysinh = $_POST['ngaysinh'];
    $gioitinh = $_POST['gioitinh'];
    $diachi = $_POST['hokhau'];
    $malop = $_POST['malop'];
    $nhom = $_POST['nhom'];
    $dangkythilai = $_POST['dangkythilai'];
	
	include("connect.php");
	$ins = "INSERT INTO hocvien (mahv, hohv, tenhv, ngaysinh, gioitinh, diachi, malop, nhom, dangkythilai)";
	$ins .= " VALUES ('".$mahv."', '".$hohv."', '".$tenhv."', '".$ngaysinh."','".$gioitinh."', '".$diachi."', '".$malop."', '".$nhom."', '".$dangkythilai."' );";

	$rs = mysqli_query($conn,$ins);
	if($rs)
		echo "Bạn đã thêm học viên $hohv $tenhv thành công";

	else
		echo "Bạn đã lưu thất bại";
	
?>

</head>
<body>
<style>
	input#btn-yes{
            width:350px;
            height: 25px;
            background: grey;
            color: white;
            cursor: pointer;
        }
        input#btn-yes:hover{/*Khi rê vào màu chỉ còn x%*/
            opacity: 0.85;
        }
        input#btn-no{
            width:350px;
            height: 25px;
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
	<p><h3><b>Chọn thao tác khác</b><h3></p>
	<form id="1" action="dangky.php" method="post" role="form">
	<input type="submit" value= "Thêm học viên từ danh sách đăng ký" id="btn-yes">
	</form>
    <form id="1" action="themhocvien.php" method="post" role="form">
	<input type="submit" value= "Thêm học viên chưa đăng ký" id="btn-yes">
	</form>
	<form id="no" action="dshocvien.php" method="post" role="form">
	<input type="submit" value= "Dừng thêm học viên" id="btn-no">
	</form>
</div>
</body>

</html>