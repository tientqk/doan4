@extends('admin.admin_layout')
@section('noidung')
<div class="right">

                    <div class="right__content">
                        <div class="right__title">Bảng điều khiển</div>
                        <p class="right__desc">Chèn thể loại</p>
                        <div class="right__formWrapper">
                            <form action="{{URL::to('/luudanhmuc')}}" method="post">
                            {{ csrf_field() }}
                                <div class="right__inputWrapper">
                                    <label for="title" >Tên Danh Mục</label>
                                    <input type="text"name="name_Danhmuc" placeholder="Tiêu đề">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="desc" >Mô tả</label>
                                    <textarea name="MoTa_Danhmuc" id="" cols="30" rows="10" placeholder="Mô tả"></textarea>
                                </div>
                                <button class="btn" name="themdanhmuc"type="submit">Thêm</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endsection