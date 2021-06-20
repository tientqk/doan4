<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Route
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// login 
Route::get('dang-nhap', 'LoginController@login')->name('login'); 
Route::post('dang-nhap', 'LoginController@loginpost');


Route::get('Home', 'SiteController@index')-> name('index'); 
Route::get('admin', 'HomeAdminController@index')->name('admin'); 
Route::get('sanpham', 'SiteController@sanpham')->name('sanpham'); 
Route::get('hienthi','DanhmucadminController@hienthi');
Route::get('danhmuc', 'DanhmucadminController@hienthi')->name('list');
Route::get('themdanhmuc', 'DanhmucadminController@themdanhmuc');
Route::post('/luudanhmuc', 'DanhmucadminController@luuDanhmuc');
Route::get('capnhat/{id}', 'DanhmucadminController@capnhat')->name('edit');
Route::post('capnhat/{id}', 'DanhmucadminController@capnhatpost');
Route::get('xoa/{id}', 'DanhmucadminController@xoa_danhmuc');
Route::get('chitiet/{id}', 'chitietspController@chitiet')->name('detail');
Route::get('add-to-cart/{id}', 'giohangController@addToCart'); 
Route::get('show-cart','giohangController@showCart');
Route::get('chitiethđ', 'chitiethđController@chitiethđ'); 
Route::get('donhang', 'donhangContrller@donhang'); 

Route::get('lienhe', 'SiteController@lienhe')->name('lienhe'); 


Route::get('/thembaiviet','blogController@newfeed')->name('add');
Route::get('/xoa_bai/{id}','blogController@del_newfeed');
Route::post('luubaiviet','blogController@NewPost')->name('save_bv');
Route::get('baiviet', 'blogController@all_blog')->name('baiviet');
Route::get('/sua_bai/{id}','blogController@edit_newfeed');
Route::post('capnhat/{id}','blogController@update_newfeed');

Route::get('baiviethome', 'baiviethomeController@baiviethome')->name('bvhome');
// cart
//sanpham region
Route::get('sanphamadmin', 'sanphamAdmincontrller@sanphamadmin')->name('admin');
Route::get('/themsanpham','sanphamAdmincontrller@themsanpham')->name('add');
Route::post('/luusp','sanphamAdmincontrller@luusanpham')->name('save');
Route::get('xoasp/{id}','sanphamAdmincontrller@del_sanpham');
Route::get('suasp/{id}','sanphamAdmincontrller@edit_sanpham');
Route::post('capnhat_sp/{id}','sanphamAdmincontrller@update_sanpham');
//endregion
Route::group(['prefix' => ''], function () {
    Route::get('danh-sach-gio-hang', 'giohangController@list')->name('listcart');
    Route::get('updatecart/{rowId}/{qty}', 'giohangController@UpdateCart');
    Route::get('them-gio-hang/{slug}', 'giohangController@AddCartShop')->name('addcartshop');
    Route::post('gio-hang', 'giohangController@AddCart')->name('cart.add');
    Route::get('xoa-don-hang/{id}', 'giohangController@RemoveCart')->name('removecart');

    Route::get('thongtinkh', 'thongtinkhController@thongtinkh'); 
    // Route::get('thanh-toan', 'giohangController@CheckOut')->name('checkOut');
    Route::post('thongtinkh', 'thongtinkhController@CheckoutSuccess')->name('checkoutsuccess');
    // Route::get('mua-hang-thanh-cong', 'giohangController@CheckoutSuccessGet');
});

Route::post('mua-hang-thanh-cong', 'giohangController@CheckoutSuccess')->name('checkoutsuccess');
Route::get('sanpham_loaisp/{id}','SiteController@sanpham_theodanhmuc')->name('byid'); 
Route::get('chitiet-donhang/{id}','donhangContrller@chitiet_donhang');
