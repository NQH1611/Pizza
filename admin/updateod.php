<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý đơn hàng</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
    <!-- Data Table-->
    <script src="plugins/jquery/jquery.min.js"></script>

</head>

<body>
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60" />
        </div>
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../logout.php" onclick="" class="nav-link"><?php echo $_SESSION["username"]; ?></a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li> -->
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" />

                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside style="min-height: 100vh;" class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="info">
                    <a href="#" class="d-block text-center">PIZZA 365</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Manage
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="./index.php" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Order</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./adduser.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>User</p>
                                </a>
                            </li>
                    </li>

                </ul>
                </li>
                <!--  -->
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Order</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Order</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="text-center">
                <h2>CẬP NHẬT ĐƠN HÀNG</h2>
            </div>
            <form action="" method="POST" id="form-send-data">
                <div class="form-group">
                    <label for="">Kích Cỡ</label>
                    <select class="form-control" name="select-kichco" id="select-kichco">
                        <option value="0">Chọn Kích Cỡ</option>
                        <?php
                        include('../database/config.php');
                        $menuSelect = mysqli_query($conn, "SELECT kichCo FROM menu");
                        while ($rowSelect = mysqli_fetch_assoc($menuSelect)) {
                        ?>
                            <option value="<?php echo $rowSelect["kichCo"]; ?>"><?php echo $rowSelect["kichCo"]; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Chọn Loại Pizza</label>
                    <select name="select-loai" id="select-loai" class="form-control">
                        <option value="0">Chọn Loại Pizza</option>
                        <option value="OCEAN">OCEAN</option>
                        <option value="HAWAII">HAWAII</option>
                        <option value="BACON">BACON</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Loại Nước Uống</label>
                    <select name="select-drink" id="select-drinks" class="form-control">
                        <option value="0">--Tất cả loại nước uống</option>
                        <?php
                        include('../database/config.php');
                        $drink = mysqli_query($conn, "SELECT madouong, tendouong FROM drinks");
                        while ($rowdrink = mysqli_fetch_assoc($drink)) {
                        ?>
                            <option value="<?php echo $rowdrink["madouong"]; ?>"><?php echo $rowdrink["tendouong"]; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="fullname">Tên</label>
                    <input type="text" class="form-control" name="txtTen" id="inp-fullname" placeholder="Nhập Tên">
                    <span class="form-message"></span>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="txtEmail" id="inp-email" placeholder="Nhập Email">
                    <span class="form-message"></span>
                </div>
                <div class="form-group">
                    <label for="dien-thoai">Số Điện thoại</label>
                    <input type="text" class="form-control" name="txtSDT" id="inp-dien-thoai" placeholder="Nhập Số Điện thoại">
                    <span class="form-message"></span>
                </div>
                <div class="form-group">
                    <label for="dia-chi">Địa chỉ</label>
                    <input type="text" class="form-control" name="txtDiaChi" id="inp-dia-chi" placeholder="Nhập Địa chỉ">
                    <span class="form-message"></span>
                </div>
                <div class="form-group">
                    <label for="message">Lời nhắn</label>
                    <input type="text" class="form-control" name="txtLoiNhan" id="inp-message" placeholder="Nhập Lời nhắn">
                </div>
                <button id="btn-send-order" name="guidataupdate" class="btn btn-orange w-100 form-submit" style="background-color: orange;">Gửi</button>
            </form>
            <?php
            include('../database/config.php');
            $id = $_GET['id'];
            $update = mysqli_query($conn, "SELECT * FROM orders where id = $id");

            while ($row = mysqli_fetch_assoc($update)) {
            ?>
                <script>
                    $("#select-kichco").val("<?php echo $row['menuname']; ?>")
                    $("#select-loai").val("<?php echo $row['loaipizza']; ?>")
                    $("#select-drinks").val("<?php echo $row['loainuocuong']; ?>")
                    $("#inp-fullname").val("<?php echo $row['hovaten']; ?>")
                    $("#inp-dien-thoai").val("<?php echo $row['dienthoai']; ?>")
                    $("#inp-email").val("<?php echo $row['email']; ?>")
                    $("#inp-dia-chi").val("<?php echo $row['diachi']; ?>")
                    $("#inp-message").val("<?php echo $row['loinhan']; ?>")
                </script>
            <?php
            }
            if (!isset($_POST["guidataupdate"])) {
                $tenKH = "";
                $email = "";
                $dienthoai = "";
                $loiNhan = "";
                $drink = "";
                $kichCo = "";
                $selectloai = "";
            } else {
                $tenKH = $_POST["txtTen"];
                $email = $_POST["txtEmail"];
                $dienthoai = $_POST["txtSDT"];
                $diaChi = $_POST["txtDiaChi"];
                $loiNhan = $_POST["txtLoiNhan"];
                $userdn = $_SESSION["username"];
                $drink = $_POST["select-drink"];
                $kichCo = $_POST['select-kichco'];
                $selectloai = $_POST['select-loai'];
                include "../database/config.php";
                $addorders = mysqli_query($conn, "UPDATE orders SET menuname='$kichCo', loaipizza='$selectloai', loainuocuong='$drink', hovaten = '$tenKH', email = '$email', dienthoai = '$dienthoai', diachi='$diaChi', loinhan='$loiNhan'  WHERE id=$id ");
                echo "<script>window.location.href = 'http://localhost/pizza365/admin/index.php'</script>";
            }
            ?>
        </section>
        <!-- /.content -->
        <!-- /.content-wrapper -->
    </div>
    </div>

    <!-- jQuery -->

    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="./plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
</body>

</html>