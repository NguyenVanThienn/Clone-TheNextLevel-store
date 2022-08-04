<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	include_once("connect_php.php");
	include_once("./controlad.php"); 	
		 if(!isset($_SESSION['type'])){
		   header("Location: login.php");
		 }
	if(isset($_POST['productcode'])){
		$productcode = $_POST['productcode'];
		$productname = $_POST['productname'];
		$price = $_POST['price'];
		$type = $_POST['type'];
		$description = $_POST['description'];

		if(isset($_FILES['image'])){
			$filename = $_FILES["image"]["name"];   
			$folder = './img_item/'.$filename;
			$img = $_FILES['image'];
			if($img["error"] != 0)
			{
			  echo "Dữ liệu upload bị lỗi";
			  die;	
			}
			$target = './img_item/' . basename($img['name']);			
			$allow = true;
			$maxsize = 1000000;
			$allowType = array('JPG', 'GIF' , 'PNG', 'JPEG');
			if(file_exists($target))
			{
			  echo "Tập tin này đã tồn tại";
			  $allow = false;
			}
			if($img["size"] > $maxsize)
			{
			  echo "Tập tin có dung lượng lớn hơn cho phép (1MB)";
			  $allow = false;	
			}
			$filetype = strtoupper(pathinfo($target,PATHINFO_EXTENSION));
			if(!in_array($filetype,$allowType))
			{
			  echo "Không hỗ trợ định dạng này";
			  $allow = false;
			}
			
		}
		if ($allow){

			$sql = "INSERT INTO producttb(product_code,product_name,product_price,product_img,product_description,type) VALUES ('$productcode','$productname','$price','$folder','$description','$type')";
			$query = mysqli_query($conn,$sql);
	
			if($query){
				move_uploaded_file($_FILES["image"]["tmp_name"],$folder);
				header('Location: adwelcome.php');
			}else{
				echo $query;
			}
		}
	}
	//echo $masp . " - ". $tensp . " - " . $giatien . " - " . $mota ." - " . $hinhanh["name"];
	
?>
</body>
</html>