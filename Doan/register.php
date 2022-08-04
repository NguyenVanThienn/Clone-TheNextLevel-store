
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
  <title>Register</title>
</head>
<body style="background-color: #f8f8f8;">
    <?php 
      require_once('./header.php');
      require_once('./subheader.php');
    ?>



<script language="javascript">
            function check_input1() {
        if (document.form1.password.value != document.form1.repassword.value) {
          alert("Mật khẩu nhập không giống nhau");
          document.form1.password.focus();
          return false;
      }
      
          }
</script>
    <section class="section" style="background-color: #f8f8f8;">
      <div id="frmRegistration" class="container card border-0 " style="border-radius: 10px;">
        <div class="row justify-content-center">
                <div class="col-12 col-md-12">
                    <div class="title">
                    <h1 class=" ml-3">Đăng ký tài khoản</h1>
                    <p class=" ml-3">Bạn đã có tài khoản? Đăng nhập <a href="login.php" style="color: #000;">tại đây.</a></p>
                    </div>
                    <div class="row">
                      <div class="col-12 col-md-6  offset-md-3">
                          <div class="page-register">
                              <h5 class="text-center text-uppercase">Thông tin cá nhân</h5>
                            <form class="form-horizontal col-md-12" name="form1" id="form1"  action="register_code.php" method="POST" onsubmit="return check_input1()">                    
                              <div class="form-group">
                                <label class="control-label col-sm-5" for="firstname"><strong>First Name<span class="red-color">*</span></strong></label>
                                <div class="col-sm-12">
                                  <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter Firstname" required>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-sm-5" for="lastname"><strong>Last Name<span class="red-color">*</strong></label>
                                <div class="col-sm-12">
                                  <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter Lastname" required>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-sm-5" for="lastname"><strong>Gender<span class="red-color">*</strong></label>
                                <div class="col-sm-12">
                                  <label class="radio-inline mx-2"><input type="radio" name="gender" value="Male" required>Male</label>
                                <label class="radio-inline mx-2"><input type="radio" name="gender" value="Female" required>Female</label>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-sm-5" for="email"><strong>Phone<span class="red-color">*</strong></label>
                                <div class="col-sm-12">
                                  <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Your phone" required>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-sm-5" for="email"><strong>Email<span class="red-color">*</strong></label>
                                <div class="col-sm-12">
                                  <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-sm-5" for="pwd"><strong>Password<span class="red-color">*</strong></label>
                                <div class="col-sm-12"> 
                                  <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password" required>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-sm-5" for="pwd"><strong>Password<span class="red-color">*</strong></label>
                                <div class="col-sm-12"> 
                                  <input type="password" name="repassword" class="form-control" id="pwd" placeholder="Confirm password" required>
                                </div>
                              </div>
                         
                              <div class="form-group"> 
                                <div class=" col-sm-12">
                                  <input type="submit" name="create"  class="btn btn-warning w-100" value="Register"></input>
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
  require_once('./footer.php')
?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>