@extends('master') @section('content')
<div class="slide-one-item home-slider owl-carousel">
    @foreach($slide as $slide)
    <div class="site-blocks-cover overlay" style="background-image: url('source/image/slide/{{$slide->image}}');" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="site-section">

    <div class="container">
        <h4 class="font-weight-light">Sản phẩm mới</h4>
        <hr>
        <div class="row">
            @foreach($new_product as $new)
            <div class="col col-lg-3 mb-4 mb-lg-4">
                <a href="{{route('chitietsanpham',$new->id)}}" class="unit-1 text-center">
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

            </div>

            @endforeach
        </div>
        <div class="row">{{$new_product->links()}}</div>
    </div>

    <div class="site-section">

        <div class="container">
            <h4 class="font-weight-light">Sản phẩm khuyến mãi</h4>
            <hr>
            <div class="row">
                @foreach($sanpham_khuyenmai as $spkm)
                <div class="col col-lg-3 mb-4 mb-lg-4">
                    <a href="{{route('chitietsanpham',$spkm->id)}}" class="unit-1 text-center">
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
                </div>

                @endforeach
            </div>
            <div class="row">{{$sanpham_khuyenmai->links()}}</div>
        </div>


    </div>
    <!-- #content -->
</div>
<!-- .container -->
@endsection