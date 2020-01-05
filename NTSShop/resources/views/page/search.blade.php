@extends('master') @section('content')

<div class="site-blocks-cover inner-page-cover" style="background-image: url('source/image/background.jfif');" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                <h1 class="text-white font-weight-light">Tìm kiếm</h1>
                <div><a href="{{route('trang-chu')}}">Trang chủ</a> <span class="mx-2 text-white">&bullet;</span> <span class="text-white">Tìm kiếm</span></div>

            </div>
        </div>
    </div>
</div>

<div class="site-section">

    <div class="container">
        <div class="beta-products-details">
            <h4 class="pull-left">Tìm thấy {{count($product)}}</h4>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            @foreach($product as $new)
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-4">
                <a href="{{route('chitietsanpham',$new->id)}}" class="unit-1 text-center">
                    <img src="source/image/product/{{$new->image}}" alt="Image" class="img-fluid" style="height: 250px;">
                    <div class="unit-1-text">
                        <h3 class="unit-1-heading">{{$new->name}}</h3>
                        @if($new->promotion_price==0)
                        <strong class="text-primary mb-2 d-block">{{number_format($new->unit_price)}} VNĐ</strong>
                        @else
                        <strong class="mb-2 d-block"><del class=>{{number_format($new->unit_price)}} VNĐ</del></strong>
                        <strong class="text-primary mb-2 d-block">{{number_format($new->promotion_price)}} VNĐ</strong>
                        @endif
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

</div>

<!-- .container -->
@endsection