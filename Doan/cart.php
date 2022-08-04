<?php 
	session_start();
	include('./productdb.php');
	include('./component.php');

	if(isset($_POST['remove'])){
		if($_GET['action'] == 'remove'){
			foreach($_SESSION['cart'] as $key => $value){
				if($value["product_id"] == $_GET['id']){
					unset($_SESSION['cart'][$key]);
					
				}
			}
			
		}
	}



	?>
	


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./fonts/fontawesome-free-5.15.4-web/css/all.min.css">
    	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    	<link rel="stylesheet" href="./assets/base.css">
    	<link rel="stylesheet" href="./assets/style.css">
	<title>Cart</title>
</head>
<script>
function thongbao(){
			return alert("Sản phẩm đã được thanh toán")
		}
		</script>
<body>
	<?php 
		require_once("header.php");
		require_once("subheader.php");

	?>

	<section class="section ">
		<div class="wrap-bg">
		
			<div class="container py-md-4 px-md-4 card cart-mobile border-0">
				<div class="row px-5">
				<div class="title-shopping-cart">
						<h3>Giỏ hàng</h3>
						</div>
				</div>
				<div class="row px-5 justify-content-between">
					<div class="col-md-7">
					
						<div class="shopping-cart  ">

							<hr>							
							<?php 							
								$total = 0;
								if(isset($_SESSION['cart'])){
									$product_id = array_column($_SESSION['cart'], "product_id");
									
									$result0 = getData0();
									$result = getData();
									$result1 = getData1();
									
									while($row = mysqli_fetch_assoc($result0)){
										foreach($product_id as $id)
										if($row['id'] == $id){
											cartElement($row['product_img'],$row['product_name'],$row['product_price'],$row['id']);
											$total = $total + (int)$row['product_price'];
										}
									}													
								}else{
									echo "<h6>(Chưa có sản phẩm nào) nhấn vào <a href=\"product.php\" class=\"text-decoration-none\" style=\" color: #007bff;\">Cửa hàng</a> để mua hàng</h6>";
								}
																														
							?>
							
						</div>
					</div>
					<div class="col-md-4  bg-white h-25 header-cart-price">
							<div class="pt-4">
								<h6>PRICE DETAILS</h6>
								<hr>
								<div class="row price-deltails">
							
									<div class="col-md-6 px-3">
										<?php
										 if(isset($_SESSION['cart'])){
											 $count = count($_SESSION['cart']);
											 echo "<h6>Price ($count items)</h6>";
										 }else{
											echo "<h6>Price (0 items)</h6>";

										 }
										?>
										<h6>Deliver Charges</h6>
										<hr>
										<h6>Amount Payable</h6>
									</div>
									<div class="col-md-6 px-3">
										<h6>$<?php echo $total; ?></h6>
										<h6 class="text-success">FREE</h6>
										<hr>
										<h6>$<?php echo $total; ?></h6>
									</div>

								</div>
							</div>
							<form action="cart.php" method="POST">
								<?php
								if(isset($_SESSION['cart'])){
									echo "<button type=\"submit\" class=\"btn btn-danger mx-2 float-right mr-5 pr-3\" name=\"remove1\" >PURCHASE</button>";
								}

								
						

								?>
								
							</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	



<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</body>
</html>