<?php
require"dbConnect.php";

	$tenloaithu =$_GET['TenLoaiThu'];
	$tendangnhap =$_GET['TenDangNhap'];

	$query="DELETE FROM `loaithu` WHERE loaithu.tendangnhap='$tendangnhap' AND `loaithu`.`tenloaithu` = '".$tenloaithu."'";
	

	if (mysqli_query($connect,$query)) {
				echo "true";
	}else{
		echo "false";
	}
		

?>