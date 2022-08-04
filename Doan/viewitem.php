<?php 
    session_start();
    require_once('./productdb.php');
    require_once('./component.php');
    if(isset($_POST['add'])){
        // print_r($_POST['product_id']);
        if(isset($_SESSION['cart'])){

            $item_array_id =  array_column($_SESSION['cart'],"product_id");
            
            if(in_array($_POST['product_id'],$item_array_id)){
                echo "<script>alert('Product is already added in the cart...!') </script>";
                echo "<script>window.location='index.php'</script>";
            }
            else{
                $count = count($_SESSION['cart']);
                $item_array = array(
                    'product_id'=> $_POST['product_id']
                );

                $_SESSION['cart'][$count] = $item_array;
            }
        }else{
            $item_array = array(
                'product_id'=> $_POST['product_id']
            );

            $_SESSION['cart'][] = $item_array;
        }
    }
?>
<?php
	include_once("./link.php");
	include_once("./connect_php.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Xem sản phẩm</title>
</head>
<script>
		function thongbao(){
			return alert("Sản phẩm đã được thêm vào giỏ hàng")
		}
		</script>
<body>
	<?php
	include_once("./header.php");
	include_once("./subheader.php");
	$id = $_GET['id'];	
	include_once("connect_php.php");							
	$sql = "SELECT * FROM producttb WHERE ID = '". $id . "'" ;
	$rs = mysqli_query($conn, $sql);
	?>
				<?php								
                                       while($row = mysqli_fetch_array($rs)){
                                                     ?>   
	<section class="product-info">
		<section class="section">
			<form action="product.php" method="POST">
				<div class="container card py-2">
					<div class="section">
						<div class="section details-product">
							<div class="row">
								<div class="col-lg-5 mx-auto col-md-8">
									<a href="" class="d-block pos-relative embed-responsive">
										<img src="<?= $row['product_img'] ?>" alt="" class="img-fluid">
									</a>
								</div>
								<div class="mx-auto col-lg-7 py-2 detail-pro">
									<h1 class="title-product"><?= $row['product_name'] ?></h1>
									<div class="row">
										<div class="col-md-12 col-12">
											<div class="mb-2 mt-2"></div>
											<div class="product-status">
												<span class="first_status">
													Thương hiệu: 
													<span class=" text-primary"> Next Level</span>
													<span class="line">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
												</span>
												<span class="second-status">
													Tình trạng: 
													<span class="text-primary">Còn hàng</span>
												</span>
											</div>
											<div class="price_box">
												<span class="sale-price">
														<span class="price product-price red-color">
														$<?= $row['product_price'] ?>
														</span>
												</span>
												<span class="old-price">
													<small><s>$17</s></small>
												</span>
											</div>
											<div class="description my-3">
												<h2 class="description-item  my-2">Mô tả sản phẩm</h2>
												<span class="my-2"><?= $row['product_description'] ?></span>
											</div>
											<div class="form-product">
												<div class="button-action">
													<button type="submit" name="add" onclick="return thongbao()" class="btn btn-base">
														<span>Thêm vào giỏ hàng</span>
													</button>
													<input type='hidden' name='product_id' value='<?=$row['id']?>'>
												</div>
											</div>
											
										</div>
										
										
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>

			<?php
					$productid = $_GET['id'];
			if(isset($_POST['content'])){	
				$content = $_POST['content'];				
				// if(isset($_SESSION['email_user']) || isset($_SESSION['email'])){
				// 	$fullname = $_SESSION['firstname'] . ' '. $_SESSION['lastname'];
				// 	$fullname_ad = $_SESSION['firstname_ad'] . ' '. $_SESSION['lastname_ad'];
				// 	$email_ad = $_SESSION['email'];
				// 	$email = $_SESSION['email_user'];									
				// 	$sql = "INSERT INTO comments(FullName,email,productid,content) values('$fullname','$email','$productid','$content')";
				// 	$sql_ad = "INSERT INTO comments(FullName,email,productid,content) values('$fullname_ad','$email_ad','$productid','$content')";
				// 	if(isset($_SESSION['email_user'])){
				// 		$result = mysqli_query($conn,$sql);
				// 		if($result){
				// 			echo "<script>alert('Comment successfully')</script>";
				// 		}else{
				// 			echo 'Failed';
				// 		}
				// 	}
				// 	if(isset($_SESSION['email'])){
				// 		$result_ad = mysqli_query($conn,$sql_ad);
				// 		if($result_ad){
				// 			echo "<script>alert('Comment successfully')</script>";
				// 		}else{
				// 			echo 'Failed';
				// 		}
				// 	}								
				// }
				if(isset($_SESSION['email_user'])){
					$fullname = $_SESSION['lastname'] . ' '. $_SESSION['firstname'];				 					 	
				 	$email = $_SESSION['email_user'];									
				 	$sql = "INSERT INTO comments(FullName,email,productid,content) values('$fullname','$email','$productid','$content')";
				 	$result = mysqli_query($conn,$sql);
					
				 		if($result){
				 			echo "<script>alert('Comment successfully')</script>";
				 		}else{
				 			echo 'Failed';
				 		}
				}
				else if(isset($_SESSION['email'])){				
				 	$fullname_ad = $_SESSION['lastname_ad'] . ' '. $_SESSION['firstname_ad'];
				 	$email_ad = $_SESSION['email'];				 													 
				 	$sql_ad = "INSERT INTO comments(FullName,email,productid,content) values('$fullname_ad','$email_ad','$productid','$content')";
					 $result_ad = mysqli_query($conn,$sql_ad);
					
				 		if($result_ad){
				 			echo "<script>alert('Comment successfully')</script>";
				 		}else{
				 			echo 'Failed';
				 		}
				}
			}
		
			?>								
			<form method="POST">
				
				<div class="container card py-2">
					
					<section>
						<?php
						if(isset($_SESSION['email']) || isset($_SESSION['email_user'])){
							echo '
							<div class="row">

							<div class="col-6 col-md-6">
							<h2>Bình luận</h2>
								<textarea name="content" id="content"  rows="5" class=" form-control" placeholder="Comment here"></textarea>
								<input type="submit" name="submit" class="btn btn-warning float-right my-2" value="Đăng">
							</div>
							<div class="col-6 col-md-6">

							</div>
						</div>
							';
						}else{
							echo '<h5><a href="login.php" style="color: #000;" class="mb-3">Đăng nhập</a> để bình luận</h5>';
						}
						
						?>
						
					</section>
					<?php
					$id1 = $_GET['id'];
					$sql_cmt = "SELECT * FROM comments WHERE productid = '".$id1."'";
					$rs_cmt = mysqli_query($conn,$sql_cmt);
					$row_num = mysqli_num_rows($rs_cmt);
					
					?>
					<section>
						<div class="row mx-2">
							<?php
							if($row_num != 0){
								echo '
								<div class="col-12 col-md-12">
								<h2>Tất cả bình luận</h2>
								</div>
								';
							}else{
								echo '<h2 class="ml-2">Sản phẩm hiện chưa có bình luận nào</h2>';
							}
							?>
							
							<?php
							while($row = mysqli_fetch_array($rs_cmt)){
					
							?>
							<div class="col-12 col-md-12 mb-4 card px-4">
								<div class="row justify-content-between mx-3">
									<h5><?= $row['FullName'] . ":"; ?></h5>
									<span><?= $row['date'];?></span>
								</div>
								<div class="row px-5">
									<h6 class="card flex-grow-1  mb-3 py-3" style="background-color: #cbcfcc;"><span class="ml-2"><?= $row['content']; ?></span></h6>
								</div>
							
							</div>
							<?php
							}
							?>
						</div>
					</section>
				</div>
			</form>
		</section>
	</section>
	<?php
                                       }
                                       ?>   

	<section class="section product-info-1">
		<div class="container card px-3 py-3">
			<div class="row">
				<div class="col-12 col-md-12">
					<div style="height: auto;">
						<p><strong>Chi tiết sản phẩm: </strong></p>
						<ul><li><p>Sản phẩm 100% cotton - định lượng 210gsm.</p></li><li><p>Form áo cơ bản.</p></li><li><p>Hình được in ở ngực trái&nbsp;với công nghệ in kỹ thuật số.</p></li></ul>
						<p><strong>Quy định về đổi sản phẩm:</strong></p>
						<ul><li><p>Chỉ được đổi sản phẩm duy nhất một lần.</p></li><li><p>Thời hạn đổi sản phẩm là 7 ngày, kể từ khi nhận hàng.</p></li><li><p>Sản phẩm đổi phải kèm nguyên hộp, nhãn mác.</p></li><li><p>Sản phẩm đổi không có dấu hiệu đã qua sử dụng, không giặt tẩy, bám bẩn, biến dạng.</p></li></ul>		   
						<p><strong>Hướng dẫn chọn size:</strong></p>			   
						<p><img src="./img/huongdanchonsize.png"></p>			   
						<p>Bạn hãy tìm một chiếc áo đang mặc thoải mái nhất của mình, đo và so sánh với bảng phía trên để tìm ra size áo phù hợp nhất với mình nhé.</p>	
						<p>Một mẹo nhỏ dành cho những bạn có số đo ở giữa hai size thì hãy chọn size lớn hơn để mặc nha ^^.</p>		   
					</div>
				</div>
			</div>
		</div>
	</section>								   
	<?php
		include_once("./footer.php");
	?>
</body>
</html>