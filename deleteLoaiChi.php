<?php
require"dbConnect.php";

	$tenloaichi =$_GET['TenLoaiChi'];
	$tendangnhap =$_GET['TenDangNhap'];

	$query="DELETE FROM `loaichi` WHERE loaichi.tendangnhap='$tendangnhap' AND `loaichi`.`tenloaichi` = '".$tenloaichi."'";
	

	if (mysqli_query($connect,$query)) {
				echo "true";
	}else{
		echo "false";
	}
		

?>