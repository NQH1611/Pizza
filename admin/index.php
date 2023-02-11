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
                                <a href="./index.html" class="nav-link active">
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
            <div class="container-fluid">
                <h2 style="text-align: center">Order</h2>
                <input type="button" class="btn btn-primary btn-create-order mb-3" value="Tạo Order">
                <table class="table table-bordered text-center table-striped table-hover" id="orders-table">
                    <thead>
                        <tr>
                            <th>ORDER ID</th>
                            <th>KÍCH CỠ COMBO</th>
                            <th>LOẠI PIZZA</th>
                            <th>NƯỚC UỐNG</th>
                            <th>HỌ VÀ TÊN</th>
                            <th>EMAIL</th>
                            <th>ĐIỆN THOẠI</th>
                            <th>ĐỊA CHỈ</th>
                            <th>LỜI NHẮN</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../database/config.php";
                        $arrData = array();
                        $orders = mysqli_query($conn, "SELECT id, menuname, loaipizza, loainuocuong, hovaten, email, dienthoai, diachi, loinhan FROM orders");
                        while ($row = mysqli_fetch_assoc($orders)) {
                        ?>
                            <tr>
                                <td id="id-od"><?php echo $row["id"] ?></td>
                                <td><?php echo $row["menuname"] ?></td>
                                <td><?php echo $row["loaipizza"] ?></td>
                                <td><?php echo $row["loainuocuong"] ?></td>
                                <td><?php echo $row["hovaten"] ?></td>
                                <td><?php echo $row["email"] ?></td>
                                <td><?php echo $row["dienthoai"] ?></td>
                                <td><?php echo $row["diachi"] ?></td>
                                <td><?php echo $row["loinhan"] ?></td>
                                <td class="row"><button name="update"><a href="./updateod.php?id=<?php echo $row["id"] ?>"><i name="id" class="fas fa-edit btn-update"></i></a></button>
                                <button name="delete"><a href="./deleteod.php?id=<?php echo $row["id"] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></button></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div><!-- /.container-fluid -->
            <div class="modal fade bd-example-modal-lg" id="modal-add-order" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="col-sm-12 m-5">
                            <div class="text-center">
                                <h2>TẠO ĐƠN HÀNG</h2>
                            </div>
                            <div class="col-sm-11">
                                <?php include "../element/formadd.php" ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
        <!-- /.content-wrapper -->
    </div>
    </div>

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
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
    <script>
        $("#orders-table").DataTable()
        var gOrderTable = $("#orders-table").DataTable();
        $(".btn-create-order").on("click", function() {
            $("#modal-add-order").modal("show")
        })
        $("#orders-table").on("click", ".btn-update", function() {
            $("#modal-update-order").modal("show")
            var dataRow = getDataOrderFromButton(this);
            localStorage.setItem('id', dataRow[0])
        })
            <?php $id = "<script>setInterval(localStorage.getItem('id'),100)</script>";
                echo $id;
            ?>

        function getDataOrderFromButton(paramButton) {
            var vTableRow = $(paramButton).parents("tr");
            var vUserRowData = gOrderTable.row(vTableRow).data();
            return vUserRowData;
        }
    </script>
</body>

</html>