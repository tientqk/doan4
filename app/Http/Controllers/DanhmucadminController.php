<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\danhmuc;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


class DanhmucadminController extends Controller
{
   
    public function hienthi()
    {
        //dd($danhmuc);
        $danhmuc = danhmuc::paginate(5);
       return view('admin.danhmuc',compact('danhmuc'));
    }
    public function themdanhmuc()
    {
        return view('admin.themdanhmuc');
    }
    public function luuDanhmuc(Request $request)
    {
        $data =array();
        $data['tenloai']=$request->name_Danhmuc;
        $data['mota']=$request->MoTa_Danhmuc;
        DB::table('danhmuc')->insert($data);
        return redirect::to('themdanhmuc');
         //return redirect()->route('list')->with('thong-bao','Them thanh cong san pham
    }
    public function capnhat($id)
    {
        $danhmuc=danhmuc::find($id);
        return view('admin.suadanhmuc',compact('danhmuc'));
        //dd($danhmuc);

    }
    public function capnhatpost(Request $request,$id)
    {
        $danhmuc=danhmuc::find($id);
        $danhmuc->tenloai=$request->tenloai;
        $danhmuc->mota=$request->mota;
        $danhmuc->save();
        return redirect()->route('list');
    }
    public function xoa_danhmuc($id){
        $data =array();
        DB::table('danhmuc')->where('id',$id)->delete();
        return redirect::to('danhmuc');
    }
}
