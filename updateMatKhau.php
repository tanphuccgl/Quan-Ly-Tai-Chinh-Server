<?php
	require"dbConnect.php";

	$tendangnhap =$_GET['TenDangNhap'];
	$matkhau =$_GET['MatKhauCu'];
	$matkhaumoi = $_GET['MatKhauMoi'];


	$query="UPDATE `user` SET `matkhau` = '$matkhaumoi' WHERE `user`.`tendangnhap` = '$tendangnhap' AND `user`.`matkhau`='$matkhau' ";

	if(mysqli_query($connect,$query)){
			echo "true";
		}else{
			echo "false";
		}
	
 ?>