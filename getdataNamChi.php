

<?php
	require"dbConnect.php";

	
	$tendangnhap = $_GET['TenDangNhap'];
	$fisrt_day_of_year = date('Y-01-01');

	$query = "SELECT * FROM khoanchi WHERE ngaychi >='$fisrt_day_of_year' AND ngaychi < '$fisrt_day_of_year' + INTERVAL 1 YEAR AND khoanchi.tendangnhap='".$tendangnhap."'";
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