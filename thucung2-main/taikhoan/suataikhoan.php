<?php
$id=$_GET['sid'];
require_once '../ketnoi.php';
$suataikhoan_sql="SELECT * FROM taikhoan1 WHERE id=$id";
$result=mysqli_query($conn,$suataikhoan_sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa tài khoản</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Sửa tài khoản</h1>
        <form action="updatetaikhoan.php" method="post">
            <input type ="hidden" name="sid" value="<?php echo $id;?>" id="">
            <div class="form-group">
                <label for="taikhoan">Tên tài khoản</label>
                <input type="text" id="taikhoan" class="form-control" name="taikhoan"
                value="<?php echo $row['taikhoan']?>">
            </div>
            <div class="form-group">
                <label for="matkhau">Mật khẩu</label>
                <input type="text" id="matkhau" class="form-control" name="matkhau"
                value="<?php echo $row['matkhau']?>"> 
            </div>
            <div class="form-group">
                <label for="chucvu">Chức vụ</label>
                <input type="text" id="chucvu" class="form-control" name="chucvu"
                value="<?php echo $row['chucvu']?>">
            </div>
            <button type="submit" class="btn btn-primary">Thêm tài khoản</button>
        </form>
    </div>
</body>
</html>