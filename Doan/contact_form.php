<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="refresh" content="0, url=contact.php" />
	<title>Document</title>
</head>
<body>
	<?php
	include_once("./connect_php.php");
	$fname = $email = $phone = $text =  '';

	$fname = $_POST['fullname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$text = $_POST['comment'];



	$sql1 = "INSERT INTO contact (ct_Fullname,ct_Email,ct_Phone,ct_Text) VALUES ('$fname','$email','$phone','$text')";
	$result = mysqli_query($conn,$sql1);
		if($result){
			echo '<script language="javascript">alert("Gửi thành công");</script>';
			
		}
		else{
			echo '<script language="javascript">alert("Gửi thất bại Vui lòng kiểm tra lại");</script>';
		
		}
			

	?>

</body>
</html>