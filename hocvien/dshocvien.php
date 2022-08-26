<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tài khoản</title>
    <link rel="stylesheet" href="dangky.css">
    
</head>

<body>
<?php
	include('connect.php');
	$sql="SELECT * FROM hocvien";
	$rs=mysqli_query($conn,$sql);
?>
<h1 align="center"><b>DANH SÁCH HỌC VIÊN</b></h1>
    <table class="content-table" align="center" width="1000" border="1" cellspacing="0" cellpadding="1">
        <thead>
          <tr>
            <th><div align="center">Stt</div></th>
            <th><div align="center">Mã học viên</div></th>
            <th><div align="center">Họ</div></th>
            <th><div align="center">Tên</div></th>
            <th><div align="center">Ngày sinh</div></th>
            <th><div align="center">Giới tính</div></th>
            <th><div align="center">Địa chỉ</div></th>
            <th><div align="center">Lớp</div></th>
            <th><div align="center">Nhóm</div></th>
            <th><div align="center">Đăng ký thi lại</div></th>
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
              <td><?=$row['mahv'];?></td>
              <td><?=$row['hohv'];?></td>
              <td><?=$row['tenhv'];?></td>
              <td><?=$row['ngaysinh'];?></td>
              <td><?=$row['gioitinh'];?></td>
              <td><?=$row['diachi'];?></td>
              <td><?=$row['malop'];?></td>
              <td><?=$row['nhom'];?></td>
              <td><?=$row['dangkythilai'];?></td>
              <td><a href='suahocvien.php?id=<?=$row['id'];?>'>Sửa</a></td>
              <td><a href='xoahocvien.php?id=<?=$row['id'];?>'>Xóa</a></td> 
          <!--Truyền id cần xóa vào-->
          </tr>
          </tbody>
          <?php
        	$i=$i+1;
	        }
        ?>
      </table>
          <p align="center"><b><a href="themhocvien.php">Thêm học viên</a></b></p>
          <h4 align="center" style="color:#999" ><b >Thiết kế bởi Diệp Quốc Phục</b></h4>
</body>
</html>



