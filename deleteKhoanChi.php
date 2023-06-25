<?php
require"dbConnect.php";

	$makhoanchi =$_GET['MaKhoanChi'];
	$tendangnhap =$_GET['TenDangNhap'];

	$query="DELETE FROM `khoanchi` WHERE `khoanchi`.`tendangnhap`='$tendangnhap' AND `khoanchi`.`makhoanchi` = '".$makhoanchi."'";
	

	if (mysqli_query($connect,$query)) {
				echo "true";
	}else{
		echo "false";
	}
		

?>