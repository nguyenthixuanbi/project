<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>SB Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="Assets/Frontend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />

    <!-- Page level plugin CSS-->
    <link href="Assets/Frontend/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" type="text/css" href="Assets/Frontend/"> -->
    <!-- Custom styles for this template-->
    <link href="Assets/Frontend/css/sb-admin.css" rel="stylesheet" />
    <link rel="stylesheet" href="Assets/Frontend/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css">
    <script type="text/javascript" src="Assets/Backend/ckeditor/ckeditor.js"></script>
  </head>

  <body id="page-top">
    <!-- nav  bar  -->
    <nav class="navbar navbar-expand navbar-light  bg-white static-top">
      <a class="navbar-brand " href="index.html"
        ><img src="https://www.haui.edu.vn//media/73/t73821.jpg" width="50px" height="50px"
      /></a>
      <h3 class="order-1 order-sm-0 text-dark" style="font-family: Calibri; font-size: 25px">
        GHI CHÚ VÀ NHẮC VIỆC
      </h3>
      <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"></div>
      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="alertsDropdown"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
          <span class="badge badge-danger">9+</span>
            <i class="fas fa-bell fa-fw"></i>
            
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="userDropdown"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
          <!-- <span class="badge badge-danger">9+</span> -->
            <i class="fas fa-user-circle fa-fw"></i>

          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <!-- <a class="dropdown-item" href="#">Activity Log</a> -->
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"
              >Logout</a
            >
          </div>
        </li>
      </ul>
    </nav>

    <div id="wrapper">
      <!-- Sidebar -->
      <!-- <link rel="import" href="sidebar.html" > -->
      <ul class="sidebar navbar-nav bg-light">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-home text-dark"></i>
            <span class="text-dark" style="font-family: Calibri; font-size: 18px ;">Trang chủ</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="index.php?controller=remindWork">
            <i class="fas fa-clock text-dark"></i>
            <span class="text-dark" style="font-family: Calibri; font-size: 18px ;">Nhắc việc</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?controller=note">
            <i class="fa fa-book text-dark"></i>
            <span style="font-family: Calibri; font-size: 18px ;" class="text-dark">Ghi chú</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table text-dark"></i>
            <span
              class="text-dark"
              style="font-family: Calibri; font-size: 18px ;"
              href="charts.html"
              >Lịch</span
            ></a
          >
        </li>
      </ul>

      <div id="content-wrapper" class="bg-dark_light">
      <?php echo $this->view; ?>
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Nhóm 9 Phần mềm hướng dịch vụ</span>
              <br />
              <br />
              <span>Giáo viên hướng dẫn: Thầy giáo Hoàng Quang Huy</span>
            </div>
          </div>
        </footer>
      </div>
      <!-- /.content-wrapper -->
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div
      class="modal fade"
      id="logoutModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="Assets/Frontend/vendor/jquery/jquery.min.js"></script>
    <script src="Assets/Frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="Assets/Frontend/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="Assets/Frontend/vendor/chart.js/Chart.min.js"></script>
    <script src="Assets/Frontend/vendor/datatables/jquery.dataTables.js"></script>
    <script src="Assets/Frontend/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="Assets/Frontend/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="Assets/Frontend/js/demo/datatables-demo.js"></script>
    <script src="Assets/Frontend/js/demo/chart-area-demo.js"></script>
    <script src="Assets/Frontend/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.min.js"></script>
  </body>
</html>
