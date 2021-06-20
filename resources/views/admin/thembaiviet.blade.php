@extends('admin.admin_layout')
@section('noidung')
<div class="right">

                    <div class="right__content">
                        <div class="right__title">Bảng điều khiển</div>
                        <p class="right__desc">thêm bài viết</p>
                        <div class="right__formWrapper">
                            <form  role="form" action="{{route('save_bv')}}" method="post"  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="right__inputWrapper">
                                    <label for="title" >tiêu đề</label>
                                    <input type="text"name="tieude" placeholder="Tiêu đề">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="desc" >bài viết</label>
                                    <textarea name="baiviet" id="" cols="30" rows="10" placeholder="baiviet"></textarea>
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="desc" >Ảnh</label>
                                    <div id="img" style="height: 100px,weight= 100px">
                                        <input type="file" name="img" multiple="">
                                    </div>
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="desc" >Thời gian</label>
                                   <input type="date" name="thoigian">
                                </div>

                                <button class="btn"type="submit">Thêm</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endsection