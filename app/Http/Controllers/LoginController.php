<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nguoidung;
class LoginController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    public function loginpost(Request $request)
    {
        $nguoidung=nguoidung::where('taikhoan',$request->taikhoan)->where('matkhau',$request->matkhau)->first();
        if($nguoidung){
            return view('admin.admin_layout');
        }else{
            return back()->with('thong-bao','
            <div class="alert alert-danger" role="alert">
            Sai tai khoan hoac mat khau</div>');
        }
    }
}
