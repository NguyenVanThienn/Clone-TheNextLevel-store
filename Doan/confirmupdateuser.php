<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		 include_once("./connect_php.php");
		 include_once("./controlad.php"); 	
		 if(!isset($_SESSION['type'])){
		   header("Location: login.php");
		 }
  		$id = $_GET['id'];		
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$gender = $_POST['gender'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$pwd = $_POST['password'];
		$password = MD5($pwd);
		include("connect_php.php");
		$update = "UPDATE tbuser SET Firstname='".$firstname."',Lastname='".$lastname."',Gender='".$gender."',Phone='".$phone."',Email='".$email."',Password='".$password."' WHERE ID = '".$id."'";
		$rs = mysqli_query($conn, $update);
		if($rs){			
			echo '<script language="javascript">alert("Cập nhật thành công");</script>';
			header("Location: adwelcome.php");
		}
		else{
			echo "Failed";
			echo $rs;
		}
	?>
</body>
</html>