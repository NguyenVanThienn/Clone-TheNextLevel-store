<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="refresh" content="0, url=register.php" />

	<title>Document</title>
</head>
<body>
<?php
	require_once('./connect_php.php');
	$fname = $lname = $gender = $phone = $email = $password = $pwd = '';

	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$gender = $_POST['gender'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$pwd = $_POST['password'];
	$password = MD5($pwd);
	$sql = "SELECT * FROM tbuser WHERE Email = '". $email ."' OR Phone = '". $phone ."'";
	$rs = mysqli_query($conn,$sql);
	if(mysqli_num_rows($rs)>0)
		echo '<script language="javascript">alert("Email hoặc số điện thoại đã tồn tại, vui lòng nhập lại");</script>';
	else{
		//Thêm dữ liệu vào bảng
		$sql1 = "INSERT INTO tbuser (Firstname,Lastname,Gender,Phone,Email,Password) VALUES ('$fname','$lname','$gender','$phone','$email','$password')";
		$result = mysqli_query($conn,$sql1);
		if($result)
			echo '<script language="javascript">alert("Bạn đã đăng ký tài khoản thành công");</script>';
		else
			echo '<script language="javascript">alert("Đăng ký thất bại");</script>';
	}
	

?>
</body>
</html>