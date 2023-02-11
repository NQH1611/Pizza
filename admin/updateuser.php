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
                                <a href="./index.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Order</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./adduser.php" class="nav-link active">
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
                        <h1 class="m-0">User</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">User</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="text-center">
            <h2>CẬP NHẬT USER</h2>
            </div>
            <form action="" method="POST" id="form-send-data">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="txtusername" id="inp-username" placeholder="Nhập username">
                    <span class="form-message"></span>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="txtpassadd" id="inp-password" placeholder="Nhập password">
                    <span class="form-message"></span>
                </div>
                <div class="form-group">
                    <label for="permission">Số Điện thoại</label>
                    <select name="select-permission" class="form-control" id="select-permission">
                        <option value="1">Admin</option>
                        <option value="0">User</option>
                    </select>
                    <span class="form-message"></span>
                </div>
                <button id="btn-send-order" name="guidatupduser" class="btn btn-orange w-100 form-submit" style="background-color: orange;">Gửi</button>
            </form>
            <?php
            include('../database/config.php');
            $id = $_GET['id'];
            $updateuser = mysqli_query($conn, "SELECT * FROM users where id = $id" );

            while ($row = mysqli_fetch_assoc($updateuser)) {
            ?>
                <script>
                    $("#inp-username").val("<?php echo $row['username']; ?>")
                    $("#inp-password").val("<?php echo $row['password']; ?>")
                    $("#select-permission").val("<?php echo $row['permission'];?>")
                </script>
            <?php
            }
            if (!isset($_POST["guidatupduser"])) {
                $userup = "";
                $passup = "";
                $permission = "";
            } else {
                $userup = $_POST['txtusername'];
                $passup = $_POST['txtpassadd'];
                $permission = $_POST['select-permission'];
                include "../database/config.php";
                $addorders = mysqli_query($conn, "UPDATE users SET username='$userup', password='$passup', permission='$permission'  WHERE id=$id");
                echo "<script> window.location.href = 'http://localhost/pizza365/admin/adduser.php'</script>";
            }
            ?>
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
        $("#users-table").DataTable()
        var gOrderTable = $("#orders-table").DataTable();
        $(".btn-create-user").on("click", function() {
            $("#modal-add-user").modal("show")
        })
        $("#users-table").on("click", ".btn-update", function() {
            $("#modal-update-user").modal("show")
            var dataRow = getDataOrderFromButton(this);
            localStorage.setItem('iduser', dataRow[0])
        })

        function getDataOrderFromButton(paramButton) {
            var vTableRow = $(paramButton).parents("tr");
            var vUserRowData = gOrderTable.row(vTableRow).data();
            return vUserRowData;
        }
    </script>
</body>

</html>