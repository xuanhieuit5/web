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
    <div class="container">
    <!-- Navbar start -->
    <nav class="navbar navbar-expand-sm bg-black">

  <div class="container-fluid">
    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white" href="index.php">trang chủ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="sanpham.php">sản phẩm</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">dịch vụ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="blog.php">tin tức</a>
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
 
  <div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/moi/anh1.jpg"  style=" height: 600px"alt="Los Angeles" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="./img/moi/anh3.jpg"  style=" height: 600px" alt="Chicago" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="./img/moi/anh2.jpg"  style=" height: 600px" alt="New York" class="d-block w-100">
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
</div>

    <!-- Fruits Shop Start-->
    <div class="container-fluid fruite py-5">
      <div class="container py-5">
        <h1>Các sản phẩm của chúng tôi</h1>
        <div class="tab-class text-center">
          <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
              <div class="row g-4">
                <div class="col-lg-12">
                  <div class="row g-4">
                  <?php
      require_once 'ketnoi.php';
      $lietkesanpham_sql = " SELECT * FROM sanpham order by id";
      $result = mysqli_query($conn, $lietkesanpham_sql);
      while ($r = mysqli_fetch_assoc($result)){
      ?>
      <div class="col-md6 col-lg-4 col-xl-3">
                      <div class="card">
                        <a href="chitietsanpham.php?sid=<?php echo $r['id'];?>">
                        <td><img
                          class="card-img-top"
                          src="./img/sanpham/<?php echo $r['hinhanh']; ?>"
                          alt="Card image"
                        /></td>
                        <div class="card-body">
                          <h4 class="card-title">
                          <td><?php echo $r['tensanpham'];?></td>
                          </h4>
                          <p class="card-text"><?php echo $r['gia'];?></p>
                          <a href="" class="btn btn-primary"
                            >Thêm vào giỏ hàng</a
                          >
                        </div>
                        </a>
                      </div>
                    </div>
                    <?php
    }
    ?>
    </div>
        </div>
    </div>
    </div>
        </div>

    
    <!-- Fruits Shop End-->

    <!-- Fact Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="bg-light p-5 rounded">
          <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-6 col-xl-3">
              <div class="counter bg-white rounded p-5">
                <i class="fa fa-users text-secondary"></i>
                <h4>Sự hài lòng của khách hàng</h4>
                <h1>1963</h1>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
              <div class="counter bg-white rounded p-5">
                <i class="fa fa-users text-secondary"></i>
                <h4>Chất lượng dịch vụ</h4>
                <h1>99%</h1>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
              <div class="counter bg-white rounded p-5">
                <i class="fa fa-users text-secondary"></i>
                <h4>Chứng chỉ an toàn</h4>
                <h1>33</h1>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
              <div class="counter bg-white rounded p-5">
                <i class="fa fa-users text-secondary"></i>
                <h4>Các sản phẩm sẵn có</h4>
                <h1>789</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Fact Start -->

    <!-- Tastimonial Start -->
    <div class="container-fluid testimonial py-5">
      <div class="container py-5">
        <div class="testimonial-header text-center">
          <h1 class="display-5 mb-5 text-dark">Khách hàng nói về chúng tôi</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
          <div class="testimonial-item img-border-radius bg-light rounded p-4">
            <div class="position-relative">
              <i
                class="fa fa-quote-right fa-2x text-secondary position-absolute"
                style="bottom: 30px; right: 0"
              ></i>
              <div class="mb-4 pb-4 border-bottom border-secondary">
                <p class="mb-0">
                  Lorem Ipsum is simply dummy text of the printing Ipsum has
                  been the industry's standard dummy text ever since the 1500s,
                </p>
              </div>
              <div class="d-flex align-items-center flex-nowrap">
                <div class="bg-secondary rounded">
                  <img
                    src="img/testimonial-1.jpg"
                    class="img-fluid rounded"
                    style="width: 100px; height: 100px"
                    alt=""
                  />
                </div>
                <div class="ms-4 d-block">
                  <h4 class="text-dark">Tôi</h4>
                  <p class="m-0 pb-3">
                    cho 1 sao nhưng chi đánh giá được 5sao =3
                  </p>
                  <div class="d-flex pe-5">
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star text-primary"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial-item img-border-radius bg-light rounded p-4">
            <div class="position-relative">
              <i
                class="fa fa-quote-right fa-2x text-secondary position-absolute"
                style="bottom: 30px; right: 0"
              ></i>
              <div class="mb-4 pb-4 border-bottom border-secondary">
                <p class="mb-0">Làm ăn như thế này chỉ có ăn ...</p>
              </div>
              <div class="d-flex align-items-center flex-nowrap">
                <div class="bg-secondary rounded">
                  <img
                    src="img/testimonial-1.jpg"
                    class="img-fluid rounded"
                    style="width: 100px; height: 100px"
                    alt=""
                  />
                </div>
                <div class="ms-4 d-block">
                  <h4 class="text-dark">Nguyễn Thi Hoa</h4>
                  <p class="m-0 pb-3">Phong cách làm việc rất chuyên nghiệp</p>
                  <div class="d-flex pe-5">
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star text-primary"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Tastimonial End -->

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
