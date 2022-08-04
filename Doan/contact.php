
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact</title>
</head>
<body>
	<?php
	session_start();
	include_once("./connect_php.php");
	include_once("./link.php");
	include_once("./header.php");
	include_once("./subheader.php");

	?>
	<section class="contact-pg section">
		<div class="container card py-3">
			<div class="row">
				<div class="col-lg-6 col-6">
					<div class="left-contact px-2">
						<h1 class="title-page mb-3">The Next Level</h1>
							<div class="single-contact">
								<i class="fa fa-map-marker-alt"></i>
								<div class="content">
									Địa chỉ: 
									<span>282 Nguyễn Huy Tưởng, Thanh Xuân, Hà Nội</span>
								</div>
							</div>
							<div class="single-contact">
								<i class="fa fa-mobile-alt"></i>
								<div class="content">
									Số điện thoại
									<a href="tel:0989948814" title="0989948814" style="color: var(--primary1);" class="link">0989948814</a>
								</div>
							</div>
							<div class="single-contact">
								<i class="fa fa-envelope"></i>
								<div class="content">
									Email: 
									<a href="mailto:thenextlevelvn@gmail.com" title="thenextlevelvn@gmail.com" style="color: var(--primary1);"  class="link">thenextlevelvn@gmail.com</a>
								</div>
							</div>
					</div>
					<div class="pt-3 mt-3 border-top">
						<h3 class=" text-uppercase ml-2">Liên hệ với chúng tôi</h3>
						<form action="contact_form.php" method="POST">
									<div class="form-group">									
										<div class="col-sm-12">
										<input type="text" name="fullname" class="form-control" id="fullname" placeholder="Enter your Fullname*" required>
										</div>
									</div>
									<?php
									if(isset($_SESSION['email_user'])){
											$email = $_SESSION['email_user'];
										echo '
										<div class="form-group">							
											<div class="col-sm-12">
											<input type="email" name="email" value='.$email.' class="form-control" id="email" placeholder="Enter email*" required>
											</div>
										</div>
										';
									}
									else{
										echo '
										<div class="form-group">							
											<div class="col-sm-12">
												<input type="email" name="email" class="form-control" id="email" placeholder="Enter email*" required>
											</div>
										</div>
										';
									}
									 ?>								
									<div class="form-group">							
										<div class="col-sm-12">
										<input type="text" name="phone" class="form-control" id="phone" placeholder="Enter your phone*" required>
										</div>
									</div>
									<div class="form-group">							
										<div class="col-sm-12">
										<textarea name="comment" id="" class=" form-control" rows="8" placeholder="Message*" required></textarea>
										</div>
									</div>
									<div class="form-group"> 
										<div class="col-sm-offset-2 col-sm-10 m-auto">
										<input type="submit" name="yes"  class="btn btn-warning w-100 text-center " value="Send"></input>
										</div>
									</div>
						</form>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-6 ">
					<img src="./img/contactimg.png" style="height: 70%; margin-top:15%;" alt="" class=" img-fluid">
				</div>
			</div>
		</div>
	</section>
	<?php
	include_once("./footer.php");
	
	?>

</body>
</html>