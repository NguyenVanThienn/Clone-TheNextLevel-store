<header class="header header-menu bg-white">
        <div class="mid-header w-100 d-flex align-items-center">
            <div class="container px-md-0">
                <div class="row align-items-center">
                    <div class="col-4 col-lg-2">
                        <a href="index.php" class="logo-wrapper">
                           <img class="logo-img" src="./img/logo_medium.png" alt="">
                        </a>
                    </div>
                    <div class="col-12 col-xl-5 col-lg-4" id="search-hd">
                        <form action="product.php" method="POST" class="d-flex border-rds input-group search-bar custom" role="search">
                            <input type="text" name="hsearch" class="input-group-field auto-search form-control" placeholder="Tìm kiếm sản phẩm..." required>
                      
                            <button type="submit" name ="vsearch" class="btn-header-search btn icon-fallback-text h-100" value="">
                                
                                <i class="icon-btn fas fa-search"></i>
                            </button>
                           
                        </form>
                    </div>
                    <div class="col-12 col-xl-5 col-lg-6">
                        <ul class="header-right d-flex align-items center mb-0 pl-0">
                            <li class="item-header media d-lg-flex d-none align-items-center">
                                <img class="contact-header" src="./img/phone.webp" alt="">
                                <div class="d-flex flex-column d-md-flex media-body">
                                    <span>Hỗ trợ khách hàng</span>
                                    <a class="link-log" href="tel:0961814944" title="0961814944">0961814944</a>
                                </div>
                            </li>
                                <li class="item-header pr-4 pl-4 pr-md-3 pl-md-3 media d-lg-flex d-none align-items-center">
                                    <img class="contact-header" src="./img/account.png" alt="">
                                    <div class="d-flex flex-column d-md-flex media-body ">
                                      
                                    <?php
                                    $baseURL = '';                                                            
                                    include_once("./connect_php.php");
                                     if(isset($_SESSION['email'])){
                                        $email = $_SESSION['email'];
                                        echo '
                                        <div class="d-flex">  
                                        <span class="font-weight-bold">'.$_SESSION['lastname_ad'].'</span>                              
                                        <span class="font-weight-bold flex-wrap" > <span>&nbsp</span>'.$_SESSION['firstname_ad'].'</span>
                                        
                                        </div>
                                        <a class="link-log" href="./logout.php">Đăng xuất</a>
                                        ';
                                    }
                                    elseif(isset($_SESSION['email_user']))
                                    {
                                       
                                        $email = $_SESSION['email_user'];
                                            $currentTime = time();
                                            if($currentTime > $_SESSION['expire']){
                                                header("Location: logout.php");
                                            }       
                                            else{
                                                echo '
                                                <div class="d-flex">    
                                                <span class="font-weight-bold">'.$_SESSION['lastname'].'</span>                            
                                                <span class="font-weight-bold flex-wrap" ><span>&nbsp</span>'.$_SESSION['firstname'].'</span>
                                              
                                                </div>
                                                <a class="link-log" href="./logout.php">Đăng xuất</a>
                                                ';
                                            }                                                                                                                            
                                    }
                                   
                                    else{
                                        echo "<a class=\"link-log font-weight-bold\" href=\"./login.php\">Đăng nhập</a>";
                                        echo "<a class=\"link-log\" href=\"./register.php\">Đăng ký</a>";
                                    }                       
                                    ?>
                                    <!-- <a class="link-log" href="./logout.php">Đăng xuất</a> -->
                                   
                                   

                                       
                                        
                                        
                                        
                                        
                                    </div>
                                </li>
                               <li class="cart-list align-items-center d-flex">
                                   <div class="cart-item d-flex align-items-center">
                                       <a class="link-cart"  href="cart.php">
                                       <i class="cart-icon fas fa-shopping-bag"></i>
                                       <span class="mx-1 d-md-block d-none">Giỏ hàng</span>
				       <?php 
						if(isset($_SESSION['cart'])){
							$count = count($_SESSION['cart']);
							echo "<span id=\"cart-count\" class= \"bg-warning text-dark number-item\">$count</span>";
						}else{
							echo "<span id=\"cart-count\" class= \"bg-warning text-dark number-item\">0</span>";
						}
				       ?>
                                       </a>                          
                                   </div>
                               </li>
                        </ul>
                     </div>                                        
                </div>
            </div>
        </div>
    </header>
    