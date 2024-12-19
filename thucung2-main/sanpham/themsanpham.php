<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>thêm sản phẩm</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php
$sp=$_POST['tensanpham'];
$gia=$_POST['gia'];
$sl=$_POST['soluong'];
$mtsp=$_POST['motasanpham'];
$ha=$_POST['hinhanh'];
require_once '../ketnoi.php';
$themsanphamsql="INSERT INTO sanpham
(tensanpham,gia,soluong,motasanpham,hinhanh) VALUES 
('$sp','$gia','$sl','$mtsp','$ha')";
if(mysqli_query($conn,$themsanphamsql)){
      ?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Success!</strong> Thêm sản phẩm thành công
        </div>
      <a href="lietkesanpham.php"class=" btn btn-info">Trở về trang liệt kê sản phẩm</a>
      <?php  
    }
    ?>