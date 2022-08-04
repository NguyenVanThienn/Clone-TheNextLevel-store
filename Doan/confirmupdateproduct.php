<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="refresh" content="1, url=adwelcome.php">
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
  		if(isset($_POST['productcode'])){
			$productcode = $_POST['productcode'];
			$productname = $_POST['productname'];
			$price = $_POST['price'];
			$type = $_POST['type'];
			$description = $_POST['description'];
	
			if(isset($_FILES['image'])){
				$filename = $_FILES["image"]["name"];
		 
				$folder = './img_item/'.$filename;
				
				move_uploaded_file($_FILES["image"]["tmp_name"],$folder);
			}
	
			$sql = "UPDATE producttb SET product_code='".$productcode."',product_name='".$productname."',product_price='".$price."',product_img='".$folder."',product_description='".$description."',type='".$type."' WHERE id = '".$id."'";
			$query = mysqli_query($conn,$sql);

		}
		if($query){
			echo "Success";
		}
		else{
			echo "Failed";
		}
	?>
</body>
</html>