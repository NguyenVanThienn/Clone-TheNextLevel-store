<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<link rel="stylesheet" href="./fonts/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./assets/base.css">
    <link rel="stylesheet" href="./assets/style.css">
</head>
    <script>
		function thongbao(){
			return confirm("Bạn có chắc chắn muốn xóa ?")
		}
		</script>
<body style="background-image: url(./img/bg.png);" class=" bg-transparent bg-index">
<?php
	include_once('./connect_php.php');
    include_once("./controlad.php");
?>
<div class=" jumbotron d-flex justify-content-between bg-transparent">
    <center>
        <h2>Xin chao admin <?php echo $_SESSION['lastname_ad'] . " " . $_SESSION['firstname_ad'] ?></h2>
    </center>
    <div class=" d-flex">

        <center>
            <a href="index.php" style="color: #000; text-decoration:none; float:right;margin-right:15px">Trang Chủ</a>
        </center>
        <a href="logout.php" class=" text-decoration-none text-dark float-right">LOGOUT</a>
    </div>
</div>
<section class="section">
    <section class="section section-product">
        <div class=" container-fluid card py-2 border-0">
        <div class="row">
  <div class="col-2 col-md-2 ">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">PRODUCT</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">USER </a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">IMG_SLIDE AND CONTACT</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">COMMENT</a>

      
    </div>
  </div>
  <div class="col-10 col-md-10">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    <?php
                        if(isset($_POST['search']))
                        {
                            include_once("connect_php.php");
                            $limit = 10;
                            if(isset($_GET['page'])){

                                $page = $_GET['page'];
                            }else{
                                $page = 1;
                            }
                            $offset = ($page - 1) * $limit;
                            $valuetoSearch = $_POST['valuetoSearch'];
                            $sql = "SELECT * from producttb WHERE product_name LIKE '%".$valuetoSearch."%' OR type LIKE '%".$valuetoSearch."%' OR product_code LIKE '%".$valuetoSearch."%' OR id LIKE '%".$valuetoSearch."%'";
                            $rs = mysqli_query($conn,$sql);
                        }
                        else{
                            include_once("connect_php.php");
                            $limit = 10;
                            if(isset($_GET['page'])){

                                $page = $_GET['page'];
                            }else{
                                $page = 1;
                            }
                            $offset = ($page - 1) * $limit;
                            $sql =" select * from producttb LIMIT {$offset},{$limit}";
                            $rs = mysqli_query($conn, $sql);
                        }
                        ?>
                    <form id="form1" name="form1" method="post" action="adwelcome.php"  class="">
                    Nhap ten sản phẩm can tim:
                    <label for="thongtin"></label>
                    <input type="text" name="valuetoSearch" id="thongtin" />
                    <input type="submit" name="search" id="button" value="Tìm kiếm"  />
                    <input type="submit" name="reset" value="Reload">
                        
                <table border="1" style="width: 100%; text-align: center;border-collapse: collapse;margin-top:20px;">
                            <th style="border: none;"><h1>PRODUCT</h1></th>
                            <tr style="background-color: #ccc;" >
                                <th style="width: 5%;">ID</th>
                                <th style="width: 5%;">Product_Code</th>
                                <th>Product_name</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Type</th>
                                <th>Edit</th> 
                                <th>Delete</th>
                                <th style="width: 50px;"><a href="addproduct.php"><i class="far fa-plus-square">Add Product</i></a></th>                              
                            </tr>                           
                  
                        <?php
                            while($row = mysqli_fetch_array($rs)){                                                          
                        ?>
                        <tr>
                            <td><?=$row['id']?></td>
                            <td><?=$row['product_code']?></td>
                            <td><?=$row['product_name']?></td>
                            <td><?=$row['product_price']?></td>
                            <td><img src="<?=$row['product_img']?>" width="50px" alt=""></td>
                            <td><?=$row['type']?></td>
                            <td><a href="updateproduct.php?id=<?=$row[0]?>"><img src="./img/edit.png" alt="" style="width: 25px;"></a></td>
                            <td><a href="deleteproduct.php?id=<?=$row[0]?>" onclick="return thongbao()"><img src="./img/trash-bin-symbol_318-10194.jpg" alt="" style="width: 25px;"></a></td>
                         
                        </tr>
                        <?php
                            }
                           
                            ?>
                           
                           
                         
                            <!-- <li class="active"><a href="">1</a></li>
                            <li><a href=""></a>2</li>
                            <li><a href=""></a>3</li> -->
                
                </table>
                <?php
                            if(!(isset($_POST['search']))){
                                $sql1 = "SELECT * FROM producttb";
                                $result1 = mysqli_query($conn,$sql1);
                                if(mysqli_num_rows($result1) > 0){
                                    $total_records = mysqli_num_rows($result1);
                                    
                                    $total_page = ceil($total_records / $limit);
    
                                    echo ' <ul class="pagination admin-pagination float-right mt-3">';
                                    for($i = 1; $i <= $total_page;$i++){
                                        if($i == $page){
                                            $active = "active";
                                        }else{
                                            $active = "";
                                        }
                                        echo ' <li class="'.$active.' page-item"><a class="page-link" href="adwelcome.php?page='.$i.'">'.$i.'</a></li>';
                                    }
                                    echo ' </ul>';
                                }

                               
                            }
                  
                            ?>
                </form>
                
               
       
      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                    <?php
                        if(isset($_POST['search1']))
                        {
                            include_once("connect_php.php");
                            $valuetoSearch = $_POST['valuetoSearch1'];
                            $sql = "SELECT * from tbuser WHERE (Email LIKE '%".$valuetoSearch."%' OR (Firstname AND Lastname) LIKE '%".$valuetoSearch."%') AND type=''";
                            $rs = mysqli_query($conn,$sql);
                        }
                        else{
                            include_once("connect_php.php");
                            $sql =" select * from tbuser WHERE type = ''";
                            $rs = mysqli_query($conn, $sql);
                        }
                        ?>
                    <form id="form1" name="form1" method="post" action="adwelcome.php"  class="">
                    Nhap ten tai khoan can tim:
                    <label for="thongtin"></label>
                    <input type="text" name="valuetoSearch1" id="thongtin"  />
                    <input type="submit" name="search1" id="button" value="Tìm kiếm" /> 
       
        <table border="1" style=" text-align: center;border-collapse: collapse;display:flex;margin-top:20px;">
                            <th style="border: none;"><h1>USER</h1></th>
                            <tr style="background-color: #ccc;" >
                                <th>ID</th>
                                <th>FirstName</th>
                                <th>Lastname</th>
                                <th>Gender</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            
                        <?php                       
                            while($row = mysqli_fetch_array($rs)){                                                          
                        ?>
                        <tr>
                            <td><?=$row['ID']?></td>
                            <td><?=$row['Firstname']?></td>
                            <td><?=$row['Lastname']?></td>                     
                            <td><?=$row['Gender']?></td>
                            <td><?=$row['Phone']?></td>
                            <td><?=$row['Email']?></td>
                            <td><a href="updateuser.php?id=<?=$row[0]?>"><img src="./img/edit.png" alt="" style="width: 25px;"></a></td>
                            <td><a href="deleteuser.php?id=<?=$row[0]?>" onclick="return thongbao()"><img src="./img/trash-bin-symbol_318-10194.jpg" alt="" style="width: 25px;"></a></td>
                        </tr>
                        <?php
                            }
                            ?>
                </table>
            </form>
      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                    <?php
                        if(isset($_POST['search2']))
                        {
                            include_once("connect_php.php");
                            $valuetoSearch = $_POST['valuetoSearch2'];
                            $sql = "SELECT * from contact WHERE ct_Email LIKE '%".$valuetoSearch."%' OR  ct_Fullname LIKE '%".$valuetoSearch."%' OR  ct_Phone LIKE '%".$valuetoSearch."%'";
                            $rs = mysqli_query($conn,$sql);
                        }
                        else{
                            include_once("connect_php.php");
                            $sql =" select * from contact";
                            $rs = mysqli_query($conn, $sql);
                        }
                    ?>
                    <form id="form3" name="form3" method="post" action="adwelcome.php"  class="">
                    Nhap ten tai khoan can tim:
                    <label for="thongtin"></label>
                    <input type="text" name="valuetoSearch2" id="thongtin"  />
                    <input type="submit" name="search2" id="button" value="Tìm kiếm" /> 
        <table border="1" class="" style="width: 100%; text-align: center;border-collapse: collapse;margin-top:20px;">
                            <tr style="border: none;"><h1>CONTACT</h1></tr>
                            <tr style="background-color: #ccc;" >
                                <th style="width: 5%;">ID</th>
                                <th style="width: 10%;">Fullname</th>
                                <th style="width: 15%;">Email</th>
                                <th style="width: 10%;">Phone</th>
                                <th style="width: 45%;">Text</th>
                                <th style="width: 10%;">Time</th>
                                <th style="width: 5%;">Delete</th>
                               
                            </tr>
                            
                        <?php


                            while($row = mysqli_fetch_row($rs)){                                                          
                        ?>
                        <tr>
                            <td><?=$row[0]?></td>
                            <td><?=$row[1]?></td>
                            <td><?=$row[2]?></td>
                            <td><?=$row[3]?></td>
                            <td><?=$row[4]?></td>
                            <td><?= $row[5]?></td>
                            <td><a href="deleteconntact.php?id=<?=$row[0]?>" onclick="return thongbao()"><img src="./img/trash-bin-symbol_318-10194.jpg" alt="" style="width: 25px;"></a></td>
                        </tr>
                        <?php
                            }
                            ?>
                </table> 
                        </form>
        <table border="1" style="width: 40%; text-align: center;border-collapse: collapse;margin-top:20px;">
                            <th style="border: none;"><h1>IMG SLIDER</h1></th>
                            <tr style="background-color: #ccc;" >
                                <th style="width: 50px;">ID</th>
                                <th style="width: 200px;">img</th>      
                                <th style="width: 100px;">Delete</th>
                            </tr>
                            
                        <?php
                            include_once("connect_php.php");
                            $sql =" select * from image";
                            $rs = mysqli_query($conn, $sql);

                            while($row = mysqli_fetch_row($rs)){                                                          
                        ?>
                        <tr>
                            <td><?=$row[0]?></td>
                            <td><img class=" img-fluid" src="<?=$row[1]?>" alt=""></td>
                            
                            <td><a href="deleteimgslider.php?id=<?=$row[0]?>" onclick="return thongbao()"><img src="./img/trash-bin-symbol_318-10194.jpg" alt="" style="width: 25px;"></a></td>
                         

                        </tr>
                        <?php
                            }
                            ?>
                     </table>                        
        <div class="row justify-content-center " style="width: 900px;">
                    <div class="col-lg-4 bg-dark rounded px-4">
                        <h4 class="text-center bg-dark text-light p-1">Select image to Upload</h4>
                        <form action="addslider.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="file" name="image" value="" class="form-control p-1" require>                     
                            </div>
                            <div class="form-group">
                                <input type="submit" name="upload" class="btn btn-warning btn-block" value="Upload Image">
                            </div>
                            <div class="form-group">
                                <h5 class="text-center text-light"></h5>
                            </div>
                        </form>
                    </div>
                    
        </div>
      </div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">    
                    <?php
                        if(isset($_POST['search3']))
                        {
                            include_once("connect_php.php");
                            $valuetoSearch = $_POST['valuetoSearch3'];
                            $sql = "SELECT * from comments WHERE (email LIKE '%".$valuetoSearch."%' OR FullName LIKE '%".$valuetoSearch."%' OR productid LIKE '%".$valuetoSearch."%')";
                            $rs = mysqli_query($conn,$sql);
                        }
                        else{
                            include_once("connect_php.php");
                            $sql =" select * from comments";
                            $rs = mysqli_query($conn, $sql);
                        }
                        ?>
                    <form id="form1" name="form1" method="post" action="adwelcome.php"  class="">
                    Nhap ten tai khoan can tim:
                    <label for="thongtin"></label>
                    <input type="text" name="valuetoSearch3" id="thongtin"  />
                    <input type="submit" name="search3" id="button" value="Tìm kiếm" /> 
       
            <table border="1" style=" width:100%; text-align: center;border-collapse: collapse;margin-top:20px;">
                            <th style="border: none;"><h1>USER</h1></th>
                            <tr style="background-color: #ccc;">
                                <th style="width: 5%;">ID</th>
                                <th style="width: 12%;">FullName</th>
                                <th style="width: 20%;">Email</th>
                                <th style="width: 5%;">ProductID</th>
                                <th>Content</th>
                                <th style="width: 10%;">Date</th>
                                <th style="width: 5%;">Delete</th>
                            </tr>
                            
                        <?php                       
                            while($row = mysqli_fetch_array($rs)){                                                          
                        ?>
                        <tr>
                            <td><?=$row['id']?></td>
                            <td><?=$row['FullName']?></td>
                            <td><?=$row['email']?></td>
                            <td><?=$row['productid']?></td>
                            <td><?=$row['content']?></td>
                            <td><?=$row['date']?></td>
                            <td><a href="deletecomment.php?id=<?=$row[0]?>" onclick="return thongbao()"><img src="./img/trash-bin-symbol_318-10194.jpg" alt="" style="width: 25px;"></a></td>
                        </tr>
                        <?php
                            }
                            ?>
                    </table>
                 </form>
      </div>
     
    </div>
  </div>
</div>          
               
                
                     
            
      
    </section>
</section>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>