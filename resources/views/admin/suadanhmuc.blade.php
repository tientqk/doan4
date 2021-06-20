@extends('admin.admin_layout')
@section('noidung')
<div class="right">

                    <div class="right__content">
                    
                        <div class="right__title">Bảng điều khiển</div>
                        <p class="right__desc">Xem thể loại</p>
                        <div class="right__table">
                            <div class="right__tableWrapper">
                                <form method="post">
                                    @csrf
                                <table>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên Loai</th>
                                            <th>Mô tả</th>
                                        </tr>
                                    </thead>
                                    
                                        <tbody>
                                            <tr>
                                                <td data-label="STT">{{ $danhmuc->id }}</td>
                                                <td data-label="Tiêu đề"><input type="text" name="tenloai" value="{{ $danhmuc->tenloai }}"></td>
                                                <td data-label="Mô tả"><input type="text" name="mota" value="{{ $danhmuc->mota }}"></td>
                                            </tr>
                                        </tbody>
                                        
                                </table>
                                <button type="submit" class="btn btn-danger">Sua</button>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection