@extends('master') @section('content')
<div class="site-blocks-cover inner-page-cover" style="background-image: url(source/image/background.jfif);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                <h1 class="text-white font-weight-light">ĐĂNG NHẬP</h1>
                <div><a href="{{route('trang-chu')}}">Trang chủ</a> <span class="mx-2 text-white">&bullet;</span> <span class="text-white">Đăng nhập</span></div>

            </div>
        </div>
    </div>
</div>

<div class="site-section bg-light">
    <div class="container" style="width: 600px;">
        <div class="row">
            <div class="col-md-12 mb-5">
                <form action="{{route('login')}}" method="post" class="p-5 bg-white">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="col-sm-3"></div>
                    @if(Session::has('flag'))
                    <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
                    @endif
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="email">Email address*</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label for="phone">Password*</label>
                            <input type="password" name="password" required class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Đăng nhập" class="btn btn-primary py-2 px-4 text-white">
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>
<!-- .container -->
@endsection