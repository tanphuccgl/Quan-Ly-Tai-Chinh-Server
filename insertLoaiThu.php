<?php
	require"dbConnect.php";

	$tendangnhap ="minh";
	$tenloaithu ="gia dinh" ;

	$query="INSERT INTO `loaithu` (`maloaithu`, `tenloaithu`, `tendangnhap`) VALUES (NULL, '".$tenloaithu."', '".$tendangnhap."');";

	$query1 = "SELECT tenloaithu FROM loaithu WHERE tendangnhap='$tendangnhap' AND tenloaithu='$tenloaithu'";
	$result =mysqli_query($connect,$query1);

	
	if(mysqli_fetch_row($result)>0){
		echo "false";
		
	}else{
		if (mysqli_query($connect,$query)) {
			echo "true";
		}
	}


?>