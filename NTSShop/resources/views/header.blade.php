<header class="site-navbar py-1" role="banner">

    <div class="container">
        <div class="row align-items-center">

            <div class="col-6 col-xl-3">
                <h1 class="mb-0"><a href="{{route('trang-chu')}}" class="text-black h2 mb-0">NTS Shop</a></h1>
            </div>
            <div class="col-10 col-md-5 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

                    <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                        <li>
                            <a href="{{route('trang-chu')}}">Trang chủ</a>
                        </li>
                        <li class="has-children">
                            <a>Sản phẩm</a>
                            <ul class="dropdown">
                                @foreach($loai_sp as $loai)
                                <li><a href="{{route('loaisanpham',$loai->id)}}">{{$loai->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>


                        <li><a href="{{route('gioithieu')}}">Giới thiệu</a></li>


                        <li><a href="{{route('lienhe')}}">Liên hệ</a></li>

                    </ul>
                </nav>
            </div>

            <div class="col-6 col-xl-4 text-right">
                <div class="d-none d-xl-inline-block">
                    <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                        @if(Auth::check())
                        <a href="#" class="pl-0 pr-3 text-black">Chào bạn {{Auth::user()->full_name}}</a>
                        </li>
                        <li>
                            <a href="{{route('logout')}}" class="pl-3 pr-3 text-black">Đăng xuất</a>
                        </li>
                        @else
                        <li>
                            <a href="{{route('signup')}}" class="pl-3 pr-3 text-black">Đăng kí</a>
                        </li>
                        <li>
                            <a href="{{route('login')}}" class="pl-3 pr-3 text-black">Đăng nhập</a>
                        </li>
                        @endif
                    </ul>
                </div>

                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

            </div>

        </div>
    </div>

</header>

<nav class="navbar navbar-expand-md navbar-dark">
    <div class="container">


        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">



            <div class="input-group input-group-sm offset-7">
                <form role="search" method="get" id="searchform" action="{{route('search')}}" class="form-inline my-2 my-lg-0">
                    <input type="text" value="" name="key" id="s" class="form-control ml-4" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search..." style="height: auto;">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
                <a class="btn btn-primary text-white ml-2" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-shopping-cart"></i> Giỏ hàng
                    <span class="badge badge-light">@if(Session::has('cart')){{Session('cart')->totalQty}}@else 0  @endif</span>
                </a>
                <div class="dropdown">

                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenu2">
                        <div class="container">
                            <table id="cart" class="table table-hover table-condensed">
                                <thead>
                                    <tr>
                                        <th style="width:10%">Sản phẩm</th>
                                        <th style="width:30%">Giá</th>
                                        <th style="width:8%"></th>
                                        <th style="width:42%">Giá thành</th>
                                        <th style="width:10%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(Session::has('cart')) @foreach($product_cart as $product)
                                    <tr>
                                        <td data-th="Product">
                                            <div class="row">
                                                <div class="col-sm-2 hidden-xs"><img src="source/image/product/{{$product['item']['image']}}" alt="..." style="height: 100px;" /></div>
                                                <div class="col-sm-10">

                                                </div>
                                            </div>
                                        </td>
                                        <td data-th="Price">{{$product['qty']}}*<span>@if($product['item']['promotion_price']==0){{number_format($product['item']['unit_price'])}} VNĐ @else {{number_format($product['item']['promotion_price'])}} VNĐ @endif </td>
                            <td data-th="Quantity">

                            </td>
                            <td data-th="Subtotal" class="">@if($product['item']['promotion_price']==0){{number_format($product['item']['unit_price'])}} VNĐ @else {{number_format($product['item']['promotion_price'])}} VNĐ @endif </td>
                            <td class="actions" data-th="">
                                <a class="btn btn-danger btn-sm" href="{{route('xoagiohang',$product['item']['id'])}}"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>

                        </tbody>
                        @endforeach
                        <tfoot>
                            <tr>
                                <td><strong>Tổng: @if($product['item']['promotion_price']==0){{number_format($product['item']['unit_price'])}} VNĐ @else {{number_format($product['item']['promotion_price'])}} VNĐ @endif </strong></td>
                                <td colspan="2" class="hidden-xs"></td>
                                <td class="hidden-xs"></td>
                                <td><a  class="btn btn-success btn-block text-white">Mua ngay</a></td>
                            </tr>
                        </tfoot>
                        @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</nav>


    


    </div>