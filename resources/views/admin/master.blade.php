<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="base-url" content="{{url('/')}}">
    <!-- Tag icon --> 
    <link rel="shortcut icon" type="image/x-icon" href="{{url('asset/favicon.ico')}}">
    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="{{url('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="{{url('vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{url('vendor/admin-template/sb-admin-2.css')}}" rel="stylesheet">
    
    
    @section('css')
    @show
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-text mx-3">Admin Controller</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Quản lý sách
            </div>
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/warehouse')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>Kho sách</span></a>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Thông tin sách</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{url('admin/author')}}">Tác giả</a>
                        <a class="collapse-item" href="{{url('admin/translator')}}">Dịch giả</a>
                        <a class="collapse-item" href="{{url('admin/publisher')}}">Nhà xuất bản</a>
                        <a class="collapse-item" href="{{url('admin/publishing-company')}}">Nhà phát hành</a>
                        <a class="collapse-item" href="{{url('admin/language')}}">Ngôn ngữ</a>
                        <a class="collapse-item" href="{{url('admin/age')}}">Độ tuổi</a>
                        <a class="collapse-item" href="{{url('admin/topic')}}">Chủ đề</a>
                        <a class="collapse-item" href="{{url('admin/category')}}">Thể loại</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                <i class="fas fa-fw fa-cog"></i>
                <span>Đặt hàng</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{url('admin/supplier')}}">Nhà cung cấp</a>
                        <a class="collapse-item" href="{{url('admin/goods-receipt-order')}}">Đơn nhập hàng</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Bán hàng
            </div>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/orders')}}">
                <i class="fas fa-fw fa-folder"></i>
                <span>Đơn hàng</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/advertiserment')}}">
                <i class="fas fa-fw fa-folder"></i>
                <span>Quảng cáo</span>
                </a>
            </li>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/comments')}}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Bình luận</span></a>
            </li>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/questions')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>Câu hỏi</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Quản lý nhân viên
            </div>

            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/admin')}}">
                <i class="fas fa-fw fa-folder"></i>
                <span>Nhân viên</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/role')}}">
                <i class="fas fa-fw fa-folder"></i>
                <span>Phân quyền</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::guard('admin')->user()->username}}</span>
                            <img class="img-profile rounded-circle" src="{{url('asset/admin-avt.jpg')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">@yield('pageheader')</h1>
                    @section('content')
					@show
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; bookstore.com</span>
                    </div>
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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{url('admin/logout')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- notify modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="notify-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thông báo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer">
                    <button id="btn-notify-modal" type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('vendor/jquery/jquery.form.min.js')}}"></script>
    <script src="{{url('vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{url('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{url('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{url('js/admin/sb-admin-2.min.js')}}"></script>  

    <script>
        $( document ).ready(function() {
            if('{{count($errors)}}' > 0){

                var errors = <?php echo json_encode($errors->all()); ?>;
                var htmlError = "";
                errors.forEach(function(item){
                    console.log(item);
                    htmlError +=  "<li>"+item+"</li>";
                });

                htmlError = "<ul>"+htmlError+"</ul>";

                $('#notify-modal').find('.modal-title').html('Lỗi');
                $('#notify-modal').find('.modal-body').html(htmlError);
                $('#notify-modal').modal('show');
            }   

            if('{{Session::has('message')}}'){
                $('#notify-modal').find('.modal-title').html('Thông báo');
                $('#notify-modal').find('.modal-body').html('{{Session::get('message')}}');
                $('#notify-modal').modal('show');
            }   

            $('#btn-notify-modal').click(function(){
                $('#notify-modal').find('.modal-title').html('');
                $('#notify-modal').find('.modal-body').html('');
            })
        });
    </script>

    <input type="hidden" name="iscanedit" id="iscanedit" value="{{$can_edit}}">
    <input type="hidden" name="iscandelete" id="iscandelete" value="{{$can_delete}}">

    @section('js')
    @show
</body>
</html>
