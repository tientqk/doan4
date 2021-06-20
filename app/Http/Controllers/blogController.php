<?php

namespace App\Http\Controllers;
use App\Models\blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class blogController extends Controller
{
    public function all_blog()
    {
        $get_newfeed =DB::table('_newfeed')->paginate(4);
        // $Category = category::all();
       return view('admin.baiviet', compact('get_newfeed'));
    }
    public function newfeed()
    {
        $newfeed =blog::all();
        return view('admin.thembaiviet', compact('newfeed'));
    }
    public function NewPost(Request $request)
    {
        //dd($request->all());
        $blog = new blog();
        $blog->tieude = $request->tieude;
        $blog->baiviet = $request->baiviet;
        $blog->thoigian = $request->thoigian;
        if ($request->img != '') {
            $image= $request->file('img');
            $nameImageValue= Str::slug($request->tieude) . '.' . $image->extension();
            $image->move(public_path('\img\product\details\\'),$nameImageValue);
            $blog->img = $nameImageValue;
        } else {
            $blog->img  = 'no-img.jpg';
        }
        $blog->save();
        return redirect('baiviet');
    }
     public function del_newfeed($id){
        $blog=array();
        DB::table('_newfeed')->where('id',$id)->delete();
        return redirect('baiviet');
    }
    public function edit_newfeed($id)
    {
       
        $edit=DB::table('_newfeed')->where('id',$id)->get();
        return view('admin.suabaiviet',compact('edit'));
    }
    public function update_newfeed(Request $request,$id)
    {
       
        $blog = array();
        $blog['tieude'] = $request->tieude;
        $blog['baiviet'] = $request->baiviet;
        $blog['thoigian']  = $request->thoigian;
        if ($request->img != '') {
            $image= $request->file('img');
            $nameImageValue= Str::slug($request->tieude) . '.' . $image->extension();
            $image->move(public_path('\img\product\details\\'),$nameImageValue);
            $blog['img'] = $nameImageValue;
        }
        DB::table('_newfeed')->where('id',$id)->update($blog);
        return redirect('baiviet');
    }
}
