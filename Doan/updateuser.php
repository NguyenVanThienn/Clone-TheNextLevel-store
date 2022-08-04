<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<?php 
	include_once("./link.php");
?>
<body style="background-image: url(./img/bg.png);">
	<?php
		 include_once("./connect_php.php");
		 include_once("./controlad.php"); 	
		 if(!isset($_SESSION['type'])){
		   header("Location: login.php");
		 }
		$id = $_GET['id'];	
		include_once("connect_php.php");							
		$sql = "SELECT * FROM tbuser WHERE ID = '". $id . "'" ;
		$rs = mysqli_query($conn, $sql);
		$row = mysqli_fetch_row($rs);
	?>
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-12">

				<h2 class=" text-center">Cập nhật tài khoản người dùng</h2>
				<div class="row justify-content-center">

					<form action="confirmupdateuser.php?id=<?=$id?>" method="POST" name="form1" id="form1">
						<table>
							<tr>
								<th>FirstName</th>
								<th>
									<input type="text" name="firstname" id="firstname" value="<?= $row[1];?>">
								</th>
							</tr>
							<tr>
								<th>LastName</th>
								<th>
									<input type="text" name="lastname" id="lastname" value="<?= $row[2];?>">
								</th>
							</tr>
							<tr>				
								<th>Gender</th>
								<th>
								Male<input type="radio" name="gender" value="Male"
								<?php
								if($row[3] == "Male"){
									echo "checked";
								}  ?>>
								Female<input type="radio" name="gender" value="Female"
								<?php
								if($row[3] == "Female"){
									echo "checked";
								}  ?>
								>
								</th>
							</tr>
							<tr>
								<th>Phone</th>
								<th>
									<input type="text" name="phone" id="phone" value="<?= $row[4];?>">
								</th>
							</tr>
							<tr>
								<th>Email</th>
								<th>
									<input type="email" name="email" id="email" value="<?= $row[5];?>">
								</th>
							</tr>
							<tr>
								<th>Password</th>
								<th>
									<input type="password" name="password" id="password" value="<?= $row[6];?>">
								</th>
							</tr>
							<tr>
								<th>
									<input  type="submit" value="Update" >
								</th>
							</tr>
						</table>
					</form>

				</div>
			</div>
		</div>
	</div>
</body>
</html>