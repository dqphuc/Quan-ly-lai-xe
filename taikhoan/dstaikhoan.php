<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tài khoản</title>
    <link rel="stylesheet" href="CSS/dangky.css">
    
</head>

<body>
<?php
	include('connect.php');
	$sql="SELECT * FROM login";
	$rs=mysqli_query($conn,$sql);
?>
<h1 align="center"><b>THÔNG TIN TÀI KHOẢN</b></h1>
    <table class="content-table" align="center" width="1000" border="1" cellspacing="0" cellpadding="1">
        <thead>
          <tr>
            <th><div align="center">Stt</div></th>
            <th><div align="center">Tên đăng nhập</div></th>
            <th><div align="center">Mật khẩu</div></th>
            <th><div align="center">Địa chỉ email</div></th>
            <th><div align="center">Phân quyền</div></th>
            <th><div align="center">Sửa</div></th>
            <th><div align="center">Xóa</div></th>
            
          </tr>
        </thead>
        <?php
          $i=1;
          while ($row=mysqli_fetch_array($rs))
          {
          ?>
          <tbody>
          <tr>
              <td td><?=$i;?></td>
              <td><?=$row['username'];?></td>
              <td><?=$row['password'];?></td>
              <td><?=$row['email'];?></td>
              <td><?=$row['rule'];?></td>
              <td><a href='suataikhoan.php?id=<?=$row['id'];?>'>Sửa</a></td>
              <td><a href='xoataikhoan.php?id=<?=$row['id'];?>'>Xóa</a></td> 
          <!--Truyền id cần xóa vào-->
          </tr>
          </tbody>
          <?php
        	$i=$i+1;
	        }
        ?>
      </table>
      <p align="center"><b><a href="themtaikhoan.php">Thêm tài khoản mới</a></b></p>
      <h4 align="center" style="color:#999" ><b >Thiết kế bởi Diệp Quốc Phục</b></h4>
</body>
</html>



