@extends('master') @section('content')
<div class="site-blocks-cover inner-page-cover" style="background-image: url(source/image/background.jfif);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                <h1 class="text-white font-weight-light">Đặt Sản Phẩm</h1>
                <div><a href="{{route('trang-chu')}}">Trang chủ</a> <span class="mx-2 text-white">&bullet;</span> <span class="text-white">Chi tiết sản phẩm</span></div>

            </div>
        </div>
    </div>
</div>
<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="p-4 mb-3 bg-white">
                    <img src="source/image/product/{{$sanpham->image}}" alt="Image" class="img-fluid mb-4 rounded">
                    <h3 class="h5 text-black mb-3">{{$sanpham->name}}</h3>
                    @if($sanpham->promotion_price==0)
                    <strong class="text-primary mb-2 d-block">{{number_format($sanpham->unit_price)}} VNĐ</strong> @else
                    <strong class="mb-2 d-block"><del class=>{{number_format($sanpham->unit_price)}} VNĐ</del></strong>
                    <strong class="text-primary mb-2 d-block">{{number_format($sanpham->promotion_price)}} VNĐ</strong> @endif
                    <p><a href="{{route('themgiohang',$sanpham->id)}}" class="btn btn-primary px-4 py-2 text-white"><i class="fas fa-shopping-cart"></i> Thêm Vào Giỏ Hàng</a></p>
                </div>

            </div>
            <div class="col-md-6 mb-5">
                <div class="p-4 mb-3 bg-white">
                    <h3 class="h5 text-black mb-3">MÔ TẢ</h3>
                    <p>{{$sanpham->description}}</p>
                </div>



            </div>

        </div>
    </div>
</div>
<!-- .container -->
@endsection