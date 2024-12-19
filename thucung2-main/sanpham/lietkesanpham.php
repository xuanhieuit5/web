<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>liệt kê sản phẩm</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
    <table class="table table-hover">
      <h1>danh sách sản phẩm</h1>
      <a href="themsanpham.html" class="btn btn-success">Thêm sản phẩm</a>
      <a href="../admin.html" class="btn btn-success">về admin</a>
    <thead>
      <tr>
        <th>sản phẩm</th>
        <th>giá</th>
        <th>số lượng</th>
        <th>mô tả sản phẩm</th>
        <th>hình ảnh</th>
        <td>thao tác</td>
      </tr>
    </thead>
    <tbody>
    <?php
    require_once '../ketnoi.php';
    $lietke_sql = " SELECT * FROM sanpham order by id";
    $result = mysqli_query($conn, $lietke_sql);
    while ($r = mysqli_fetch_assoc($result)){
    ?>
      <tr>
        <td><?php echo $r['tensanpham'];?></td>
        <td><?php echo $r['gia'];?></td>
        <td><?php echo $r['soluong'];?></td>
        <td><?php echo $r['motasanpham'];?></td>
        <td><img src="../img/sanpham/<?php echo $r['hinhanh']; ?>  " width="40px" height="40px" alt ="anh"/></td>
        <td><a href="suasanpham.php?sid=<?php echo $r['id'];?>" class="btn btn-info">sửa</a>
         <a onclick="return confirm('bạn có muốn xóa sản phẩm này không');" href="xoasanpham.php?sid=<?php echo $r['id'];?>" class="btn btn-danger">xoá</a></td>
      </tr>
    <?php
    }
    ?>
    </tbody>
  </table>
    </div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">thêm sản phẩm</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="themsanpham.php" method="post">
            <div class="form-group">
                <label for="tensanpham">tên sản phẩm</label>
                <input type="text" id="tensanpham" class="form-control" name="tensanpham">
            </div>
            <div class="form-group">
                <label for="gia">giá</label>
                <input type="text" id="gia" class="form-control" name="gia"> 
            </div>
            <div class="form-group">
                <label for="soluong">số lượng</label>
                <input type="text" id="soluong" class="form-control" name="soluong">
            </div>
            <div class="form-group">
                <label for="motasanpham">mô tả sản phẩm</label>
                <input type="text" id="motasanpham" class="form-control" name="motasanpham">
            </div>
            <div class="form-group">
                <label for="hinhanh">hình ảnh</label>
                <input type="text" id="hinhanh" class="form-control" name="hinhanh">
            </div>
           <button type="submit" class="btn btn-primary">danh sách sản phẩm</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>