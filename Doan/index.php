<?php 
    session_start();
    include_once('./productdb.php');
    include_once('./component.php');
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
    <title>The Next Level - Sự lựa chọn của game thủ đích thực</title>
    <link rel="stylesheet" href="./fonts/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/base.css">
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>

<?php
    include('./header.php');
    include('./subheader.php');
    include("./section0.php");
?>
<section class="section section-2">
    <section class="section_brand section">
        <div class="container px-md-0">
            <div class="row d-flex text-center flex-nowrap slick-slider">
                    <div aria-live="polite" class="slick-list">
                            <div class=" d-flex slick-track items">
                                <div class="item mt-2 slick-slide">
                                    <a class="item-link" href="">
                                        <img src="./img/brand_1.jpg" alt="" class="img-fluid slick-img">
                                    </a>
                                    <h4 class="icon-game">Wibu </h4>
                                </div>
                                <div class="item mt-2 slick-slide">
                                    <a class="item-link" href="">
                                        <img src="./img/brand_2.jpg" alt="" class="img-fluid slick-img">
                                    </a>
                                    <h4 class="icon-game">Cyperpunk 2077</h4>
                                </div>
                                <div class="item mt-2 slick-slide">
                                    <a class="item-link" href="">
                                        <img src="./img/brand_3.jpg" alt="" class="img-fluid slick-img">
                                    </a>
                                    <h4 class="icon-game">LMHT</h4>
                                </div>
                                <div class="item mt-2 slick-slide">
                                    <a class="item-link" href="">
                                        <img src="./img/brand_4.jpg" alt="" class="img-fluid slick-img">
                                    </a>
                                    <h4 class="icon-game">Dark Souls</h4>
                                </div>
                                <div class="item mt-2 slick-slide">
                                    <a class="item-link" href="">
                                        <img src="./img/brand_5.jpg" alt="" class="img-fluid slick-img">
                                    </a>
                                    <h4 class="icon-game">The Witcher</h4>
                                </div>
                                <div class="item mt-2 slick-slide">
                                    <a class="item-link" href="">
                                        <img src="./img/brand_6.jpg" alt="" class="img-fluid slick-img">
                                    </a>
                                    <h4 class="icon-game">Pokemon</h4>
                                </div>
                                <div class="item mt-2 slick-slide">
                                    <a class="item-link" href="">
                                        <img src="./img/brand_7.jpg" alt="" class="img-fluid slick-img">
                                    </a>
                                    <h4 class="icon-game">Hollow Knight</h4>
                                </div>
                                <div class="item mt-2 slick-slide">
                                    <a class="item-link" href="">
                                        <img src="./img/brand_8.jpg" alt="" class="img-fluid slick-img">
                                    </a>
                                    <h4 class="icon-game">Animal Crossing</h4>
                                </div>

                            </div>
                    </div>
            </div>
        </div>
    </section>
</section>
<section class="section-3">
        <section class="section-product_new section">
                <div class="container py-2 card border-0">
                    <div class="title-item d-flex justify-content-between align-items-center mb-3">
                        <h2 class="heading_bar-title">
                            <a href="" class="link-title">NHỮNG MẪU ÁO MỚI NHẤT</a>
                        </h2>
                    </div>
                    <div class="slick-list-1 slick-slider">
                       <?php                       
                       $result = getData();
                       while($row = mysqli_fetch_array($result)){
                           component($row['product_name'],$row['product_price'],$row['product_img'],$row['id']);                                                            
                       }
                       
                       ?>
                                        
                    </div>
                    <div class="col-12 text-center my-3">
                            <a href="product_new.php" class="btn btn-main rounded-pill px-4">
                                Xem tất cả
                                <i class="fas fa-chevron-right"></i>
                            </a>
                    </div>
                </div>
        </section>
</section>
<section class="section-4">
        <section class="section-product_new section">
                <div class="container py-2 card-border-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="title-item d-flex justify-content-between align-items-center mb-3">
                                <h2 class="heading_bar-title">
                                    <a href="" class="link-title">ÁO WIBU</a>
                                </h2>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-8">
                                    <div class="slick-list-2 slick-slider">
                                       <?php                       
                                      $result = getData1();
                                       while($row = mysqli_fetch_array($result)){
                                           component($row['product_name'],$row['product_price'],$row['product_img'],$row['id']);                                 
                                       }
                                       ?>                 
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 align-items-center d-flex mb-3 right order-1">
                                    <a href="" title="ÁO WIBU">
                                        <img src="./img_item/logowibu.jpg" alt="ÁO WIBU" class="lazyload img-fluid loaded">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center my-3">
                                <a href="product_wibu.php" class="btn btn-main rounded-pill px-4">
                                    Xem tất cả
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                        </div>
                    </div>
                </div>
        </section>
