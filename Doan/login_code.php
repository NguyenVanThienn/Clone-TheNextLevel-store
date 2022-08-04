<?php
	include_once('./connect_php.php');
	
	$email = $password = $pwd = '';
	$email = $_POST['email'];
	$pwd = $_POST['password'];
	$password = MD5($pwd);

	$sql = "SELECT * FROM tbuser WHERE Email='$email' AND Password='$password' AND type='admin'";
	$sql1="SELECT * FROM tbuser WHERE Email='$email' AND Password='$password' AND type=''";
	$result = mysqli_query($conn,$sql);
	$result1 = mysqli_query($conn,$sql1);
	$sq = mysqli_num_rows($result);
	$sq1 = mysqli_num_rows($result1);
	if($sq > 0 )
	{
		while($row = mysqli_fetch_assoc($result))
		{
			$id = $row['ID'];
			$email = $row['Email'];
			$type = $row['type'];
			$firstname_ad = $row['Firstname'];
			$lastname_ad = $row['Lastname'];
			session_start();
			$_SESSION['id'] = $id;
			$_SESSION['email'] = $email;
			$_SESSION['firstname_ad'] = $firstname_ad;
			$_SESSION['lastname_ad'] = $lastname_ad;
			$_SESSION['type'] = $type;
		}
		header("Location: adwelcome.php");
	}
	else{
	
		echo '<script language="javascript">alert("Sai mật khẩu hoặc email");</script>';

	}

	if($sq1 > 0 )
	{
		while($row1 = mysqli_fetch_assoc($result1))
		{
			$id = $row1['ID'];
			$email = $row1['Email'];
			$firstname = $row1['Firstname'];
			$lastname = $row1['Lastname'];
			session_start();
			$_SESSION['id'] = $id;
			$_SESSION['email_user'] = $email;
			$_SESSION['firstname'] = $firstname;
			$_SESSION['lastname'] = $lastname;
			$_SESSION['last_login'] = time();
			$_SESSION['expire'] = $_SESSION['last_login'] + (60*60*6);
		}
	         
		header("Location: index.php");
		
	}
	else{
	
		echo '<script language="javascript">alert("Sai mật khẩu hoặc email");</script>';
	}
?>