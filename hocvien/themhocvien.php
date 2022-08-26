<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm học viên</title>
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
 
</script>

<div id="wrapper">
        <form id="form2" action="luuhocvien.php" method="post" role="form">
            <h3>DANH SÁCH HỌC VIÊN NHẬP HỌC</h3>
            <input type="hidden" name="id" id="id" value="">
            <div class="form-group">
                <input type="text" name="mahv" id="mahv" value="">
                <label for="">Mã học viên</label>
            </div>
            <div class="form-group">
                <input type="text" name="hohocvien" id="hohocvien" value="">
                <label for="">Họ học viên</label>
            </div>
            <div class="form-group">
                <input type="tenhocvien" name="tenhocvien" id="tenhocvien" value="">
                <label for="">Tên học viên</label>
            </div>
            <div class="form-group">
                <input type="text" name="ngaysinh" id="ngaysinh" value="">
                <label for="">Ngày sinh</label>
            </div>
            <div class="form-group">
                <input type="text" name="gioitinh" id="gioitinh" value="">
                <label for="">Giới tính</label>
            </div>
            <div class="form-group">
                <input type="text" name="hokhau" id="hokhau" value="">
                <label for="">Địa chỉ</label>
            </div>
            <div class="form-group">
                <input type="text" name="malop" id="malop" value="">
                <label for="">Lớp</label>
            </div>
            <div class="form-group">
                <input type="text" name="nhom" id="nhom" value="">
                <label for="">Nhóm</label>
            </div>
            <div class="form-group">
                <input type="text" name="dangkythilai" id="dangkythilai" value="">
                <label for="">Đăng ký thi lại</label>
            </div>

            <input type="submit" value= "Thêm" id="btn-login">
            <form id="form2" action="themhocvien.php" method="post" role="form">
           
            <input type="reset" value= "Hũy" id="btn-reset" >
            </form>
        </form>
    </div>


</body>
</html>