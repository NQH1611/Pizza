<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pizza 365</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- Nhúng Thư viện DataTable -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
  <link rel="stylesheet" href="./css/style.css">
</head>

<body class="bg-white">

  <!-- Header Navbar  -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top ">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav nav-fill w-100">
              <li class="nav-item active">
                <a class="nav-link" href="#">TRANG CHỦ <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="combo" href="#size-pizza">COMBO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#type-pizza">LOẠI PIZZA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#send-order">GỬI ĐƠN HÀNG</a>
              </li>
              <li class="nav-item">

                <?php
                if (isset($_SESSION['username']) && $_SESSION['username']) {
                  echo "<a class='nav-link tenkh' href='./logout.php'>" . $_SESSION['username'] . "</a>";
                } else {
                  echo "<a class='nav-link' href='./login.php'>LOGIN</a>";
                }
                ?></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>

  <!-- Content -->
  <div class="container" style="padding: 100px 0 50px 0;">
    <!-- Logo Pizza 365 -->
    <div class="col-sm-12 text-orange">
      <div class="row">
        <div class="col-sm-3">
          <h1><b>Pizza 365</b></h1>
          <i class="font-23">Truly italian!</i>
          <?php

          ?>
        </div>
        <div class="col-sm-9 message-sale"></div>
      </div>
    </div>
    <!-- Slide row home -->
    <div class="col-sm-12 mt-3">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/3.jpg" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/4.jpg" alt="Four slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <!-- Title Tại sao lại lựa chọn pizza 365 -->
    <div class="col-sm-12 text-center p-4 mt-4">
      <h2><b class="p-2 border-bottom text-orange">Tại Sao Lại Pizza 365:</b></h2>
    </div>

    <!-- Content Tại sao lại lựa chọn pizza 365 -->
    <div class="col-sm-12">
      <div class="row">
        <div class="col-sm-3 p-4 border w-25" style="background-color: lightgoldenrodyellow;">
          <h3 class="p-2">Đa dạng</h3>
          <p class="p-2">Số lượng pizza đa dạng, có đầy đủ các loại pizza đang hot nhất hiện nay.</p>
        </div>
        <div class="col-sm-3 p-4 border w-25" style="background-color: yellow;">
          <h3 class="p-2">Chất lượng</h3>
          <p class="p-2">Nguyên liệu sạch 100% rõ nguồn gốc, quy trình chế biến đảm bảo vệ sinh an toàn thục phẩm.</p>
        </div>
        <div class="col-sm-3 p-4 border w-25" style="background-color: lightsalmon;">
          <h3 class="p-2">Hương vị</h3>
          <p class="p-2">Đảm bảo hương vị ngon, độc, lạ mà bạn chỉ có thể trải nghiệm từ Pizza 365.</p>
        </div>
        <div class="col-sm-3 p-4 w-25 bg-orange border">
          <h3 class="p-2">Dịch vụ</h3>
          <p class="p-2">Nhân viên thân thiện, nhà hàng hiện đại. Dịch vụ giao hành nhanh chất lượng, tân tiến.</p>
        </div>
      </div>
    </div>
    <!-- Title Chọn Kích Cỡ -->
    <div class="col-sm-12 text-center p-4 mt-4" id="size-pizza">
      <span id="section"></span>
      <h2><b class="p-2 border-bottom text-orange">Chọn Size Pizza</b></h2>
      <p><span class="p-2 text-orange">Chọn bombo pizza phù hợp với nhu cầu của bạn</span></p>
    </div>
    <!-- Content Chọn Kích Cỡ -->
    <div class="col-sm-12">
      <div class="row card-menu">
        <?php
        include('./database/config.php');
        $menu = mysqli_query($conn, "SELECT kichCo, duongKinh, suonNuong, salad, soLuongNuocNgot, giaTien FROM menu");
        //$result =mysqli_fetch_array($menu);
        //$result = mysqli_fetch_assoc($menu);
        //$row = mysqli_fetch_row($result);
        //var_dump($result);
        while ($row = mysqli_fetch_assoc($menu)) {
        ?>
          <div class="col-sm-4">
            <div class="card">
              <div class="card-header bg-orange text-center">
                <h3><?php echo $row["kichCo"]; ?></h3>
              </div>
              <div class="card-body text-center">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Đường Kính<b> <?php echo $row["duongKinh"]; ?></b></li>
                  <li class="list-group-item">Sườn Nướng<b> <?php echo $row["suonNuong"]; ?></b></li>
                  <li class="list-group-item">Salad<b> <?php echo $row["salad"]; ?></b></li>
                  <li class="list-group-item">Nước Ngọt<b> <?php echo $row["soLuongNuocNgot"]; ?></b></li>
                  <li class="list-group-item">
                    <h1><b><?php echo $row["giaTien"]; ?></b></h1>VND
                  </li>
                </ul>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-orange w-100" id="btn-pizza-<?php echo strtolower($row["kichCo"]); ?>">CHỌN</button>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
        <!-- <div class="col-sm-4">
          <div class="card">
            <div class="card-header bg-orange text-center">
              <h3>S (small)</h3>
            </div>
            <div class="card-body text-center">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Đường Kính<b> 20CM</b></li>
                <li class="list-group-item">Sườn Nướng<b> 2</b></li>
                <li class="list-group-item">Salad<b> 200g</b></li>
                <li class="list-group-item">Nước Ngọt<b> 2</b></li>
                <li class="list-group-item">
                  <h1><b>150.000</b></h1>VND
                </li>
              </ul>
            </div>
            <div class="card-footer text-center">
              <button class="btn btn-orange w-100" id="btn-pizza-small">CHỌN</button>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-header bg-orange text-center">
              <h3>M (medium)</h3>
            </div>
            <div class="card-body text-center">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Đường Kính<b> 25CM</b></li>
                <li class="list-group-item">Sườn Nướng<b> 4</b></li>
                <li class="list-group-item">Salad<b> 300g</b></li>
                <li class="list-group-item">Nước Ngọt<b> 3</b></li>
                <li class="list-group-item">
                  <h1><b>200.000</b></h1>VND
                </li>
              </ul>
            </div>
            <div class="card-footer text-center">
              <button class="btn btn-orange w-100" id="btn-pizza-medium">CHỌN</button>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-header bg-orange text-center">
              <h3>L (large)</h3>
            </div>
            <div class="card-body text-center">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Đường Kính<b> 30CM</b></li>
                <li class="list-group-item">Sườn Nướng<b> 8</b></li>
                <li class="list-group-item">Salad<b> 500g</b></li>
                <li class="list-group-item">Nước Ngọt<b> 4</b></li>
                <li class="list-group-item">
                  <h1><b>250.000</b></h1>VND
                </li>
              </ul>
            </div>
            <div class="card-footer text-center">
              <button class="btn btn-orange w-100" id="btn-pizza-large">CHỌN</button>
            </div>
          </div>
        </div>
      </div> -->
      </div>
      <!-- Title Chọn Pizza -->
      <div class="col-sm-12 text-center text-orange p-4 mt-4" id="type-pizza">
        <span id="section"></span>
        <h2><b class="p-2 border-bottom">Chọn Loại Pizza</b></h2>
      </div>

      <!-- Content Chọn Pizza -->
      <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-4">
            <div class="card">
              <img src="images/seafood.jpg" class="card-img-top">
              <div class="card-body">
                <h4>OCEAN MANIA</h4>
                <p style="height: 3.3rem;">PIZZA HẢI SẢN SỐT MAYONNAISE</p>
                <p>Xốt Cà Chua, Phô Mai Mozzarella, Tôm, Mực, Thanh Cua, Hành Tây.</p>
                <p><button class="btn btn-orange w-100" id="btn-type-ocean">CHỌN</button></p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <img src="images/hawaiian.jpg" class="card-img-top">
              <div class="card-body">
                <h4>HAWAIIAN</h4>
                <p style="height: 3.3rem;">PIZZA DĂM BÔNG DỨA KIỂU HAWAII</p>
                <p>Xốt Cà Chua, Phô Mai Mozzarella, Thịt Dăm Bông, Thơm.</p>
                <p><button class="btn btn-orange w-100" id="btn-type-hawaii">CHỌN</button></p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <img src="images/bacon.jpg" class="card-img-top">
              <div class="card-body">
                <h4>CHEESY CHICKEN BACON</h4>
                <p style="height: 3.3rem;">PIZZA GÀ PHÔ MAI THỊT HEO XÔNG KHÓI</p>
                <p>Xốt Phô Mai, Thịt Gà, Thịt Hoe Muối, Phô Mai Mozzarella, Cà Chua</p>
                <p><button class="btn btn-orange w-100" id="btn-type-bacon">CHỌN</button></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Title Gửi đơn hàng -->
      <div class="col-sm-12 text-center text-orange p-4 mt-4" id="send-order">
        <h2><b class="p-2 border-bottom">Gửi Đơn Hàng</b></h2>
      </div>

      <!-- Content Gửi đơn hàng -->
      <div class="col-sm-12 p-2">
        <div class="row">
          <div class="col-sm-12">
            <?php include "./element/formadd.php" ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid mt-2 p-5 bg-orange">
    <div class="row text-center">
      <div class="col-sm-12">
        <h4 class="m-2">Footer</h4>
        <a href="#" class="btn btn-dark m-3">
          <i class="fa fa-arrow-up" aria-hidden="true"></i>
          To the top
        </a>
        <div class="m-2">
          <i class="fab fa-facebook w3-hover-opacity" aria-hidden="true"></i>
          <i class="fab fa-instagram w3-hover-opacity" aria-hidden="true"></i>
          <i class="fab fa-snapchat w3-hover-opacity" aria-hidden="true"></i>
          <i class="fab fa-pinterest w3-hover-opacity" aria-hidden="true"></i>
          <i class="fab fa-twitter w3-hover-opacity" aria-hidden="true"></i>
          <i class="fab fa-linkedin w3-hover-opacity" aria-hidden="true"></i>
        </div>
        <b>Powered by DEVCAMP</b>
      </div>
    </div>
  </div>
  <!-- Modal thông tin đơn hàng -->
  <div id="modal-data-pizza" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">THÔNG TIN ĐƠN HÀNG</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="">Họ và tên</label>
            <input type="text" id="inp-fullname-modal" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Số điện thoại</label>
            <input type="text" id="inp-dienthoai-modal" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Địa chỉ</label>
            <input type="text" id="inp-diachi-modal" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Lời nhắn</label>
            <input type="text" id="inp-loinhan-modal" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Mã giảm giá</label>
            <input type="text" id="inp-voucher-modal" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Thông tin chi tiết</label>
            <textarea name="" id="textarea-infoorder-modal" rows="5" class="form-control"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger w-25" data-dismiss="modal">Quay lại</button>
          <button type="button" class="btn btn-orange w-25" id="btn-tao-don">Tạo Đơn</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Hiển thị Mã đơn hàng -->
  <div id="modal-display-orderid" class="modal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content bg-orange">
        <div class="modal-header">
          <h5 class="modal-title">Cảm ơn bạn đã đặt hàng tại Pizza 365. Mã đơn hàng của bạn là: </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="">
            <div class="form-group">
              <div class="col-sm-12 row">
                <div class="col-sm-4">
                  <label for="">Mã đơn hàng</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" id="inp-ordercode-modal" class="form-control">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function() {
      $("#btn-pizza-s").on("click", function() {
        onBtnPizzaSizeSmallClick()
      })
      $("#btn-pizza-m").on("click", function() {
        onBtnPizzaSizeMediumClick()
      })
      $("#btn-pizza-l").on("click", function() {
        onBtnPizzaSizeLargeClick()
      })
      $("#btn-type-ocean").on("click", function() {
        onBtnPizzaTypeOceanClick()
      })
      $("#btn-type-hawaii").on("click", function() {
        onBtnPizzaTypeHawaiiClick()
      })
      $("#btn-type-bacon").on("click", function() {
        onBtnPizzaTypeBaconClick()
      })
      $("#btn-send-order").on("click", function() {
        onBtnSendDataOrderClick()
      })
    })

    function onBtnPizzaTypeOceanClick() {
      changeColorButtonPizza("Ocean")
    }

    function onBtnPizzaTypeHawaiiClick() {
      changeColorButtonPizza("Hawaii")
    }

    function onBtnPizzaTypeBaconClick() {
      changeColorButtonPizza("Bacon")
    }

    function onBtnPizzaSizeSmallClick() {
      changeColorButtonPizza("Small")
    }

    function onBtnPizzaSizeMediumClick() {
      changeColorButtonPizza("Medium")
    }

    function onBtnPizzaSizeLargeClick() {
      changeColorButtonPizza("Large")
    }

    function changeColorButtonPizza(paramPizza) {
      if (paramPizza == "Small") {
        $("#btn-pizza-s").removeClass().addClass("btn btn-success w-100")
        $("#btn-pizza-m").removeClass().addClass("btn btn-orange w-100")
        $("#btn-pizza-l").removeClass().addClass("btn btn-orange w-100")
      } else if (paramPizza == "Medium") {
        $("#btn-pizza-s").removeClass().addClass("btn btn-orange w-100")
        $("#btn-pizza-m").removeClass().addClass("btn btn-success w-100")
        $("#btn-pizza-l").removeClass().addClass("btn btn-orange w-100")
      } else if (paramPizza == "Large") {
        $("#btn-pizza-s").removeClass().addClass("btn btn-orange w-100")
        $("#btn-pizza-m").removeClass().addClass("btn btn-orange w-100")
        $("#btn-pizza-l").removeClass().addClass("btn btn-success w-100")
      } else if (paramPizza == "Ocean") {
        $("#btn-type-ocean").removeClass().addClass("btn btn-success w-100")
        $("#btn-type-hawaii").removeClass().addClass("btn btn-orange w-100")
        $("#btn-type-bacon").removeClass().addClass("btn btn-orange w-100")
      } else if (paramPizza == "Hawaii") {
        $("#btn-type-ocean").removeClass().addClass("btn btn-orange w-100")
        $("#btn-type-hawaii").removeClass().addClass("btn btn-success w-100")
        $("#btn-type-bacon").removeClass().addClass("btn btn-orange w-100")
      } else if (paramPizza == "Bacon") {
        $("#btn-type-ocean").removeClass().addClass("btn btn-orange w-100")
        $("#btn-type-hawaii").removeClass().addClass("btn btn-orange w-100")
        $("#btn-type-bacon").removeClass().addClass("btn btn-success w-100")
      }
    }
  </script>
</body>

</html>