<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sanpham;
class chitietspController extends Controller
{
    public function chitiet($id)
    {
       $product=sanpham::find($id);
       return view('Home.Master.chitietsp',compact('product'));
    }
}

