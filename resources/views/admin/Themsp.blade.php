@extends('admin.admin_layout')
@section('noidung')
<div class="right">

                    <div class="right__content">
                        <div class="right__title">Bảng điều khiển</div>
                        <p class="right__desc">thêm bài viết</p>
                        <div class="right__formWrapper">
                            {{-- @foreach ($edit as $item) --}}
                                
                  
                            <form  role="form" action="{{route('save')}}" method="post"  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="right__inputWrapper">
                                    <label for="title" >Tên sản phẩm </label>
                                    <input type="text"name="tensp" placeholder="tên sản phẩm">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="desc" >Ảnh</label>
                                    <div id="img" style="height: 100px,weight= 100px">
                                        <input type="file" name="hinhanh" multiple="">
                                    </div>
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="desc">giá </label>
                                    <input type="text" name="gia">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="desc" >Số lượng </label>
                                   <input type="number" name="soluong">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="desc" >Mô Tả</label>
                                    <textarea name="mota" id="" cols="30" rows="10" placeholder="Mô tả"></textarea>
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="desc" >Danh Mục </label>
                                    <select name="cat_id">
                                        @foreach ($danhmuc as $item)
                                        <option value="{{$item->id}}">{{$item->tenloai}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button class="btn"type="submit">Thêm</button>
                            </form>
                            {{-- @endforeach --}}
                        </div>
                    </div>
                </div>
                @endsection