</section>
<section class="section-5">
        <section class="section-product_new section">
                <div class="container py-2 card border-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="title-item d-flex justify-content-between align-items-center mb-3">
                                <h2 class="heading_bar-title">
                                    <a href="" class="link-title">ÁO GAME</a>
                                </h2>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-4 float-left d-flex align-items-center">
                                    <a href="" title="ÁO WIBU">
                                        <img src="./img_item/logo_game.jpg" alt="ÁO WIBU" class="lazyload img-fluid loaded">
                                    </a>
                                </div>
                                <div class="col-12 col-md-8">
                                    <div class="slick-list-2 slick-slider">
                                       <?php                       
                                      $result = getData2();
                                       while($row = mysqli_fetch_array($result)){
                                           component($row['product_name'],$row['product_price'],$row['product_img'],$row['id']);                                 
                                       }
                                       ?>                 
                                    </div>
                                </div>
                             
                              
                            </div>
                        </div>
                        <div class="col-12 text-center my-3">
                                <a href="product_game.php" class="btn btn-main rounded-pill px-4">
                                    Xem tất cả
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                        </div>
                    </div>
                </div>
        </section>
</section>
<section class="section section-6">
    <section class="section">
             <div class="container px-md-0">
                 <div class="row text-center justify-content-md-center justify-content-start">
                     <div class="item col-10 col-md-4 mt-2">
                         <a href="" title="Console">
                             <img src="./img_item/consolegame.jpg" alt="" class="img-fluid">
                         </a>
                     </div>
                     <div class="item col-10 col-md-4 mt-2">
                         <a href="" title="PhuKien">
                             <img src="./img_item/phukiengame.jpg" alt="" class="img-fluid">
                         </a>
                     </div>
                     <div class="item col-10 col-md-4 mt-2">
                         <a href="product.php" title="Ao">
                             <img src="./img_item/aogame.jpg" alt="" class="img-fluid">
                         </a>
                     </div>
                 </div>
             </div>                          
    </section>
</section>
<section class="section section-8">
    <section class="section section-product">
        <div class="container card py-2 border-0">
            <div class="title-item heading-bar e-tabs d-flex justify-content-between align-item-center flex-wrap mb-5">
                        <h2 class="heading_bar-title">
                            <a href="" class="link-title">Các dòng áo khác tại The Next Level</a>
                        </h2>
                        <ul class="nav tabs nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link custom-nav active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" style="color: #000;" aria-selected="true">Áo dài tay</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link custom-nav" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" style="color: #000;" aria-selected="false">Sweater</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link custom-nav" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" style="color: #000;" aria-selected="false">Hoodie</a>
                            </li>
                        </ul>
            </div>
            <div class="tab-content " id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="container">
                        <div class="row">
                                   
                                <div class="col-12 ">
                                    <div class="row">
                                    <?php                       
                                        $result = getData3();
                                        while($row = mysqli_fetch_array($result)){
                                            component1($row['product_name'],$row['product_price'],$row['product_img'],$row['id']);                                 
                                        }
                                    ?>   
                                    </div>
                                </div>
                                <div class="col-12  text-center my-3">
                                <a href="product_longhand.php" class="btn btn-main rounded-pill px-4">
                                        Xem tất cả
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>              
                               
                                    
                        </div>
                    </div>
                    
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="container">
                        <div class="row">
                                   

                        <div class="col-12 ">
                                    <div class="row">
                                    <?php                       
                                        $result = getData4();
                                        while($row = mysqli_fetch_array($result)){
                                            component1($row['product_name'],$row['product_price'],$row['product_img'],$row['id']);                                 
                                        }
                                    ?>   
                                    </div>
                                </div>
                                <div class="col-12  text-center my-3">
                                <a href="product_sweater.php" class="btn btn-main rounded-pill px-4">
                                        Xem tất cả
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>                        
                                    
                        </div>
                    </div>     
                  
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                      
                <div class="container">
                        <div class="row">
                                   

                        <div class="col-12 ">
                                    <div class="row">
                                    <?php                       
                                        $result = getData5();
                                        while($row = mysqli_fetch_array($result)){
                                            component1($row['product_name'],$row['product_price'],$row['product_img'],$row['id']);                                 
                                        }
                                    ?>   
                                    </div>
                                </div>
                                <div class="col-12  text-center my-3">
                                <a href="product_hoodie.php" class="btn btn-main rounded-pill px-4">
                                        Xem tất cả
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>                      
                                    
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
</section>

<?php 
   include_once('footer.php');
   
 ?>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- <script>
        $(document).ready(function() {
    $(document).on('submit', function() {
      // do your things
      return false;
     });
});
    </script> -->
    <script>
//Get the button
var mybutton = document.getElementById("back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
    <script type="text/javascript">
   $(document).ready(function(){
    $('.slick-list-1').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 4
    });
    });
    </script>
     <script type="text/javascript">
   $(document).ready(function(){
    $('.slick-list-2').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3
    });
    });
    </script>
     <script type="text/javascript">
   $(document).ready(function(){
    $('.slick-list-3').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 5
    });
    });
    </script>
</body>
</html>

