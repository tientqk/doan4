<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sanpham;
use App\Models\danhmuc;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index()
    {
       
        $sanpham=sanpham::paginate(8);
        
        
        return view('index')->with('sanpham',$sanpham);          
    }
    public function index1()
    {
        
        return view('admin.admin_layout');           
    }
    public function sanpham()
    {  
        $danhmuc=danhmuc::all();
        $sanpham=sanpham::paginate(9);
        return view('Home.Master.sanpham')->with('sanpham',$sanpham)->with('danhmuc',$danhmuc);         
    }
    public function sanpham_theodanhmuc($id)
    {
        $tieude_danhmuc=danhmuc::find($id);
        $danhmuc=danhmuc::all();
        $sp_theodanhmuc=danhmuc::find($id)->san_pham()->paginate(8);

        return view('Home.Master.loaisp')->with('sp_loai',$sp_theodanhmuc)->with('danhmuc',$danhmuc)->with('tieude_danhmuc',$tieude_danhmuc);
    }
    public function timkiemsp(Request $request)
    {  //keywords: tên của thẻ input trong 
        $keyword=$request->keywords;//tạo ra 1 key để lưu trữ dữ liệu sau khi submit 1 form
        $tim_sp=DB::table('sanpham')->where('tensp','like','%'.$keyword.'%')->paginate(8);
        
        return view('Home.timkiem')->with('tim_sp',$tim_sp);  
    }
    public function lienhe()
    {
        
        return view('Home.Master.lienhe');           
    }
   




}
