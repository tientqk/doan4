<?php

namespace App\Http\Controllers;
use App\Models\sanpham;
use App\Models\danhmuc;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class sanphamAdmincontrller extends Controller
{
    public function sanphamadmin()
    {
        $sanpham=sanpham::paginate(5);
       return view('admin.sanpham',compact('sanpham'));
    }
    public function themsanpham()
    {
        $danhmuc =danhmuc::all();
        return view('admin.Themsp', compact('danhmuc'));
    }
    public function luusanpham(Request $request)
    {
        //dd($request->all());
        $sanpham=new sanpham();
        $sanpham->tensp = $request->tensp;
        $sanpham->gia = $request->gia;
        $sanpham->soluong = $request->soluong;
        $sanpham->mota = $request->mota;
       $sanpham->cat_id = $request->cat_id;

        if ($request->hinhanh != '') {
            $image= $request->file('hinhanh');
            $nameImageValue= Str::slug($request->tensp) . '.' . $image->extension();
            $image->move(public_path('\img\product\details\\'),$nameImageValue);
            $sanpham->hinhanh = $nameImageValue;
        } else {
            $sanpham->img  = 'no-img.jpg';
        }
        $sanpham->save();
        return redirect('sanphamadmin');
    }
    public function del_sanpham($id){
        $blog=array();
        DB::table('sanpham')->where('masp',$id)->delete();
        return redirect('sanphamadmin');
    }
    public function edit_sanpham($id)
    {
       
        $edit=DB::table('sanpham')->where('masp',$id)->get();
        $danhmuc =danhmuc::all();
        return view('admin.suasp')->with('edit',$edit)->with('danhmuc',$danhmuc);
    }
    public function update_sanpham(Request $request,$id)
    {
       
        $sp = array();
        $sp['tensp'] = $request->tensp;
        $sp['gia'] = $request->gia;
        $sp['soluong']  = $request->soluong;
        $sp['mota']  = $request->mota;
        $sp['cat_id']  = $request->cat_id;
        if ($request->hinhanh != '') {
            $image= $request->file('hinhanh');
            $nameImageValue= Str::slug($request->tensp) . '.' . $image->extension();
            $image->move(public_path('\img\product\details\\'),$nameImageValue);
            $sp['hinhanh'] = $nameImageValue;
        }
        DB::table('sanpham')->where('masp',$id)->update($sp);
        return redirect('sanphamadmin');
    }
}
