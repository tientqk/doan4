{{-- @extends('admin.admin_layout')
@section('noidung')
<div class="right">

                    <div class="right__content">
                    
                        <div class="right__title">Bảng điều khiển</div>
                        <p class="right__desc">Xem thể loại</p>
                        <div class="right__table">
                            <div class="right__tableWrapper">
                                @foreach ($edit as $item)
                                    
                               
                                <form method="post">
                                    @csrf
                                <table>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tiêu đề</th>
                                            <th>Bài Viết</th>
                                            <th>Hình Ảnh</th>
                                            <th>Thời gian đăng</th>
                                        </tr>
                                    </thead>
                                    
                                        <tbody>
                                            <tr>
                                                <td data-label="STT">{{ $item->id }}</td>
                                                <td data-label="Tiêu đề"><input type="text" name="tieude" value="{{ $item->tieude }}"></td>
                                                <td data-label="Bài Viết"><input type="text" name="baiviet" value="{{ $item->baiviet }}"></td>
                                                <td data-label="Hình Ảnh">  <input type="file" name="img" multiple=""> <img src="{{url('/')}}/img/product/details/{{$item->img}}" height="100" width="150"></td>
                                                <td data-label="Thời gian đăng">{{$item->thoigian}}</td>
                                            </tr>
                                        </tbody>
                                        
                                </table>
                                <button type="submit" class="btn btn-danger">Sua</button>
                                    </form>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection --}}
            @extends('admin.admin_layout')
@section('noidung')
<div class="right">

                    <div class="right__content">
                        <div class="right__title">Bảng điều khiển</div>
                        <p class="right__desc">sửa bài viết</p>
                        <div class="right__formWrapper">
                            @foreach ($edit as $item)
                                
                            <form  role="form" action="{{URL::to('/capnhat/'.$item->id)}}" method="post"  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="right__inputWrapper">
                                    <label for="title" >tiêu đề</label>
                                    <input type="text"name="tieude" value="{{ $item->tieude }}">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="desc" >bài viết</label>
                                    <textarea name="baiviet" id="" cols="30" rows="10" placeholder="baiviet">"{{$item->baiviet }}</textarea>
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="desc" >Ảnh</label>
                                    <div id="img" style="height: 100px,weight= 100px">
                                        <input type="file" name="img" multiple="">
                                        <img src="{{url('/')}}/img/product/details/{{$item->img}}" height="100" width="150">
                                    </div>
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="desc" >Thời gian</label>
                                   <input type="date" name="thoigian" value="{{$item->thoigian}}">+
                                </div>

                                <button class="btn"type="submit">sửa</button>
                            </form>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endsection