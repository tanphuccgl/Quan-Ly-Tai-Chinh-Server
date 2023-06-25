

<?php
	require"dbConnect.php";

	
	$tendangnhap =$_GET['TenDangNhap'];
	$hoten = $_GET['HoTen'];
	$diachi = $_GET['DiaChi'];

	$query = "SELECT * FROM `user` WHERE tendangnhap='$tendangnhap' AND hoten='$hoten' AND diachi='$diachi' ";
	$result = $connect->query($query);
	
	


	if (mysqli_num_rows($result) > 0) {
		$users = array();
	
		while ($row = mysqli_fetch_assoc($result)) {
			$users[] = $row;
		}
	
		// Trả về dữ liệu dạng JSON
		echo json_encode($users[0]['matkhau']);

	} else {
		echo "Không có dữ liệu.";
	}

	


 ?>