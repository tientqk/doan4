@extends('Home.Master.master')
@section('noidung')
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>LOẠI SẢN PHẨM </h4>
                            <ul>
                                @foreach ($danhmuc as $item)
                                    <li><a href="{{ URL::to('/sanpham_loaisp/' . $item->id) }}"
                                            style="font-size: 20px">{{ $item->tenloai }}</a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="row">
                        @foreach ($sanpham as $item)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg"
                                        data-setbg="http://localhost/blog/public/img/product/details/{{ $item->hinhanh }}">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                            <li><a href="#" data-url="{{ asset('add-to-cart/' . $item->masp) }}"><i
                                                        class="fa fa-shopping-cart add-to-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="{{ route('detail', ['id' => $item->masp]) }}">{{ $item->tensp }}</a></h6>
                                        <h5>{{ $item->gia }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="product__pagination">
                        {{ $sanpham->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Footer Section Begin -->
@endsection
