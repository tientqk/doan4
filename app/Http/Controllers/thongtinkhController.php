<?php

namespace App\Http\Controllers;
use App\Models\{khachhang,ord_detail};
use Illuminate\Http\Request;
use Cart;
class thongtinkhController extends Controller
{
      public function thongtinkh()
    {
       
       return view('Home.Master.thongtinkh');
    }
      public function CheckoutSuccess(Request $request)
    {
      // dd(Cart::content());
      $khachhang=new khachhang();
      $khachhang->name=$request->name;
      $khachhang->sdt=$request->phone;
      $khachhang->diachi=$request->address;
      $khachhang->email=$request->email;
      $khachhang->save();
      foreach (Cart::content() as $key => $value) {
         $chitiet_hoadon = new ord_detail();
         $chitiet_hoadon->name = $value->name;
         $chitiet_hoadon->price = $value->price;
         $chitiet_hoadon->quantity = $value->qty;
         $chitiet_hoadon->image = $value->options->img;
         $chitiet_hoadon->ord_id = $khachhang->id;
         $chitiet_hoadon->save();
     }
     return redirect('Home');
    }
}
