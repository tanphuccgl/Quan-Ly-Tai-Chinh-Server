<?php
require"dbConnect.php";

	require"dbConnect.php";

	$tendangnhap =$_GET['TenDangNhap'];
	$maloaichi=$_GET['MaLoaiChi'];
	$tenloaichi =$_GET['TenLoaiChi'];

	$query="UPDATE `loaichi` SET `tenloaichi` = '$tenloaichi' WHERE `loaichi`.`maloaichi` = '$maloaichi' AND `loaichi`.`tendangnhap`='$tendangnhap' ";

	if(mysqli_query($connect,$query)){
			echo "true";
		}else{
			echo "false";
		}

?>