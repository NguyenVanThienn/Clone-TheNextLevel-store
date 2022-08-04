<?php
session_start();
$id = $_SESSION['id'];
$type = $_SESSION['type'];
$sql = "SELECT * FROM tbuser WHERE ID='$id' AND type='admin'";
$result= mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$fname = $row['Firstname'];
		$lname = $row['Lastname'];
		$email = $row['Email'];
		$gender = $row['Gender'];
	}
}
if(!isset($_SESSION['type'])){
	header("Location: login.php");
}

?>