<?php
$connect = mysqli_connect("localhost","root","","db_levi");
	mysqli_query($connect,"SET NAMES 'utf8'");
	
	// if(mysqli_connect_errno()){
	// 	echo "ngu()";
	// }

	// echo "json_encode()";

// 	$servername = "localhost"; // Thay đổi tên máy chủ của bạn nếu cần
// $username = "root"; // Thay đổi tên người dùng của bạn nếu cần
// $password = ""; // Thay đổi mật khẩu của bạn nếu cần
// $database = "db_levi"; // Thay đổi tên cơ sở dữ liệu của bạn nếu cần

// // Tạo kết nối
// $connect = new mysqli($servername, $username, $password, $database);

// // Kiểm tra kết nối
// if ($connect->connect_error) {
//     die("Kết nối thất bại: " . $connect->connect_error);
// }

// // Truy vấn SELECT đơn giản
// $query = "SELECT * FROM your_table"; // Thay đổi tên bảng của bạn

// // Thực hiện truy vấn
// $result = $connect->query($query);

// // Kiểm tra và xử lý kết quả truy vấn
// if ($result->num_rows > 0) {
//     // Lặp qua từng hàng dữ liệu
//     while ($row = $result->fetch_assoc()) {
//         // Xử lý dữ liệu ở đây, ví dụ:
//         echo "Tên: " . $row["name"] . ", Tuổi: " . $row["age"] . "<br>";
//     }
// } else {
//     echo "Không có dữ liệu.";
// }

// // Đóng kết nối
// $connect->close();


 ?>