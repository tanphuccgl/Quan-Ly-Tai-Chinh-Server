<?php
	require"dbConnect.php";

	
	$tendangnhap = $_GET['TenDangNhap'];
	$ngaya =strtr($_GET['Ngaybd'],'/','-');
	$ngayb =strtr($_GET['Ngaykt'],'/','-');
	$ngaybt = date("Y-m-d", strtotime($ngaya));
	$ngaykt = date("Y-m-d", strtotime($ngayb));
	$query = "SELECT * FROM khoanthu WHERE khoanthu.ngaythu BETWEEN CAST('$ngaybt' AS DATE) AND CAST('$ngaykt' AS DATE) AND khoanthu.tendangnhap='".$tendangnhap."' ";
		$result = $connect->query($query);
	
	


	if (mysqli_num_rows($result) > 0) {
		$users = array();
	
		while ($row = mysqli_fetch_assoc($result)) {
			$users[] = $row;
		}
	
		// Trả về dữ liệu dạng JSON
		echo json_encode($users);
	} else {
		echo "Không có dữ liệu.";
	}

	


 ?>