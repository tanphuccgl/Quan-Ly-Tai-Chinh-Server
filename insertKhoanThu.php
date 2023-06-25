<?php
require"dbConnect.php";

// $tendangnhap ="a";
// 	$tenloaithu ="fas";
// 	$sotienthu ="30";
// 	$a="2019-03-28";
	$tendangnhap =$_GET['TenDangNhap'];
	$tenloaithu =$_GET['TenLoaiThu'];
	$sotienthu =$_GET['SoTienThu'];
	$a=$_GET['NgayThu'];
	$ngay =strtr($a,'/','-');
	$ngaythu = date("Y-m-d", strtotime($ngay));

	
	


	$query="INSERT INTO `khoanthu` (`makhoanthu`,`tendangnhap`, `tenloaithu` ,`sotienthu`, `ngaythu`) VALUES (NULL,'$tendangnhap','$tenloaithu','$sotienthu','$ngaythu')";

if (mysqli_query($connect,$query)) {
			echo "true";
}else{
	echo "false";
}
	



?>