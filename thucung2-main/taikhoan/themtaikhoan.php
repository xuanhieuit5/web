<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thêm tài khoản</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php
$tk=$_POST['taikhoan'];
$mk=$_POST['matkhau'];
$cv=$_POST['chucvu'];
require_once '../ketnoi.php';
$themtaikhoansql="INSERT INTO taikhoan1
(taikhoan,matkhau,chucvu) VALUES ('$tk','$mk','$cv')";
if(mysqli_query($conn,$themtaikhoansql)){
?>
<div class="alert alert-success alert-dismissible">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Success!</strong> Thêm tài khoản thành công
    </div>
  <a href="lietketaikhoan.php"class=" btn btn-info">Trở về trang liệt kê tài khoản</a>
  <?php  
}
?>
