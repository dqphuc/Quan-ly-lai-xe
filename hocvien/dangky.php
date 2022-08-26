<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="dangky.css">
    
</head>

<body>
 <?php
  $host='localhost';
  $user='root';
  $pass='';
  $data='quanlylaixe';
  
  $conn = mysqli_connect($host, $user, $pass) or die ("Không thể kết nối đến csdl");
  mysqli_select_db($conn, $data) or die("Không thể kết nối database");
  
	$sql="SELECT * FROM dangky";
	$rs=mysqli_query($conn,$sql);
  ?>

<h1 align="center"><b>THÔNG TIN HỌC VIÊN ĐĂNG KÝ HỌC LÁI XE</b></h1>
    <table class="content-table" align="center" width="1000" border="1" cellspacing="0" cellpadding="1">
        <thead>
          <tr>
            <th><div align="center">Stt</div></th>
            <th><div align="center">Họ</div></th>
            <th><div align="center">Tên</div></th>
            <th><div align="center">Ngày sinh</div></th>
            <th><div align="center">Giới tính</div></th>
            <th><div align="center">Địa chỉ</div></th>
            <th><div align="center">Điện thoại</div></th>
            <th><div align="center">Hạng lái xe</div></th>
            <th><div align="center">Nhập học</div></th>
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
              <td><?=$row['hohocvien'];?></td>
              <td><?=$row['tenhocvien'];?></td>
              <td><?=$row['ngaysinh'];?></td>
              <td><?=$row['gioitinh'];?></td>
              <td><?=$row['hokhau'];?></td>
              <td><?=$row['dienthoai'];?></td>
              <td><?=$row['hang'];?></td>
              <td><a href='hvnhaphoc.php?id=<?=$row['id'];?>'>yes</a></td>
              <td><a href='xoadangky.php?id=<?=$row['id'];?>'>Xóa</a></td>
          <!--Truyền id cần xóa vào-->
          </tr>
          </tbody>
          <?php
        	$i=$i+1;
	        }
        ?>
      </table>
      <h4 align="center" style="color:#999" ><b >Thiết kế bởi Diệp Quốc Phục</b></h4>
</body>
</html>