<?php
	include('connect.php');
	  
    include('connect.php');
	$output="";
    if(isset($_POST['btnSearch'])){
        $searchho=$_POST['txtSearch'];
        $searchten=$_POST['txtSearch_1'];
        if($searchho and $searchten !=""){
            $sql="SELECT * FROM hocvien WHERE hohv like '%$searchho%' and tenhv like '%$searchten%'" or die ("Không tìm thấy kết quả!");
            $query=mysqli_query($conn,$sql);
            $result = mysqli_num_rows($query);
            if($result == 0){
                $output .= "<span style ='color: red;'>Không có kết quả với từ khóa '$searchho' '$searchten'</span>";
            } else {
                $output .= "<span style ='color: #555;'>Các kết quả với họ và tên $searchho $searchten: $result</span>"
                        . "<br><hr style='width: 200px; float: left;'><br>";
                while ($row = mysqli_fetch_array($query)){
                    $hohv=$row['hohv'];
                    $tenhv=$row['tenhv'];
                    $ngaysinh=$row['ngaysinh'];
                    $gioitinh=$row['gioitinh'];
                    $diachi=$row['diachi'];
                    $output .="<div>$hohv $tenhv<br>$ngaysinh<br>$gioitinh<br>$diachi<br><br></div>";
                }
            }
        }else{
            $output .= "<span style ='color: red;'>Nhập từ khóa cần tìm!</span>";
        
        }
    }
	
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
input#btn{
            background: grey;
            color: white;
            cursor: pointer;
            padding: 5px;
        }
input#btn1{
            background: white;
            color: blue;
            cursor: pointer;
            padding: 5px;
        }
input#btn2{
            width:85px;
            background: white;
            color: blue;
            cursor: pointer;
            padding: 5px;

        }

</style>
<body>
    <h3>TÌM THÔNG TIN HỌC VIÊN THEO TÊN</h3>
    <div style="font-family: Tahoma; font-size: 12px; color:green">
        <form action="#" method="POST">
            <input type="text" name="txtSearch" placeholder="Nhập họ cần tìm" id="btn1"/>
            <input type="text" name="txtSearch_1" placeholder="Nhập tên cần tìm" id="btn2"/>
            <input type="submit" name="btnSearch" value="Search" id="btn"/>
        </form>
    <h3>THÔNG TIN HỌC VIÊN CẦN TÌM</h3>
        <?php
            echo $output;
        ?>

</div>
</body>
</html>