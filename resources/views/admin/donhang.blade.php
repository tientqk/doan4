@extends('admin.admin_layout')
@section('noidung')
<div class="right">
    <div class="right__content">
        <div class="right__title">Bảng điều khiển</div>
        <p class="right__desc">Xem đơn hàng</p>
        <div class="right__table">
            <div class="right__tableWrapper">
                <table>
                    <thead>

                        <tr>
                           
                            <th>tên</th>
                            <th>sdt</th>
                            <th>địa chỉ</th>
                            <th>chức năng</th>
                          
                        </tr>
                    </thead>
            
                    <tbody>
                        @foreach ($order_mn as $item)
                        <tr>
                            <td data-label="STT">{{$item->name}}</td>
                            <td data-label="Email">{{$item->sdt}}</td>
                            <td data-label="Số hoá đơn">{{$item->diachi}}</td>
                            <td data-label="Thanh toán" class="right__confirm">
                                <a href="{{URL::to('/chitiet-donhang/' . $item->id)}}" class="right__iconTable">chi tiết</a><br>
                                <a href="" class="right__iconTable"><img src="assets/icon-x.svg" alt="">xóa</a>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection