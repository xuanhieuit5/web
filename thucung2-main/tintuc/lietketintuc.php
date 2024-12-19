<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liệt kê tin tức</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
    <table class="table table-hover">
      <h1>danh sách tin tức</h1>
      <thead>
        <th><a href="themtintuc.html" class="btn btn-success">Thêm tin tức </a></th>
        <th><a href="../admin.html" class="btn btn-success"> về admin</a></th>
</thead>
      
      
    <thead>
      <tr>
        <th>tên bài </th>
        <th>nội dung</th>
        <th>tác giả</th>
        <th>hình ảnh</th>
        <td>thao tác</td>
      </tr>
    </thead>
    <tbody>
    <?php
    require_once '../ketnoi.php';
    $lietketintuc_sql = " SELECT * FROM tintuc order by id";
    $result = mysqli_query($conn, $lietketintuc_sql);
    while ($r = mysqli_fetch_assoc($result)){
    ?>
      <tr>
        <td><?php echo $r['tenbai'];?></td>
        <td><?php echo $r['noidung'];?></td>
        <td><?php echo $r['tacgia'];?></td>
        <td><img src="../img/blog/<?php echo $r['hinhanh']; ?>  " width="40px" height="40px" alt ="anh"/></td>
        <td><a href="suatintuc.php?sid=<?php echo $r['id'];?>" class="btn btn-info">sửa</a>
         <a onclick="return confirm('bạn có muốn xóa tin tức này không');" href="xoatintuc.php?sid=<?php echo $r['id'];?>" class="btn btn-danger">xoá</a></td>
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
        <h5 class="modal-title" id="exampleModalLabel">thêm tin tức</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="themtintuc.php" method="post">
            <div class="form-group">
                <label for="tenbai">tên bài</label>
                <input type="text" id="tenbai" class="form-control" name="tenbai">
            </div>
            <div class="form-group">
                <label for="noidung">nội dung</label>
                <input type="text" id="noidung" class="form-control" name="noidung">
            </div>
            <div class="form-group">
                <label for="tacgia">tác giả</label>
                <input type="text" id="tacgia" class="form-control" name="tacgia">
            </div>
            <div class="form-group">
                <label for="hinhanh">hình ảnh</label>
                <input type="text" id="hinhanh" class="form-control" name="hinhanh">
            </div>
           <button type="submit" class="btn btn-primary">thêm tin tức</button>
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


