<?php
	require"dbConnect.php";

	
	$tendangnhap = $_GET['TenDangNhap'];
	$query = "SELECT makhoanthu,tendangnhap,tenloaithu,sotienthu,ngaythu FROM khoanthu WHERE khoanthu.tendangnhap='$tendangnhap' ";
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