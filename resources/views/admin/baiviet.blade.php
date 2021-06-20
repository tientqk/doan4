@extends('admin.admin_layout')
@section('noidung')
<div class="right">

                    <div class="right__content">
                    <button class="btn"type="submit" ><a href="{{URL::to('/thembaiviet')}}">Thêm</a></button>
                        <div class="right__title">Bảng điều khiển</div>
                        <p class="right__desc">Xem baiviet</p>
                        <div class="right__table">
                            <div class="right__tableWrapper">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tiêu đề</th>
                                            <th>Bài Viết</th>
                                            <th>Hình Ảnh</th>
                                            <th>Thời gian đăng</th>
                                            <th>Sửa</th>
                                            <th>Xoá</th>
                                        </tr>
                                    </thead>
                                    
                                 @foreach ($get_newfeed as $key )
                                    <tbody>
                                        <tr>
                                            <td data-label="STT">{{ $key->id }}</td>
                                            <td data-label="Tiêu đề">{{ $key->tieude }}</td>
                                            <td data-label="Bài viết">{{$key->baiviet}}</td>
                                            <td  data-label="Hình Ảnh"><img src="{{url('/')}}/img/product/details/{{$key->img}}" alt="" height="100px" width="100px"></td>
                                            <td data-label="Thời gian đăng">{{$key->thoigian}}</td>
                                            <td data-label="Sửa" class="right__iconTable"><a href="{{(URL::to('/sua_bai/' .$key->id))}}"><img src="assets/icon-edit.svg" alt=""></a></td>
                                            <td data-label="Xoá" class="right__iconTable"><a href="{{URL::to('/xoa_bai/' . $key->id)}}"><img src="assets/icon-trash-black.svg" alt=""></a></td>
                                        </tr>
                                        
                                    </tbody>
                                 @endforeach
                                </table>
                                
                             </div>
                            </div>
                            <div class="col-sm-7 text-right text-center-xs">
                                {{$get_newfeed->fragment('foo')->links()}}
                        </div>
                    </div>
                </div>
            </div>
            @endsection