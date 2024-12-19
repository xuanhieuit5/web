<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Danh sách tài khoản</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Danh sách tài khoản</h1>
        <a href="themtaikhoan.html" class="btn btn-success">Thêm tài khoản</a>
        <a href="../admin.html" class="btn btn-success">về admin</a>
    <table class="table table-dark">
    <thead>
      <tr>
        <th>Tên tài khoản</th>
        <th>Mật khẩu</th>
        <th>Chức vụ</th>
        <th>Sửa xóa</th>
      </tr>
    </thead>
    <tbody>
    <?php
require_once '../ketnoi.php';
$lietketaikhoan="SELECT * FROM taikhoan1 order by id";
$result=mysqli_query($conn,$lietketaikhoan);
while($r =mysqli_fetch_assoc($result)){?>
    <tr>
        <td><?php echo $r['taikhoan'];?></td>
        <td><?php echo $r['matkhau'];?></td>
        <td><?php echo $r['chucvu'];?></td>
        <td><a href="suataikhoan.php?sid=<?php echo $r['id'];?>" class="btn btn-info">Sửa</a>
        <a onclick="return confirm('bạn có muốn xóa tài khoản này không');" href="xoataikhoan.php?sid=<?php echo $r['id'];?>" class="btn btn-danger">Xóa</a></td>
      </tr>
    <?php
    }
?>