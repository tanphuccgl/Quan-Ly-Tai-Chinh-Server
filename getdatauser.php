<?php
	require"dbConnect.php";


	$tendangnhap = "a"; // Thay đổi tên đăng nhập theo dữ liệu nhập vào
$matkhau = "1"; // Thay đổi mật khẩu theo dữ liệu nhập vào

// $tendangnhap = $_POST['tendangnhap'];
// $matkhau = $_POST['matkhau'];

// Truy vấn SELECT để lấy dữ liệu user và password
$query = "SELECT tendangnhap, matkhau FROM user WHERE tendangnhap='$tendangnhap' AND matkhau='$matkhau'";

// Thực hiện truy vấn
$result = $connect->query($query);

// Kiểm tra và xử lý kết quả truy vấn
// Kiểm tra và xử lý kết quả
if (mysqli_num_rows($result) > 0) {
    $users = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }

    // Trả về dữ liệu dạng JSON
    echo json_encode($users[0]);
} else {
    echo "Không có dữ liệu.";
}

	// $query = "SELECT tendangnhap, matkhau FROM user WHERE tendangnhap='a' AND matkhau='1'";
	// $data = mysqli_query($connect,$query);
	
	// class getdatauser{
	// 	function getdatauser($tendangnhap,$matkhau){
	// 		$this->TenDangNhap=$tendangnhap;
	// 		$this->MatKhau = $matkhau;
	// 	}
	// }

	// $arraydatauser = array();
	// while ($row = mysqli_fetch_assoc($data)) {
	// 	array_push($arraydatauser, new getdatauser($row['tendangnhap'],$row['matkhau']));
	// }

	// echo json_encode($arraydatauser);


// 	$query = "SELECT tendangnhap, matkhau FROM user WHERE tendangnhap='a' AND matkhau='1'";

// // Thực hiện truy vấn
// $result = $connect->query($query);

// // Kiểm tra và xử lý kết quả truy vấn
// if ($result->num_rows > 0) {
//     // Lặp qua từng hàng dữ liệu (trong trường hợp này chỉ có một hàng)
//     while ($row = $result->fetch_assoc()) {
//         $user = $row["tendangnhap"];
//         $password = $row["matkhau"];

//         // Xử lý dữ liệu ở đây
//         echo "User: " . $user . ", Password: " . $password;
//     }
// } else {
//     echo "Không tìm thấy dữ liệu.";
// }

 ?>