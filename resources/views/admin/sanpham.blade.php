@extends('admin.admin_layout')
@section('noidung')
<div class="right">
                    <div class="right__content">
                        <button class="btn"type="submit" ><a href="{{URL::to('/themsanpham')}}">Thêm</a></button>
                        <div class="right__title">Bảng điều khiển</div>
                        <p class="right__desc">Xem sản phẩm</p>
                        <div class="right__table">
                            <div class="right__tableWrapper">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Hình ảnh</th>
                                            <th>Giá SP</th>
                                            <th>Số lượng</th>
                                            <th>Mô tả </th>
                                            
                                            <th>Sửa</th>
                                            <th>Xoá</th>
                                        </tr>
                                    </thead>
                            
                                    <tbody>
                                        @foreach ($sanpham as $iteam )
                                        <tr>
                                            <td data-label="STT">{{$iteam->masp}}</td>
                                            <td data-label="Tên sản phẩm">{{$iteam->tensp}} </td>
                                            <td data-label="Hình ảnh"><img src="{{url('/')}}/img/product/details/{{$iteam->hinhanh}}" alt="" height="100px" width="100px"></td>
                                            <td data-label="Giá SP">{{number_format($iteam->gia,0,"",",")}} VND</td>
                                            <td data-label="Đã bán">{{$iteam->soluong}}</td>
                                            <td data-label="Mô tả">{{$iteam->mota}} </td>
                                           
                                            <td data-label="Sửa" class="right__iconTable"><a href="{{URL::to ('/suasp/' . $iteam->masp)}}"><img src="assets/icon-edit.svg" alt=""></a></td>
                                            <td data-label="Xoá" class="right__iconTable"><a href="{{URL::to ('/xoasp/' . $iteam->masp)}}"><img src="assets/icon-trash-black.svg" alt=""></a></td>
                                        </tr> 
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection