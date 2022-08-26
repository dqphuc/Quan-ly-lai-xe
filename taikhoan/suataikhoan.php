<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa tài khoản</title>
</head>
<body>
<style>
        
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap');

        *{
            box-sizing: border-box;

        }
        body{
            font-family: 'Montserrat', sans-serif;
            font-size: 17px;
        }
        #wrapper {
            display:flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
        }
        form{
            border: 1px solid #929394;
            border-radius: 5px;
            padding: 30px;
            background:#e0e1e2 ;
        }
        h3{
            text-align: center;
            font-size: 24px;
            font-weight: 500;
            color: rgb(49, 49, 187);
        }
        .form-group{
            margin-bottom: 15px;
            position: relative;
        }
        input{
            height: 50px;
            width: 300px;
            outline: none;
            border: 1px solid #dadce0;
            padding: 10px;
            border-radius: 5px;
            font-size: inherit;
            color: #202124;
            transition: all 0.3s ease-in-out;
        }
        label{
            position: absolute;
            padding: 0px 5px ;
            left: 5px;
            top:50%;
            pointer-events: none; /*quan trọng*/
            transform: translateY(-50%);
            background: white;
            transition: all 0.3s ease-in-out;
        }
        .form-group input:focus{
            border: 2px solid rgb(36, 36, 212);
            
        }
        /*Khi focus vào form-group tác động lên lable*/
        .form-group input:focus + label, .form-group input:valid + label{
            top:-8px;
            font-size: 12px;
            font-weight: 500;
            color: rgb(36, 36, 212);
            background: #e0e1e2;
        }
        input#btn-login{
            width:145px;
            background: rgb(36, 36, 212);
            color: white;
            cursor: pointer;
        }
        input#btn-login:hover{/*Khi rê vào màu chỉ còn x%*/
            opacity: 0.85;
        }
        input#btn-reset{
            width:145px;
            background: rgb(36, 36, 212);
            color: white;
            cursor: pointer;
        }
        input#btn-reset:hover{/*Khi rê vào màu chỉ còn x%*/
            opacity: 0.85;
        }
    </style>
<?php
	$id = $_GET['id'];
	include('connect.php');
	$sql="SELECT * FROM login WHERE id='$id'";
	$rs=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($rs);
?>
</script>

    <div id="wrapper">
        <form id="form1" action="luutaikhoansua.php" method="post" role="form">
            <h3>Sửa tài khoản</h3>
            <input type="hidden" name="id" id="id" value="<?php echo $row['id'];?>">
            <div class="form-group">
                <input type="text" name="username" id="username" value="<?php echo $row['username'];?>">
                <label for="">Tên đăng nhập</label>
            </div>
            <div class="form-group">
                <input type="password" name="password" id="password" value="<?php echo $row['password'];?>">
                <label for="">Mật khẩu</label>
            </div>
            <div class="form-group">
                <input type="text" name="email" id="email" value="<?php echo $row['email'];?>">
                <label for="">Email</label>
            </div>
            <div class="form-group">
                <input type="text" name="rule" id="rule" value="<?php echo $row['rule'];?>">
                <label for="">Phân quyền</label>
            </div>
            <input type="submit" value= "Sửa" id="btn-login">
            <form id="form1" action="dstaikhoan.php" method="post" role="form">
            <input type="reset" value= "Hũy" id="btn-reset" >
            </form>
        </form>
    </div>


</body>
</html>