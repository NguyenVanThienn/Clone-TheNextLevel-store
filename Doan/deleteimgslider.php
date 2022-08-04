<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="refresh" content="2, url=adwelcome.php">
	<title>Document</title>
</head>
<?php
	include_once("connect_php.php");
	include_once("./controlad.php"); 	
	 if(!isset($_SESSION['type'])){
	   header("Location: login.php");
	 }
?>


<body>
	<?php 	
		$id = $_GET['id'];											
		$delete = "DELETE  FROM image WHERE id = '".$id."'";
		$rs = mysqli_query($conn, $delete);
		if($rs){
			echo "Delete Successfully";
		}
		else{
			echo "Delete Failed";
		}
	?>
</body>
</html>