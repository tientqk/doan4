@extends('admin.admin_layout')
@section('noidung')
<div class="right">
                    <div class="right__content">
                        <div class="right__title">Bảng điều khiển</div>
                        <p class="right__desc">Thêm sản phẩm</p>
                        <div class="right__formWrapper">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="right__inputWrapper">
                                    <label >Tên Sản Phẩm</label>
                                    <input type="text" placeholder="Tên sản phẩm...">
                                </div>
                                <div class="right__inputWrapper">
                                    <label >Đơn Giá</label>
                                    <input type="number" placeholder="Đơn giá...">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="image">Ngày cập nhật </label>
                                    <input type="datetime-local">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="image">Hình ảnh </label>
                                    <input id='img' type="file">
                                </div>
                                <div class="right__inputWrapper">
                                    <label >Số lượng</label>
                                    <input type="number" placeholder="Số lượng...">
                                </div>
                                <div class="right__inputWrapper">
                                    <label >Lượt Xem</label>
                                    <input type="number" disabled value="0" placeholder="Lượt xem...">
                                </div>
                                <div class="right__inputWrapper">
                                    <label >Đã Bán</label>
                                    <input type="number" disabled value="0" placeholder="Đã bán...">
                                </div>
                                <div class="right__inputWrapper">
                                    <label >Nhà Sản Xuất</label>
                                    <select name="">
                                        <option disabled selected>Chọn nhà sản xuất</option>
                                        <option value="">abc</option>
                                        <option value="">bcd</option>
                                    </select>
                                </div>
                                <div class="right__inputWrapper">
                                    <label >Loại Sản Phẩm</label>
                                    <select name="">
                                        <option disabled selected>Chọn loại sản phẩm</option>
                                        <option value="">abc</option>
                                        <option value="">bcd</option>
                                    </select>
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="desc">Mô tả</label>
                                    <textarea name="" id="" cols="30" rows="10" placeholder="Mô tả"></textarea>
                                </div>
                                <div style="display: none;" class="right__inputWrapper">
                                    <label >Trạng Thái</label>
                                    <input type="checkbox"  value="true">
                                </div>
                                <button onclick="get_img()" type="button" class="btn" >Thêm</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endsection