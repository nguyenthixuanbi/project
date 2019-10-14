<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Ghi chú và nhắc việc</title>
    <link href="Assets/Frontend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="Assets/Frontend/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet" />
    <link href="Assets/Frontend/css/sb-admin.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="Assets/Frontend/css/style.css">
    <script type="text/javascript" src="Assets/Backend/ckeditor/ckeditor.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="Assets/Frontend/js/js.js"></script>
  </head>

  <body id="page-top">
    <!-- nav  bar  -->
    <nav class="navbar navbar-expand navbar-light  bg-white static-top">
      <a class="navbar-brand " href="index.html"
        ><img src="http://sahipro.com/new2/wp-content/uploads/2014/11/time-icon.png" width="50px" height="50px"
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
            <a class="dropdown-item" href="#">Thông báo</a>
            <a class="dropdown-item" href="#">Thông báo khác</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">....</a>
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
            <a class="dropdown-item" href="#">Cài đặt</a>
            <!-- <a class="dropdown-item" href="#">Activity Log</a> -->
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="index.php?area=Frontend&controller=Logout&action=doLogout"
              >Đăng xuất</a
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
          <a class="nav-link" href="index.php?controller=HomeView">
            <i class="fas fa-home text-dark"></i>
            <span class="text-dark" style="font-family: Calibri; font-size: 18px ;">Trang chủ</span>
          </a>
        </li>
        <li class="nav-item active nv">
          <a class="nav-link" href="#">
            <i class="fas fa-clock text-dark"></i>
            <span class="text-dark" style="font-family: Calibri; font-size: 18px ;">Nhắc việc</span>
          </a>
          <ul class="navbar-nav bg-light dc">
            <li class="nav-item"><a class="nav-link text-dark" href="#"><i class="fab fa-leanpub"></i> CV nhắc</a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="index.php?controller=remindWork"><i class="fab fa-audible"></i> CV tự tạo</a></li>
          </ul>
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
              href="#"
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
    <script src="Assets/Frontend/vendor/jquery/jquery.min.js"></script>
    <script src="Assets/Frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Assets/Frontend/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="Assets/Frontend/vendor/chart.js/Chart.min.js"></script>
    <script src="Assets/Frontend/vendor/datatables/jquery.dataTables.js"></script>
    <script src="Assets/Frontend/vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="Assets/Frontend/js/sb-admin.min.js"></script>
    <script src="Assets/Frontend/js/demo/datatables-demo.js"></script>
  </body>
</html>
