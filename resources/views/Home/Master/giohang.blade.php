@extends('Home.Master.master')
@section('noidung')
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2> GIỎ HÀNG </h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Trang Chủ</a>
                        <span>Giỏ Hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product">Sản Phẩm </th>
                                <th>Gía Bán </th>
                                <th>Số Lượng</th>
                                <th>Thành Tiền </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (Cart::Content() as $item)
                            <tr>
                                <td class="shoping__cart__item">
                                    <img src="http://localhost/blog/public/img/product/{{ $item->options->img }}" alt="">
                                    <h5>{{ $item->name }}</h5>
                                </td>
                                <td class="shoping__cart__price"> 
                                    {{ number_format($item->price, 0, '', ',') }} VND
                                </td>
                                <td class="shoping__cart__quantity">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input onchange="update_qty('{{ $item->rowId }}',this.value)"
                                            type="number" id="quantity" name="quantity"
                                            value="{{ $item->qty }}">                                        </div>
                                    </div>
                                </td>
                                <td class="shoping__cart__total">
                                    {{ number_format($item->price * $item->qty, 0, '', ',') }} VND
                                </td>
                                <td class="shoping__cart__item__close">
                                    <a href="{{ route('removecart', ['id' => $item->rowId]) }}"><span class="icon_close"></span></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">
                    <a href="#" class="primary-btn cart-btn">Tiếp Tục Mua Sắm </a>
                    <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                       Cập Nhật Giỏ Hàng</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__continue">
                    <div class="shoping__discount">
                        <h5>Mã Gỉam Gía </h5>
                        <form action="#">
                            <input type="text" placeholder="Enter your coupon code">
                            <button type="submit" class="site-btn"> áp dụng </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Tổng số giỏ hàng</h5>
                    <ul>
                        <li>Thành Tiền  <span>{{ number_format(str_replace(',', '', Cart::subtotal()), 0, '', ',') }}
                            VNĐ</span></li>
                    </ul>
                    <a href="{{URL::to('thongtinkh')}}" class="primary-btn">Tiến hành thanh toán  </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shoping Cart Section End -->
@section('sc')
    @parent
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        function del_cart(name) {
            return confirm('Bạn muốn xóa khỏi giỏ hàng: ' + name + ' ?');
        }
        function update_qty(rowId, qty) {
            $.get('http://localhost/blog/public/updatecart/' + rowId + '/' + qty,
                function() {
                    window.location.reload();
                }
            );
        }
    </script>
@show
@endsection