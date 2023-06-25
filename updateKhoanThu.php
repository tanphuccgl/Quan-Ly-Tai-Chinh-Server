<?php
require"dbConnect.php";

	require"dbConnect.php";

	$tendangnhap =$_GET['TenDangNhap'];
	$makhoanthu=$_GET['MaKhoanThu'];
	$tenloaithu =$_GET['TenLoaiThu'];
	$sotienthu =$_GET['SoTienThu'];
	
	$a=$_GET['NgayThu'];
	$ngay =strtr($a,'/','-');
	$ngaythu = date("Y-m-d", strtotime($ngay));

	$query="UPDATE `khoanthu` SET `tenloaithu` = '$tenloaithu', `sotienthu` = '$sotienthu', `ngaythu` = '$ngaythu' WHERE `khoanthu`.`tendangnhap`='$tendangnhap' AND `khoanthu`.`makhoanthu` ='$makhoanthu'";

	if(mysqli_query($connect,$query)){
			echo "true";
		}else{
			echo "false";
		}

?>