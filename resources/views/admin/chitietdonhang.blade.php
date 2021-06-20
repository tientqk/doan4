@extends('admin.admin_layout')
@section('noidung')
<div class="right">
    <div class="right__content">
        <div class="right__title">Bảng điều khiển</div>
        <p class="right__desc">Chi Tiết Đơn Hàng</p>
        <div class="right__table">
            <div class="right__tableWrapper">
                <table>
                    <thead>

                        <tr>
                           
                            <th>Tên Sản Phẩm </th>
                            <th>Gía </th>
                            <th>Số Lượng</th>
                            <th>Ảnh </th>
                            <th>Tổng Tiên</th>
                          
                        </tr>
                    </thead>
            
                    <tbody>
                        @foreach ($order_detail as $item)
                        <tr>
                            <td data-label="Tên Sản Phẩm">{{$item->name}}</td>
                            <td data-label="Gía">{{$item->price}}</td>
                            <td data-label="Số Lượng">{{$item->quantity}}</td>
                            <td data-label="Hình Ảnh"><img src="{{url('/')}}/img/product/details/{{$item->image}}" alt="" height="100px" width="100px"></td>
                            <td data-label="Tổng Tiền">{{$item->price*$item->quantity }}VNĐ</td>
                                
                            
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection