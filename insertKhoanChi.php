<?php
require"dbConnect.php";

	$tendangnhap =$_POST['TenDangNhap'];
	$tenloaichi =$_POST['TenLoaiChi'];
	$sotienchi =$_POST['SoTienChi'];
	$a=$_POST['NgayChi'];
	$ngay =strtr($a,'/','-');
	$ngaychi = date("Y-m-d", strtotime($ngay));


	$query="INSERT INTO `khoanchi` (`makhoanchi`,`tendangnhap`, `tenloaichi` ,`sotienchi`, `ngaychi`) VALUES (NULL,'".$tendangnhap."','".$tenloaichi."','".$sotienchi."','".$ngaychi."')";

	if (mysqli_query($connect,$query)) {
				echo "true";
	}else{
		echo "false";
	}
		



?>