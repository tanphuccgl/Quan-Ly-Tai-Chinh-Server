<?php
require"dbConnect.php";


	$tendangnhap =$_GET['TenDangNhap'];
	$maloaithu=$_GET['MaLoaiThu'];
	$tenloaithu =$_GET['TenLoaiThu'];

	$query="UPDATE `loaithu` SET `tenloaithu` = '$tenloaithu' WHERE `loaithu`.`maloaithu` = '$maloaithu' AND `loaithu`.`tendangnhap`='$tendangnhap' ";

	if(mysqli_query($connect,$query)){
			echo "true";
		}else{
			echo "false";
		}

?>