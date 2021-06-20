@extends('Home.Master.master')
@section('noidung')
<body>
    <section class="hero">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-11">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="{{URL::to('searching')}}"method="GET">
                                @csrf
                                <input type="text" name="keywords" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">Tìm Kiếm </button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>0355483190</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sản Phẩm Của Chúng Tôi</h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @foreach ($sanpham as $keys )
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="http://localhost/blog/public/img/product/details/{{ $keys->hinhanh }}">
                          
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="{{route('detail',['id'=>$keys->masp])}}">{{ $keys->tensp }}</a></h6>
                            <h5>{{ number_format($keys->gia) }}Đ</h5>
                        </div>
                    </div>
                </div>
                @endforeach
                {{ $sanpham->fragment('foo')->links() }}
            </div>
        </div>
    </section>
    <!-- Featured Section End --> 

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
</body>
</html>
@endsection
