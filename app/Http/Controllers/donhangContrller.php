<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class donhangContrller extends Controller
{
    public function donhang()
    {     //lấy ra thông tin khách hàng
         $order_mn=DB::table('khachhang')->get();
        return view('admin.donhang',compact('order_mn'));       
    }
    public function chitiet_donhang($id)
    { //lấy ra chi tiết đơn hàng, thông qua mã của khách hàng
        $order_detail=DB::table('order_detail')->where('ord_id',$id)->get();
        return view('admin.chitietdonhang',compact('order_detail'));
    }
}
