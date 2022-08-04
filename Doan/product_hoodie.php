<?php 
    session_start();
    require_once('./productdb.php');
    require_once('./component.php');
    if(isset($_POST['add'])){
        // print_r($_POST['product_id']);
        if(isset($_SESSION['cart'])){

            $item_array_id =  array_column($_SESSION['cart'], "product_id");
            
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
	<title>Áo hoodie mới nhất</title>

</head>
<body>
	<?php
	include_once("./connect_php.php");
	include_once("./header.php");
	include_once("./subheader.php");

	?>
<section class="section-4">
    <section class="section-product_new section">
                <div class="container py-2 card-border-0">
				<div class="title-item d-flex align-items-center mb-3">
									<?php
									if(isset($_POST['vsearch']))
									{
										include_once("connect_php.php");
										$toSearch = $_POST['hsearch'];
										$sql = "SELECT * from producttb WHERE product_name  LIKE '%".$toSearch."%' OR type LIKE '%".$toSearch."%' ";
										$rs = mysqli_query($conn,$sql);
										$rows = mysqli_num_rows($rs);
										if($rows != 0){

											echo '<h2 class="heading_bar-title"><p>Có &nbsp</p></h2>'. '<h2 class="heading_bar-title"><p> ' . mysqli_num_rows($rs) . ' </p></h2>' . '<h2 class="heading_bar-title"><p>&nbsp Sản phẩm phù hợp</p></h2>';
										}
										else{
											echo '<h2 class="heading_bar-title"><p>Không có sản phẩm phù hợp</p></h2>';
										}
									}
									else{
										include_once("connect_php.php");
										$sql =" select * from producttb WHERE type LIKE '%hoodie%'";
										$rs = mysqli_query($conn, $sql);
										echo '
										<h2 class="heading_bar-title">
                                    	<p class="link-title">ÁO  HOODIE MỚI NHẤT</p>
                                		</h2>
										';
										}
                        			?>
                                
                            </div>
                  <div class="row">		                         
									
                                       <?php								
                                       while($row = mysqli_fetch_array($rs)){
                                                     ?>   
												 
										<div class=" col-md-3">
											<div class="item_product_main">
													
												<form action="product.php" method="POST">
													<div class="card border-0">
														<div class="item_product_img">
															<img src="<?= $row['product_img'] ?>" alt="" class=" img-fluid">
														</div>
															<div class="label_product-sale ">
																<div class="label_wrapper-sale"> -14% </div>
															</div>
														<div class="product-action">
																<div class="group-action">
																	<button type="sumbit" class="btn btn-warning" name="add"><i class="fas fa-shopping-cart"></i></button>
																	<a href="viewitem.php?id=<?= $row[0]; ?>" class="btn btn-warning view-btn"><i class="primary far fa-eye"></i></a>	
																	<input type='hidden' name='product_id' value='<?=$row['id']?>'>
																
																</div>
														</div>                                     
													</div>
																														
														<div class="product_info">
															<div class="card-body p-2">
																<h6 class="card-title"><?= $row['product_name'] ?></h6>
																<h6>
																<span class="price red-color">$<?= $row['product_price'] ?></span>
																<small><s>$17</s></small>                                          
																</h6>
															</div>
														</div>											
													</form>
												</div>
											</div>
									<?php
                                       }
                                       ?>                                              
									</div>                           
                </div>                                    
    </section>
</section>

	<?php
	include_once("./footer.php");
	?>
	<script src="./ckeditor/ckeditor.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>