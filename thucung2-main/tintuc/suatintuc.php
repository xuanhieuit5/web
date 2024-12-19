<?php
$id=$_GET['sid'];
require_once '../ketnoi.php';
$suatintuc_sql="SELECT * FROM tintuc WHERE id=$id";
$result=mysqli_query($conn,$suatintuc_sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sửa tin tức</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>sửa tin tức</h1>
        <form action="updatetintuc.php" method="post">
            <input type="hidden" name="sid" value="<?php
            echo $id;?>">
            <div class="form-group">
                <label for="tenTenbai">tên bài </label>
                <input type="text" id="tenbai" class="form-control" name="tenbai" 
                value="<?php echo $row['tenbai']?>">
            </div>
            <div class="form-group">
                <label for="noidung">nội dung</label>
                <input type="text" id="noidung" class="form-control" name="noidung"
                value="<?php echo $row['noidung']?>">
            </div>
            <div class="form-group">
                <label for="tacgia">tác giả</label>
                <input type="text" id="tacgia" class="form-control" name="tacgia"
                value="<?php echo $row['tacgia']?>">
            </div>
            <div class="form-group">
                <label for="hinhanh">hình ảnh</label>
                <input type="text" id="hinhanh" class="form-control" name="hinhanh"
                value="<?php echo $row['hinhanh']?>">
            </div>
            <button type="submit" class="btn btn-primary">sửa tin tức</button>
    </div>
</body>
</html>