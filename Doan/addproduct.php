<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="ckeditor/ckeditor.js"></script>
<?php
   include_once("./connect_php.php");
   include_once("./controlad.php"); 	
   if(!isset($_SESSION['type'])){
     header("Location: login.php");
   }
  include_once("./link.php");
?>
</head>

<body style="background-image: url(./img/bg.png);">
  <div class="d-flex  align-items-center justify-content-center">
    <form action="saveproduct.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="col-8 col-md-8">
      <table width="100%" border="0" class="">
        <tr>
          <td colspan="2"><div align="center">THÊM SẢN PHẨM MỚI</div></td>
        </tr>
        <tr>
          <td width="266">Code</td>
          <td width="324"><label for="productcode"></label>
            <input type="text" name="productcode" id="productcode" />
          </td>
        </tr>
        <tr>
          <td width="266">Name</td>
          <td width="324"><label for="productname"></label>
            <input type="text" name="productname" id="productname" />
          </td>
        </tr>
        <tr>
          <td>Price</td>
          <td><label for="price"></label>
          <input type="text" name="price" id="price" /></td>
        </tr>
        <tr>
          <td>Hình ảnh đại diện:</td>
          <td><label for="image"></label>
          <input type="file" name="image" id="image" /></td>
        </tr>
       
        <tr>
          <td>Description:</td>
          <td><label for="description"></label>
          <textarea name="description" id="description" cols="45" rows="5"></textarea></td>
         
        </tr>
        <tr>
          <td>Type:</td>
          <td><label for="type"></label>
          <input type="text" name="type" id="type" /></td>
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
    <script>CKEDITOR.replace('description');</script>

  </div>
</body>
</html>