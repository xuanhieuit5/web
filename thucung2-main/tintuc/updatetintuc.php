<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update tin tức</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php
$tb=$_POST['tenbai'];
$nd=$_POST['noidung'];
$tg=$_POST['tacgia'];
$ha=$_POST['hinhanh'];
$id=$_POST['sid'];
require_once '../ketnoi.php';
$updatetintucsql="UPDATE tintuc SET tenbai='$tb',noidung='$nd',
tacgia='$tg',hinhanh='$ha' WHERE id=$id";
if(mysqli_query($conn,$updatetintucsql)){
    ?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Success!</strong> update tin tức thành công
        </div>
      <a href="lietketintuc.php"class=" btn btn-info">Trở về trang liệt kê tin tức</a>
      <?php  
    }
    ?>