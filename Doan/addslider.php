<?php
  $msg = "";
  include_once("./connect_php.php");

  // If upload button is clicked ...
 
 

  if (isset($_POST['upload'])) {
    $filename = $_FILES["image"]["name"];
    $folder = 'image/'.$filename;
    $img = $_FILES['image'];
    $target = './image/' . basename($img['name']);
    
    if($img["error"] != 0)
    {
      echo "Dữ liệu upload bị lỗi";
      die;	
    }
    $allow = true;
    $maxsize = 1000000;
    $allowType = array('JPG', 'GIF' , 'PNG', 'JPEG');
    if(file_exists($target))
    {
      echo "Tập tin này đã tồn tại";
      $allow = false;
    }
    if($img["size"] > $maxsize)
    {
      echo "Tập tin có dung lượng lớn hơn cho phép (1MB)";
      $allow = false;	
    }
    $filetype = strtoupper(pathinfo($target,PATHINFO_EXTENSION));
    if(!in_array($filetype,$allowType))
    {
      echo "Không hỗ trợ định dạng này";
      $allow = false;
    }
   
    if($allow){

      $sql = $conn->query("INSERT INTO image (filename) VALUES ('$folder')");
    if ($sql) {
              move_uploaded_file($_FILES["image"]["tmp_name"], $folder);
              header("Location: adwelcome.php");
          }else{
              echo "Error";
        }
    }
      
  }
  $result = $conn->query("SELECT filename FROM image");
?>