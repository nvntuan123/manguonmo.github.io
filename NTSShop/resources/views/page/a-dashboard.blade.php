<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>NTS Shop</title>
    <base href="{{asset('')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">


    <link rel="stylesheet" href="source/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="source/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="source/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="source/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="source/assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="source/assets/css/bootstrap-datepicker.css">

    <script src="https://kit.fontawesome.com/d791db5051.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


    <link rel="stylesheet" href="source/assets/css/aos.css">

    <link rel="stylesheet" href="source/assets/css/style.css">
    <link rel="stylesheet" href="source/assets/css/admin.css">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('admin')}}">
                    <i class="fas fa-plane"></i>
                    <span>Quản lý sản phẩm</span></a>
            </li>




            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fas fa-user"></i>
                    <span>Quản lý thành viên</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('addsanpham')}}">
                    <i class="fas fa-plus"></i>
                    <span>Thêm sản phẩm mới</span>
                </a>

            </li>


            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
      </li> -->

            <!-- Nav Item - Charts -->
            <!-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li> -->

            <!-- Nav Item - Tables -->
            <!-- <li class="nav-item active">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li> -->

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
                    <!-- <ul class="navbar-nav ml-auto">

                       
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                           
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                            </a>
                          
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                </a>
                            </div>
                        </li>

                    </ul> -->

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="site-section">

                            <div class="container">
                                <h4 class="font-weight-light">Áo thun</h4>
                                <hr>
                                <div class="row">
                                    @foreach($new_product as $new)
                                    <div class="col col-lg-3 mb-4 mb-lg-4">
                                        <a class="unit-1 text-center">
                                        <img src="source/image/product/{{$new->image}}" alt="Image" class="img-fluid" style="height: 250px;">
                                        <div class="unit-1-text">
                                                @if($new->promotion_price==0)
                                            <strong class="text-primary mb-2 d-block">{{number_format($new->unit_price)}} VNĐ</strong>
                                            @else
                                            <strong class="mb-2 d-block"><del>{{number_format($new->unit_price)}} VNĐ</del></strong>
                                            <strong class="text-primary mb-2 d-block">{{number_format($new->promotion_price)}} VNĐ</strong>
                                            @endif
                                            <h3 class="unit-1-heading">{{$new->name}}</h3>
                                        </div>
                                    </a>
                                        <div class="col offset-1">
                                            <a href="{{route('editsanpham',$new->id)}}" class="btn btn-primary py-2 px-4 mt-2 col-5"> Sửa</a>
                                            <a href="{{route('xoa',$new->id)}}" class="btn btn-danger py-2 px-4 mt-2 col-5"> Xóa</a></div>
                                        <hr>
                                    </div>

                                    @endforeach
                                </div>
                                <div class="row">{{$new_product->links()}}</div>
                            </div>


                            <!-- #content -->
                        </div>
                        <div class="site-section">

                            <div class="container">
                                <h4 class="font-weight-light">Áo sơ mi</h4>
                                <hr>
                                <div class="row">
                                    @foreach($sanpham_khuyenmai as $spkm)
                                    <div class="col col-lg-3 mb-4 mb-lg-4">
                                        <a class="unit-1 text-center">
                                            <img src="source/image/product/{{$spkm->image}}" alt="Image" class="img-fluid" style="height: 250px;">
                                            <div class="unit-1-text">
                                                    @if($spkm->promotion_price==0)
                                                <strong class="text-primary mb-2 d-block">{{number_format($spkm->unit_price)}} VNĐ</strong>
                                                @else
                                                <strong class="mb-2 d-block"><del>{{number_format($spkm->unit_price)}} VNĐ</del></strong>
                                                <strong class="text-primary mb-2 d-block">{{number_format($spkm->promotion_price)}} VNĐ</strong>
                                                @endif
                                                <h3 class="unit-1-heading">{{$spkm->name}}</h3>
                                            </div>
                                        </a>
                                        <!-- <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="{{route('themgiohang',$new->id)}}"><i class="fas fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="product.html">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div> -->
                                        <div class="col offset-1">
                                            <a href="{{route('editsanpham',$spkm->id)}}" class="btn btn-primary py-2 px-4 mt-2 col-5"> Sửa</a>
                                            <a href="{{route('xoa',$spkm->id)}}" class="btn btn-danger py-2 px-4 mt-2 col-5"> Xóa</a></div>
                                        <hr>
                                    </div>

                                    @endforeach
                                </div>
                                <div class="row">{{$sanpham_khuyenmai->links()}}</div>
                            </div>


                        </div>
                        <div class="site-section">

                            <div class="container">
                                <h4 class="font-weight-light">Quần short</h4>
                                <hr>
                                <div class="row">
                                    @foreach($quanshort as $qs)
                                    <div class="col col-lg-3 mb-4 mb-lg-4">
                                        <a class="unit-1 text-center">
                                            <img src="source/image/product/{{$qs->image}}" alt="Image" class="img-fluid" style="height: 250px;">
                                            <div class="unit-1-text">
                                                    @if($qs->promotion_price==0)
                                                <strong class="text-primary mb-2 d-block">{{number_format($qs->unit_price)}} VNĐ</strong>
                                                @else
                                                <strong class="mb-2 d-block"><del>{{number_format($qs->unit_price)}} VNĐ</del></strong>
                                                <strong class="text-primary mb-2 d-block">{{number_format($qs->promotion_price)}} VNĐ</strong>
                                                @endif
                                                <h3 class="unit-1-heading">{{$qs->name}}</h3>
                                            </div>
                                        </a>
                                        <!-- <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="{{route('themgiohang',$new->id)}}"><i class="fas fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="product.html">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div> -->
                                        <div class="col offset-1">
                                            <a href="{{route('editsanpham',$qs->id)}}" class="btn btn-primary py-2 px-4 mt-2 col-5"> Sửa</a>
                                            <a href="{{route('xoa',$qs->id)}}" class="btn btn-danger py-2 px-4 mt-2 col-5"> Xóa</a></div>
                                        <hr>
                                    </div>

                                    @endforeach
                                </div>
                                <div class="row">{{$quanshort->links()}}</div>
                            </div>


                        </div>
                        <div class="site-section">

                            <div class="container">
                                <h4 class="font-weight-light">Quần jean</h4>
                                <hr>
                                <div class="row">
                                    @foreach($quanjean as $qj)
                                    <div class="col col-lg-3 mb-4 mb-lg-4">
                                        <a class="unit-1 text-center">
                                            <img src="source/image/product/{{$qj->image}}" alt="Image" class="img-fluid" style="height: 250px;">
                                            <div class="unit-1-text">
                                                    @if($qj->promotion_price==0)
                                                <strong class="text-primary mb-2 d-block">{{number_format($qj->unit_price)}} VNĐ</strong>
                                                @else
                                                <strong class="mb-2 d-block"><del>{{number_format($qj->unit_price)}} VNĐ</del></strong>
                                                <strong class="text-primary mb-2 d-block">{{number_format($qj->promotion_price)}} VNĐ</strong>
                                                @endif
                                                <h3 class="unit-1-heading">{{$qj->name}}</h3>
                                            </div>
                                        </a>
                                        <!-- <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="{{route('themgiohang',$new->id)}}"><i class="fas fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="product.html">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div> -->
                                        <div class="col offset-1">
                                            <a href="{{route('editsanpham',$qj->id)}}" class="btn btn-primary py-2 px-4 mt-2 col-5"> Sửa</a>
                                            <a href="{{route('xoa',$qj->id)}}" class="btn btn-danger py-2 px-4 mt-2 col-5"> Xóa</a></div>
                                        <hr>
                                    </div>

                                    @endforeach
                                </div>
                                <div class="row">{{$quanjean->links()}}</div>
                            </div>


                        </div>
                        <div class="site-section">

                            <div class="container">
                                <h4 class="font-weight-light">Quần kaki</h4>
                                <hr>
                                <div class="row">
                                    @foreach($quankaki as $qk)
                                    <div class="col col-lg-3 mb-4 mb-lg-4">
                                        <a class="unit-1 text-center">
                                            <img src="source/image/product/{{$qk->image}}" alt="Image" class="img-fluid" style="height: 250px;">
                                            <div class="unit-1-text">
                                                    @if($qk->promotion_price==0)
                                                <strong class="text-primary mb-2 d-block">{{number_format($qk->unit_price)}} VNĐ</strong>
                                                @else
                                                <strong class="mb-2 d-block"><del>{{number_format($qk->unit_price)}} VNĐ</del></strong>
                                                <strong class="text-primary mb-2 d-block">{{number_format($qk->promotion_price)}} VNĐ</strong>
                                                @endif
                                                <h3 class="unit-1-heading">{{$qk->name}}</h3>
                                            </div>
                                        </a>
                                        <!-- <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="{{route('themgiohang',$new->id)}}"><i class="fas fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="product.html">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div> -->
                                        <div class="col offset-1">
                                            <a href="{{route('editsanpham',$qk->id)}}" class="btn btn-primary py-2 px-4 mt-2 col-5"> Sửa</a>
                                            <a href="{{route('xoa',$qk->id)}}" class="btn btn-danger py-2 px-4 mt-2 col-5"> Xóa</a></div>
                                        <hr>
                                    </div>

                                    @endforeach
                                </div>
                                <div class="row">{{$quankaki->links()}}</div>
                            </div>


                        </div>
                    </div>

                </div>
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
    <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>