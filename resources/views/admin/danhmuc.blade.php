@extends('admin.admin_layout')
@section('noidung')
<div class="right">

                    <div class="right__content">
                    <button class="btn"type="submit" ><a href="{{URL::to('/themdanhmuc')}}">Thêm</a></button>
                        <div class="right__title">Bảng điều khiển</div>
                        <p class="right__desc">Xem thể loại</p>
                        <div class="right__table">
                            <div class="right__tableWrapper">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên Loai</th>
                                            <th>Mô tả</th>
                                            <th>Sửa</th>
                                            <th>Xoá</th>
                                        </tr>
                                    </thead>
                                    
                                    @foreach ( $danhmuc as $key )
                                    <tbody>
                                        <tr>
                                            <td data-label="STT">{{ $key->id }}</td>
                                            <td data-label="Tiêu đề">{{ $key->tenloai }}</td>
                                            <td data-label="Mô tả">{{$key->mota}}</td>
                                            <td data-label="Sửa" class="right__iconTable"><a href="{{route('edit',['id'=>$key->id])}}"><img src="assets/icon-edit.svg" alt=""></a></td>
                                            <td data-label="Xoá" class="right__iconTable"><a href="{{ URL::to('/xoa/' . $key->id) }}"><img src="assets/icon-trash-black.svg" alt=""></a></td>
                                        </tr>
                                        
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection