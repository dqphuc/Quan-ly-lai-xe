<?php
	$id = $_GET['id'];
	include("connect.php");
	$del = "DELETE FROM dangky WHERE id='$id'";
    $rs = mysqli_query($conn,$del);

    if ($rs){
        header("location:dangky.php");
    }
    
	
?>