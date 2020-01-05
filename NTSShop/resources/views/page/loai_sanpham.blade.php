@extends('master') @section('content')
<div class="site-blocks-cover inner-page-cover" style="background-image: url('source/image/background.jfif');" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                <h1 class="text-white font-weight-light">{{$loai_sp->name}}</h1>
                <div><a href="{{route('trang-chu')}}">Trang chủ</a> <span class="mx-2 text-white">&bullet;</span> <span class="text-white">{{$loai_sp->name}}</span></div>

            </div>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container">
        <div class="row">
            @foreach($sp_theoloai as $sp)
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-4">
                <a href="{{route('chitietsanpham',$sp->id)}}" class="unit-1 text-center">
                    <img src="source/image/product/{{$sp->image}}" alt="Image" class="img-fluid" style="height: 250px;">
                    <div class="unit-1-text">
                            @if($sp->promotion_price==0)
                        <strong class="text-primary mb-2 d-block">{{number_format($sp->unit_price)}} VNĐ</strong>
                        @else
                        <strong class="mb-2 d-block"><del class=>{{number_format($sp->unit_price)}} VNĐ</del></strong>
                        <strong class="text-primary mb-2 d-block">{{number_format($sp->promotion_price)}} VNĐ</strong>
                        @endif
                        <h3 class="unit-1-heading">{{$sp->name}}</h3>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

</div>

<div class="site-section">
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary "><i class="fas fa-tshirt"></i></span></div>
                    <div>
                        <h3 class="py-3" >Sản Phẩm</h3>
                        <p>Đa dạng, chất lượng</p>
                        <p>Đạt chất lượng tốt nhất</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary"><i class="fas fa-dollar-sign"></i></span></div>
                    <div>
                        <h3 class="py-3">Giá Cả</h3>
                        <p>Luôn có mức giá tốt nhất</p>
                        <p>Bảo đảm giá tốt</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary"><i class="far fa-clipboard"></i></span></div>
                    <div >
                        <h3 class="py-3">Đặt Hàng</h3>
                        <p>Dễ dàng và nhanh chóng</p>
                        <p>Đặt hàng chỉ với 3 bước</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- .container -->
@endsection