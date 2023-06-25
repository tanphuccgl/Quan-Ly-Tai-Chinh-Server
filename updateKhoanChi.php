<?php
require"dbConnect.php";

	require"dbConnect.php";

	$tendangnhap =$_GET['TenDangNhap'];
	$makhoanchi=$_GET['MaKhoanChi'];
	$tenloaichi =$_GET['TenLoaiChi'];
	$sotienchi =$_GET['SoTienChi'];
	
	$a=$_GET['NgayChi'];
	$ngay =strtr($a,'/','-');
	$ngaychi = date("Y-m-d", strtotime($ngay));

	$query="UPDATE `khoanchi` SET `tenloaichi` = '$tenloaichi', `sotienchi` = '$sotienchi', `ngaychi` = '$ngaychi' WHERE `khoanchi`.`tendangnhap`='$tendangnhap' AND `khoanchi`.`makhoanchi` ='$makhoanchi'";

	if(mysqli_query($connect,$query)){
			echo "true";
		}else{
			echo "false";
		}

?>