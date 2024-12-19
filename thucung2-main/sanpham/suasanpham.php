<?php
$id=$_GET['sid'];
require_once '../ketnoi.php';
$suasanpham_sql="SELECT * FROM sanpham WHERE id=$id";
$result=mysqli_query($conn,$suasanpham_sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sửa sản phẩm</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>sửa sản phẩm</h1>
        <form action="updatesanpham.php" method="post">
            <input type="hidden" name="sid" value="<?php
            echo $id;?>">
            <div class="form-group">
                <label for="tensanpham">tên sản phẩm</label>
                <input type="text" id="tensanpham" class="form-control" name="tensanpham" 
                value="<?php echo $row['tensanpham']?>">
            </div>
            <div class="form-group">
                <label for="gia">giá</label>
                <input type="text" id="gia" class="form-control" name="gia"
                value="<?php echo $row['gia']?>">                
            </div>
            <div class="form-group">
                <label for="soluong">số lượng</label>
                <input type="text" id="soluong" class="form-control" name="soluong"
                value="<?php echo $row['soluong']?>">
            </div>
            <div class="form-group">
                <label for="motasanpham">mô tả sản phẩm</label>
                <input type="text" id="motasanpham" class="form-control" name="motasanpham"
                value="<?php echo $row['motasanpham']?>">
            </div>
            <div class="form-group">
                <label for="hinhanh">hình ảnh</label>
                <input type="text" id="hinhanh" class="form-control" name="hinhanh"
                value="<?php echo $row['hinhanh']?>">
            </div>          
            <button type="submit" class="btn btn-primary">sửa sản phẩm</button>
    </div>
</body>
</html>