<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cham soc thu cung</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" type="image/png" sizes="32x32" href="/img/pet-care.png" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- Navbar start -->
    <nav class="navbar navbar-expand-sm bg-black">

  <div class="container-fluid">
    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white" href="index.php">trang chủ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="chitietsanpham.php">sản phẩm</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">dịch vụ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">tin tức</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">giỏ hàng</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="./fromdangnhap.html">tài khoản</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">hỗ trợ</a>
      </li>
    </ul>
  </div>

  </nav>
    <!-- Modal Search End -->
<?php
 $id=$_GET['sid'];
require_once 'ketnoi.php';
$chitietsanpham_sql="SELECT * FROM sanpham WHERE id=$id";
$result=mysqli_query($conn,$chitietsanpham_sql);
$row = mysqli_fetch_assoc($result);
?>
<body>
    <div class="container ">
        <div class="row">
            <div class="col-6">
                <img class="" width="400px" src="./img/sanpham/<?php echo $row['hinhanh']; ?> " alt=""></div>
            <div class="col-6">
            <h1><?php echo $row['tensanpham']; ?> </h1>
            <h4><?php echo $row['soluong']; ?> </h4>
            <h4><?php echo $row['gia']; ?> </h4>
            <button class="btn btn-secondary"> mua san pham</button>
            </div>
        <div class="row">
        <h4><?php echo $row['motasanpham']; ?> </h4>
        </div>
        </div>      
</div> 
</body>
</html>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <div class="footer-item">
              <h4 class="text-light mb-3">
                Tại sao bạn nên lựa chọn chúng tôi
              </h4>
              <p class="mb-4">
                Chúng tôi cung cấp các dịch vụ tốt nhất, các sản phẩm tốt nhất
                đến tay các bạn như dân đa cấp vậy :3
              </p>
              <a
                href=""
                class="btn border-secondary py-2 px-4 rounded-pill text-primary"
                >Read More</a
              >
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="d-flex flex-column text-start footer-item">
              <h4 class="text-light mb-3">Thông tin cửa hàng</h4>
              <a class="btn-link" href="">Về chúng tôi</a>
              <a class="btn-link" href="">Tầm nhìn</a>
              <a class="btn-link" href="">Giá trị cốt lõi</a>
              <a class="btn-link" href="">CHính sách &Điều khoản</a>
              <a class="btn-link" href="">CHính sách hoàn tiền</a>
              <a class="btn-link" href="">Trợ giúp</a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="d-flex flex-column text-start footer-item">
              <h4 class="text-light mb-3">Tài khoản</h4>

              <a class="btn-link" href="">Cửa hàng chi tiết</a>
              <a class="btn-link" href="">Giỏ hàng</a>
              <a class="btn-link" href="">Wishlist</a>
              <a class="btn-link" href="">Lịch sử giao dịch</a>
              <a class="btn-link" href="">Đơn hàng quốc tế</a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="footer-item">
              <h4 class="text-light mb-3">Liên lạc</h4>
              <p>Address: truong dai hoc cong nghe dong a</p>
              <p>Email: huong@gmail.com</p>
              <p>Phone: +0123 4567 8910</p>
              <p>Chấp nhận thanh toán</p>
              <img src="img/payment.png" class="img-fluid" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <span class="text-light"
              ><i class="fas fa-copyright text-light me-2"></i>Pet Care, All
              right reserved.</span
            >
          </div>
          <div class="col-md-6 my-auto text-center text-md-end text-white">
            Designed By
            <a class="border-bottom" href="https://www.facebook.com/huong043"
              >Huong</a
            >
          </div>
        </div>
      </div>
    </div>
   
    <!-- Copyright End -->
  </body>
</html>
