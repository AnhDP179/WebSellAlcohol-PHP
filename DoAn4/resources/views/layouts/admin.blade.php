<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


  <title>Liquor Store</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="button/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset("css/sb-admin-2.min.css")}}" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="{{asset("vendor/datatables/dataTables.bootstrap4.min.css")}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route("admin_index")}}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-button mx-3">Liquor Store</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{route("admin_index")}}">
          <i class="fa fa-home" aria-hidden="true"></i>
              <span>Trang chính</span></a>
      </li>
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="{{route("admin_product")}}">
            <i class="fa fa-folder" aria-hidden="true"></i>         
             <span>Loại rượu</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route("admin_product_single")}}">
            <i class="fa fa-folder-o" aria-hidden="true"></i>          
            <span>Rượu</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route("admin_picture")}}">
            <i class="fa fa-picture-o" aria-hidden="true"></i>
              <span>Hình ảnh</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route("admin_customer")}}">
          <i class="fa fa-users" aria-hidden="true"></i>
            <span>Khách hàng</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route("bill.index")}}">
          <i class="fa fa-credit-card-alt" aria-hidden="true"></i>           
          <span>Hóa đơn</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route("role.index")}}">
          <i class="fa fa-user-plus" aria-hidden="true"></i>           
          <span>Quyền</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route("user.index")}}">
          <i class="fa fa-user-circle" aria-hidden="true"></i>            
          <span>Người dùng</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <form class="form-inline">
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bar-chart" aria-hidden="true"></i>
            </button>
          </form>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="button" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter"></span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Trung tâm cảnh báo
                </h6>
                <a class="dropdown-item button-center small button-gray-500" href="#">Hiện Tất cả Cảnh báo</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Trung tâm thông báo
                </h6>
                <a class="dropdown-item button-center small button-gray-500" href="#">Đọc thêm thư</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline button-gray-600 small">Phạm Duy Anh </span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 button-gray-400"></i>
                  Thông tin cá nhân
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 button-gray-400"></i>
                  Cài đặt
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 button-gray-400"></i>
                 Nhật kí hoạt động
                </a>
                <div class="dropdown-divider"></div>
                    <form action="{{ route('login') }}" method="post">
                       @csrf
                      <a href="{{ Auth::logout() }}" class="left__title"><img src="{{asset('assets/icon-logout.svg')}}" alt="">Đăng Xuất</a>
                   </form>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        @yield('admin_content')
        
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">

        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Bạn có chắc muốn rời đi?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Chọn "Đăng xuất" bên dưới nếu bạn đã sẵn sàng kết thúc phiên hiện tại của mình.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
          <a class="btn btn-primary" href="login.html">Đăng xuất</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset("vendor/jquery/jquery.min.js")}}"></script>
  <script src="{{asset("vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset("vendor/jquery-easing/jquery.easing.min.js") }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset("js/sb-admin-2.min.js") }}"></script>

  <!-- Page level plugins -->
  <script src="{{asset("vendor/datatables/jquery.dataTables.min.js") }}"></script>
  <script src="{{asset("vendor/datatables/dataTables.bootstrap4.min.js") }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset("js/demo/datatables-demo.js") }}"></script>

</body>

</html>
