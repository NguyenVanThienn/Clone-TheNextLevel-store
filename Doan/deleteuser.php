<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="refresh" content="2, url=adwelcome.php">
	<title>Document</title>
</head>


<body>
	<?php 	
		$id = $_GET['id'];
		include("connect_php.php");										
		$delete = "DELETE  FROM tbuser WHERE ID = '".$id."'";
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