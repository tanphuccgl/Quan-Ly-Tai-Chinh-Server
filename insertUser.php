<?php
	require"dbConnect.php";

	$tendangnhap =$_GET['TenDangNhap'];
	$matkhau =$_GET['MatKhau'];
	$hoten = $_GET['HoTen'];
	$diachi = $_GET['DiaChi'];

	$query="INSERT INTO `user` (`tendangnhap`, `matkhau`, `hoten`, `diachi`) VALUES ('$tendangnhap', '$matkhau', '$hoten', '$diachi')";

	$query1 = "SELECT tendangnhap FROM user WHERE tendangnhap='".$tendangnhap."'";
	$result =mysqli_query($connect,$query1);

	
	
	if(mysqli_fetch_row($result)>0){
		echo "false";
		
	}else{
		if (mysqli_query($connect,$query)) {
			echo "true";
		}
	}
	
 ?>