<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>xóa sản phẩm</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php
$tkid=$_GET['sid'];
require_once '../ketnoi.php';
$xoasanpham_sql="DELETE FROM sanpham WHERE id=$tkid";
mysqli_query($conn,$xoasanpham_sql);
?>
<div class="alert alert-success alert-dismissible">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Success!</strong> Xóa sản phẩm thành công
  </div>
  <a href="lietkesanpham.php"class=" btn btn-info">Trở về trang liệt kê sản phẩm</a>
  <?php  