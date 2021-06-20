<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class baiviethomeController extends Controller
{
    public function baiviethome()
    {
       $baiviet=blog::all();
       return view('Home.Master.baiviethome',compact('baiviet'));
    }
}
