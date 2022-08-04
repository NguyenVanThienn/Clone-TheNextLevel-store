
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="./fonts/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/base.css">
    <link rel="stylesheet" href="./assets/style.css">
</head>
		
<body style="background-color: #f8f8f8;">

	<?php
  require_once('./header.php');
  require_once('./subheader.php')
	?>
   <script language="javascript">
            function check_input() {
      if (document.form1.email.value == "") {
          alert("Bạn phải nhập email");
          document.form1.email.focus();
          return false;
      }
   
      if (document.form1.password.value == "") {
          alert("Bạn phải nhập mật khau");
          document.form1.password.focus();
          return false;
      }
 
      // if (document.form1.reemail.value != document.form1.email.value) {
      //     alert("Email nhập không giống nhau");
      //     document.form1.email.focus();
      //     return false;
      // }
      return true;
          }
      </script>
      <section class="section">
        <div id="frmRegistration" class="container card border-0 py-4" style="border-radius: 10px;">
          <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                    <div class="title">
                    <h1 class=" ml-3">Đăng nhập</h1>
                    <p class=" ml-3">Bạn chưa có tài khoản? Đăng ký <a href="register.php" style="color: #000;">tại đây.</a></p>
                    </div>
                    <div class="row">

                      <div class="col-12 col-md-6 offset-md-3">
                            <div class="page-login">
                              <form class="form-horizontal" name="form1" id="form1" method="POST" action="login_code.php" onsubmit="return check_input()">
                            
                                
                                <div class="form-group">
                                  <label class="control-label col-sm-4" for="email">Email:</label>
                                  <div class="col-sm-12">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-sm-4" for="pwd">Password:</label>
                                  <div class="col-sm-12"> 
                                    <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password">
                                  </div>
                                </div>
                                <div class="form-group"> 
                                  <div class="col-sm-12">
                                    <button type="submit"   name="login" class="btn btn-warning w-100">Login</button>
                                  </div>
                                </div>
                              </form>
                            </div>
                      </div>
                    </div>
            </div>
          </div>
      </div>

      </section>


	<?php
	require_once('./footer.php');
	?>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>