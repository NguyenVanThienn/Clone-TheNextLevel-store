<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body style="background-image: url(./img/bg.png);">
	<?php
    include_once("./connect_php.php");
    include_once("./controlad.php"); 	
    if(!isset($_SESSION['type'])){
      header("Location: login.php");
    }
    include_once("./link.php");
		$id = $_GET['id'];	
		include_once("connect_php.php");							
		$sql = "SELECT * FROM producttb WHERE ID = '". $id . "'" ;
		$rs = mysqli_query($conn, $sql);
		$row = mysqli_fetch_row($rs);
	?>
  <div class="d-flex align-items-center justify-content-center " style="margin-top: 70px;">

    <form action="confirmupdateproduct.php?id=<?=$id?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
    <table width="800" border="0">
      <tr>
        <td colspan="2"><div align="center"><h2>CẬP NHẬT SẢN PHẨM</h2></div></td>
      </tr>
      <tr>
      
      <th>
    Code  <input type="text" name="productcode" id="productcode" value="<?= $row[1];?>" />
    </th>
      </td>
    </tr>
      <tr>
      
        <th>
      Name  <input type="text" class="w-50" name="productname" id="productname" value="<?= $row[2];?>" />
      </th>
        </td>
      </tr>
      <tr>
       
        <th>
  
      Price  <input type="text" name="price" id="price" value="<?= $row[3];?>" /></td>
      </th>
      </tr>

      <tr>  
       <th>	 
     
     Hình ảnh đại diện: <input type="file" name="image" id="image" value="<?= $row[4];?>" />
     </th>
      </tr>
  
      <tr>   
    <th>
    Type:<input type="text" name="type" id="type" value="<?= $row[6];?>" /></td>
      </th>
      </tr>
          <tr>
        
           
            <td><label for="description"> Description:</label>
            <textarea name="description" id="description" cols="45" rows="5" ><?= $row[5]; ?></textarea>        
          </tr>
      <tr>
        <td colspan="2"><blockquote>
          <p align="center">
            <input type="submit" name="Submit" id="button" value="Lưu" />
            <input type="reset" name="button2" id="button2" value="Nhập lại" />
          </p>
        </blockquote></td>
      </tr>
    </table>
  </form>
  </div>
<script>CKEDITOR.replace('description');</script>
</body>
</html>