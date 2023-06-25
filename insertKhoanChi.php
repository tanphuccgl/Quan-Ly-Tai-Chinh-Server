<?php
require"dbConnect.php";

// $tendangnhap ="a";
// 	$tenloaithu ="fas";
// 	$sotienthu ="30";
// 	$a="2019-03-28";
	$tendangnhap =$_GET['TenDangNhap'];
	$tenloaichi =$_GET['TenLoaiChi'];
	$sotienchi =$_GET['SoTienChi'];
	$a=$_GET['NgayChi'];
	$ngay =strtr($a,'/','-');
	$ngaychi = date("Y-m-d", strtotime($ngay));

	
	


	$query="INSERT INTO `khoanchi` (`makhoanchi`,`tendangnhap`, `tenloaichi` ,`sotienchi`, `ngaychi`) VALUES (NULL,'$tendangnhap','$tenloaichi','$sotienchi','$ngaychi')";

if (mysqli_query($connect,$query)) {
			echo "true";
}else{
	echo "false";
}
	



?>